<?php
/**
 * Template Name: Sneak Preview Template
 * Description: A Page Template that is initially used to provide basic information about the GP Dolomiti Event
 *
 * @package WordPress
 * @subpackage GP-Dolomiti
 * @since Gran Premio Dolomiti 1.0
 */
?>

<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );


	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/screen.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- TypeKit -->
<script type="text/javascript" src="//use.typekit.net/wkm4uha.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiah6D-8-DEO6lAtyEXFvPkeohKQdhjKU&sensor=false"></script>

<!-- RequireJS -->
<script data-main="<?php echo get_template_directory_uri(); ?>/js/main" src="<?php echo get_template_directory_uri(); ?>/js/require.js"></script>

<!--[if lte IE 8]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
<?php

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

	<article class="container">

		<section class="branding">
			<h1 class="event-name">
				<small class="event-name__gp">Gran Premio</small>
				Dolomiti
				<small class="event-name__year">2014</small>
			</h1>
			<!-- <h1 class="branding__event-name">Gran Premio Dolomiti &middot; 2014</h1>
			<p class="branding__tagline">The Big Challenge for Classic Car Connosseuirs</p>
			<p class="branding__date">July 23rd to 27th, 2014</p>TODO: Use <time>  -->
			<!-- <p><? _e("Branding", "gp-dolomiti"); ?></p> -->
		</section>

		<section class="info">
			<p><? _e("Beschreibung", "gp-dolomiti"); ?></p>
			<p>Insert description here</p>
		</section>

		<section class="program">
			<p><? _e("Programm", "gp-dolomiti"); ?></p>
			<section class="day">
				<time class="day__date" datetime="2014-07-22">Tuesday, July 22rd, 2014</time>
				<p class="day__special">Arrival of participants &mdash; Check-in</p>
			</section>
			<section class="day">
				<time class="day__date" datetime="2014-07-23">Wednesday, July 23rd, 2014</time>
				<ol class="day__route">
					<li class="day__waypoint">
						<span class="waypoint__location">Merano</span>
						<span class="waypoint__altitude">324m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Passo Giovo</span>
						<span class="waypoint__altitude">2094m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Vipiteno</span>
						<span class="waypoint__altitude">948m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Passo Pennes</span>
						<span class="waypoint__altitude">2211m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Bolzano</span>
						<span class="waypoint__altitude">262m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Passo Mendola</span>
						<span class="waypoint__altitude">1363m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Fondo</span>
						<span class="waypoint__altitude">997m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Passo Palade</span>
						<span class="waypoint__altitude">1518m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Merano</span>
						<span class="waypoint__altitude">324m</span>
					</li>
				</ol>
				<div class="map-container">
					<div id="map-day-one" class="map-canvas"></div>
				</div>
				<p class="day__dinner">Dinner: Notte Italiana &mdash; the best of italian cuisine</p>
			</section>
			<section class="day">
				<time class="day__date" datetime="2014-07-24">Thursday, July 24rd, 2014</time>
				<ol class="day__route">
					<li class="day__waypoint">
						<span class="waypoint__location">Bolzano</span>
						<span class="waypoint__altitude">262m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Renon</span>
						<span class="waypoint__altitude">1154m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">San Barbiano</span>
						<span class="waypoint__altitude">830m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Passo delle Erbe</span>
						<span class="waypoint__altitude">2003m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Corvara</span>
						<span class="waypoint__altitude">1568m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Passo Gardena</span>
						<span class="waypoint__altitude">2121m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Ortisei</span>
						<span class="waypoint__altitude">1236m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Castelrotto</span>
						<span class="waypoint__altitude">1060m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Siusi</span>
						<span class="waypoint__altitude">1004m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Bolzano</span>
						<span class="waypoint__altitude">262m</span>
					</li>
				</ol>
				<div class="map-container">
					<div id="map-day-two" class="map-canvas""></div>
				</div>
				<p class="day__dinner">Dinner: A walk through the best of South Tyrolean kitchen</p>
			</section>
			<section class="day">
				<time class="day__date" datetime="2014-07-25">Friday, July 25rd, 2014</time>
				<ol class="day__route">
					<li class="day__waypoint">
						<span class="waypoint__location">Merano</span>
						<span class="waypoint__altitude">324m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Glorenza</span>
						<span class="waypoint__altitude">907m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Passo Stelvio</span>
						<span class="waypoint__altitude">2763m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Merano</span>
						<span class="waypoint__altitude">324m</span>
					</li>
				</ol>
				<div class="map-container">
					<div id="map-day-three" class="map-canvas"></div>
				</div>
				<p class="day__dinner">Optional Dinner: Discover a new favourite restaurant in the area</p>
			</section>
			<section class="day">
				<time class="day__date" datetime="2014-07-26">Saturday, July 26rd, 2014</time>
				<ol class="day__route">
					<li class="day__waypoint">
						<span class="waypoint__location">Merano</span>
						<span class="waypoint__altitude">324m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Caldaro</span>
						<span class="waypoint__altitude">425m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Termeno</span>
						<span class="waypoint__altitude">276m</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Wine Route</span>
					</li>
					<li class="day__waypoint">
						<span class="waypoint__location">Concourse d'elegance</span>
					</li>
				</ol>
				<div class="map-container">
					<div id="map-day-four" class="map-canvas"></div>
				</div>
				<p class="day__dinner">Gala Dinner: Kurhaus Merano</p>
			</section>
			<section class="day">
				<time class="day__date" datetime="2014-07-27">Sunday, July 27rd, 2014</time>
				<p class="day__special">Pricegiving ceremony Promenade Merano</p>
			</section>
		</section>

		<section class="rules">
			<p><? _e("Zulassung", "gp-dolomiti"); ?></p>
		</section>

		<section class="registration">
			<p><? _e("Anmeldung/Tickets", "gp-dolomiti"); ?></p>
		</section>

		<section class="newsletter">
			<p><? _e("Newsletter", "gp-dolomiti"); ?></p>
		</section>

		<section class="contact">
			<p><? _e("Kontaktformular", "gp-dolomiti"); ?></p>
		</section>

	</article>

</body>

