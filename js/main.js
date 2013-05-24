requirejs.config(
{
	paths:
	{
		// 'jquery'			: 'imports/jquery-1.9.1',
		'modernizr'			: 'imports/modernizr',
		'selectivizr'		: 'imports/selectivizr', 
		'maps'				: 'imports/mapcontroller'
	},

	shim:
	{
		'modernizr': {
			exports: 'Modernizr'
		}
	}
});

require(["maps"], function(MapController)
{

	MapController.init();

});
