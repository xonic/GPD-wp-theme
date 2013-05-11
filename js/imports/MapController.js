//  ---------------------------------------------------------------------------
//
//  Google Maps Controller
//
//  ---------------------------------------------------------------------------



// Module definition
define(["jquery"], function($)
{
	var MapController =
	{
		mapOptions:
		{
			center: new google.maps.LatLng(-34.397, 150.644),
			zoom: 8,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		},

		init: function()
		{
			console.log("Init Maps");

			var map = new google.maps.Map(document.getElementById("map-day-one"), this.mapOptions);
		}
	};

	return MapController;
});
