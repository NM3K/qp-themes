<?php 
$themes = array(
	'default',
	'aluminium',
	'blank',
	'blue',
	'blue-2',
	'classic',
	'green',
	'green-2',
	// 'grey',
	'navy',
	'navy-2',
	'orange',
	'orange-2',
	'organic',
	'red',
	'red-2',
	'tech',
	'zen'
); 

foreach($themes as $key => $theme) {
	$output = array(
		'url' => "http://qp-themes.loc/view.php?step=1&theme=".$theme,
		'image' => $key.'_'.$theme.'.png'
	);
	$command = 'phantomjs grab.js ' . $output['url'] . ' ' . $output['image'];
	echo escapeshellcmd($command) . " && ";
	// system($command);
	// PHP_EOL();
}
?>
