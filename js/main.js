requirejs.config(
{
	paths: 
	{
		'jquery'			: 'imports/jquery-1.9.1',
		'modernizr'			: 'imports/modernizr',
		'selectivizr'		: 'imports/selectivizr', 
		'prism'				: 'imports/prism',
		'dropdown'			: 'imports/dropdown', 
		'collapse'			: 'imports/collapse',
		'tabcontroller'		: 'imports/tabcontroller',
		'scrollcontroller'	: 'imports/scrollcontroller', 
		'stickycontroller'	: 'imports/stickycontroller', 
		'contentshifter'	: 'imports/contentshifter',
		'common'			: 'imports/common',
		'flyoutcontroller'	: 'imports/flyoutcontroller'
	},
	shim: 
	{
		'modernizr': {
			exports: 'Modernizr'
		},
		'prism': {
			exports: 'Prism'
		},
		'dropdown': {
			deps: ['jquery']
		}
	}
});

require(["jquery", "common"], function($, Common)
{
    
	//Define a constructor method
	var Kernel = function(){
		Common.constructor();
	};

	//instantiate the application automagically
	var kernel = new Kernel();

});
