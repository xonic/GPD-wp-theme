
// Use WP jQuery
if (typeof jQuery === 'function')
{
  define('jquery', function () { return jQuery; });
}


require(["jquery", "nav", "modernizr"], function($, NavController)
{
	// Add this event listener to prevent mobile safari 
	// from disabling the ::active pseudo class
	$(document).on("touchstart", function() {});

	NavController.init();
});