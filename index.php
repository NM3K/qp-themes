<?php $themes = array('default','aluminium','blank','blue','blue-2','classic','green','green-2','grey','navy','navy-2','orange','orange-2','organic','red','red-2','tech','zen'); ?>
<html>
	<head>
		<title>QuestionPro Themes</title>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap.min.css" rel="stylesheet">
		<style>
			body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
		</style>
	</head>
	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a href="#" class="brand">QuestionPro Themes</a>
				</div>
			</div>
		</div>
		
		<div class="container">
			<?php foreach($themes as $theme): ?>
				
					<p>
						<span class="label"><?=ucfirst($theme)?></span>
					</p>

					<ul>
					<?php foreach(range(1,6) as $step): ?>
						<li>
							<a target="_blank" href="view.php?step=<?=$step?>&theme=<?=$theme?>">Step <?=$step?></a>
						</li>
					<?php endforeach; ?>
					</ul>
			<?php endforeach; ?>
		</div>

	</body>
</html>