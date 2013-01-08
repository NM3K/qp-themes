var system = require('system');

var url = system.args[1];
var image = system.args[2];

var page = require('webpage').create();
page.viewportSize = {width: 1000, height: 870}

page.open( url , function () {
 	page.render( 'images/' + image );
 	phantom.exit();
});