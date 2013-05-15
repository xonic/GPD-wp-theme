//  ---------------------------------------------------------------------------
//
//  Google Maps Controller
//
//  ---------------------------------------------------------------------------



// Module definition
define(function()
{
	var MapController =
	{

		routes:
		{
			dayOne:
			{
				origin:"Merano, Italy",
				destination:"Merano, Italy",
				waypoints:
				[
					{ location: "Passo Giovo, Italy" },
					{ location: "Vipiteno, Italy" },
					{ location: "Passo Pennes, Italy" },
					{ location: "Bolzano, Italy" },
					{ location: "Passo Mendola, Italy" },
					{ location: "Fondo, Italy" },
					{ location: "Passo Palade, Italy" }
				],
				travelMode: google.maps.TravelMode.DRIVING,
				optimizeWaypoints: false
			},

			dayTwo:
			{
				origin:"Bolzano, Italy",
				destination:"Bolzano, Italy",
				waypoints:
				[
					{ location: "Renon, Italy" },
					// { location: "San Barbiano, Italy" },
					{ location: "Passo delle Erbe, Italy" },
					{ location: "Corvara, Italy" },
					{ location: "Passo Gardena, Italy" },
					{ location: "Ortisei, Italy" },
					{ location: "Castelrotto, Italy" },
					{ location: "Siusi, Italy" }
				],
				travelMode: google.maps.TravelMode.DRIVING,
				optimizeWaypoints: false
			},

			dayThree:
			{
				origin:"Merano, Italy",
				destination:"Merano, Italy",
				waypoints:
				[
					{ location: "Glorenza, Italy" },
					{ location: "Stilfser Joch, Italy" },
					{ location: "Passo del Tonale, Italy" }
					// { location: "Pirovano Stelvio, Italy" },
					// { location: "Trafoi, Italy" }
				],
				travelMode: google.maps.TravelMode.DRIVING,
				optimizeWaypoints: false
			},

			dayFour:
			{
				origin:"Merano, Italy",
				destination:"Merano, Italy",
				waypoints:
				[
					{ location: "Lana, Italy" },
					{ location: "Andriano, Italy" },
					{ location: "St. Pauls, Italy" },
					{ location: "Eppano, Italy" },
					{ location: "Caldaro, Italy" },
					{ location: "Neumarkt, Italy" }
				],
				travelMode: google.maps.TravelMode.DRIVING,
				optimizeWaypoints: false
			}
		},

		mapOptions:
		{
			center:new google.maps.LatLng(46.6712938, 11.15251790000002),
			zoom:12,
			disableDefaultUI: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			draggable: false
		},

		init: function()
		{
			var map1 = new google.maps.Map(document.getElementById("map-day-one"), this.mapOptions), 
				map2 = new google.maps.Map(document.getElementById("map-day-two"), this.mapOptions),
				map3 = new google.maps.Map(document.getElementById("map-day-three"), this.mapOptions),
				map4 = new google.maps.Map(document.getElementById("map-day-four"), this.mapOptions),

				dirDisplay1 = new google.maps.DirectionsRenderer({ suppressMarkers: true }),
				dirDisplay2 = new google.maps.DirectionsRenderer({ suppressMarkers: true }),
				dirDisplay3 = new google.maps.DirectionsRenderer({ suppressMarkers: true }),
				dirDisplay4 = new google.maps.DirectionsRenderer({ suppressMarkers: true }),

				dirService = new google.maps.DirectionsService();

				dirDisplay1.setMap(map1);
				dirDisplay2.setMap(map2);
				dirDisplay3.setMap(map3);
				dirDisplay4.setMap(map4);

				dirService.route(this.routes.dayOne, function(response, status)
				{
					if(status == google.maps.DirectionsStatus.OK)
					{
						dirDisplay1.setDirections(response);
					}
				});

				dirService.route(this.routes.dayTwo, function(response, status)
				{
					if(status == google.maps.DirectionsStatus.OK)
					{
						dirDisplay2.setDirections(response);
					}
				});

				dirService.route(this.routes.dayThree, function(response, status)
				{
					if(status == google.maps.DirectionsStatus.OK)
					{
						dirDisplay3.setDirections(response);
					}
				});

				dirService.route(this.routes.dayFour, function(response, status)
				{
					if(status == google.maps.DirectionsStatus.OK)
					{
						dirDisplay4.setDirections(response);
					}
				});

				// var that = this;

				// google.maps.event.addDomListener(window, 'resize', function()
				// {
				//    dirService.route(that.routes.dayOne, function(response, status)
				//    {
				//    		if(status == google.maps.DirectionsStatus.OK)
				//    		{
				//    			dirDisplay1.setDirections(response);
				//    		}
				//    });

				//    dirService.route(that.routes.dayTwo, function(response, status)
				//    {
				//    		if(status == google.maps.DirectionsStatus.OK)
				//    		{
				//    			dirDisplay2.setDirections(response);
				//    		}
				//    });

				//    dirService.route(that.routes.dayThree, function(response, status)
				//    {
				//    		if(status == google.maps.DirectionsStatus.OK)
				//    		{
				//    			dirDisplay3.setDirections(response);
				//    		}
				//    });

				//    dirService.route(that.routes.dayFour, function(response, status)
				//    {
				//    		if(status == google.maps.DirectionsStatus.OK)
				//    		{
				//    			dirDisplay4.setDirections(response);
				//    		}
				//    });
				// });

			// console.log("Init Maps");

			// var maps = {};

			// for (template in this.mapTemplates)
			// {
			// 	// this.mapTemplates[template].dirDisplay = new google.maps.DirectionsRenderer();
			// 	// this.mapTemplates[template].dirService = new google.maps.DirectionsService();

			// 	maps[template] = new google.maps.Map(document.getElementById(this.mapTemplates[template].mapId), this.mapOptions);
			// 	this.mapTemplates[template].dirDisplay.setMap(maps[template]);

			// 	var that = this;

			// 	this.mapTemplates[template].dirService.route(this.mapTemplates[template].route, function(response, status)
			// 	{
			// 		if(status == google.maps.DirectionsStatus.OK)
			// 		{
			// 			that.mapTemplates[template].dirDisplay.setDirections(response);
			// 		}
			// 	});
			// }
			// console.log(this.mapTemplates);
			// console.log(maps);
			// 	// dayOneMap = new google.maps.Map(document.getElementById("map-day-one"), this.mapOptions);





			// var coder = new google.maps.Geocoder();

			// coder.geocode({ address: "Merano, Italy" }, function(results, status)
			// {
			// 	if(status == google.maps.GeocoderStatus.OK)
			// 	{
			// 		console.log(results);
			// 	}
			// });
		}
	};

	return MapController;
});
