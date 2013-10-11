//  ---------------------------------------------------------------------------
//
//  Main page navigation
//
//  ---------------------------------------------------------------------------



// Module definition
define(["jquery"], function($)
{
	var NavController =
	{
		$body:undefined,
		$toggle:undefined,

		init:function()
		{
			this.$body = $("body");
			this.$toggle = $(".js-flyout__toggle");

			this.bindEventListeners();
		},

		bindEventListeners:function()
		{
			var self = this;

			this.$toggle.on("click", function(e){ self.toggleMenu.call(self); });
		},

		toggleMenu:function()
		{
			this.$body.toggleClass("nav-is-shown");
		}
	};

	return NavController;
});
