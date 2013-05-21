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
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
<!--[if IE 7]>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ie7.min.css">
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/screen.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- TypeKit -->
<script type="text/javascript" src="//use.typekit.net/wkm4uha.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiah6D-8-DEO6lAtyEXFvPkeohKQdhjKU&sensor=false"></script> -->

<!-- RequireJS -->
<!--<script data-main="<?php echo get_template_directory_uri(); ?>/js/main" src="<?php echo get_template_directory_uri(); ?>/js/require.js"></script>-->

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

	<div class="branding">
		<div class="container">
			<h1 class="event-name">
				<small class="event-name__gp">Gran Premio</small>
				Dolomiti
				<!-- <small class="event-name__year">2014</small> -->
			</h1>
		</div>
		<!-- <h1 class="branding__event-name">Gran Premio Dolomiti &middot; 2014</h1>
		<p class="branding__tagline">The Big Challenge for Classic Car Connosseuirs</p>
		<p class="branding__date">July 23rd to 27th, 2014</p>TODO: Use <time>  -->
		<!-- <p><? _e("Branding", "gp-dolomiti"); ?></p> -->
	</div>

	<section class="info">
		<div class="container">
			<hgroup>
				<h1 class="section__title">Racing for Classic Car Connosseuirs</h1>
				<h2 class="info__date">
					<time datetime="2014-07-23">July 23rd</time> to <time datetime="2014-07-27">27th, 2014</time>
				</h2>
			</hgroup>
			<!-- <p><? _e("Beschreibung", "gp-dolomiti"); ?></p> -->
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			</p>
			<p class="">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			</p>
		</div>
	</section>

	<section class="program section--dark">
		<div class="container">
			<h1 class="section__title section__title--emphasized">Timetable</h1>
			<!-- <p><? _e("Programm", "gp-dolomiti"); ?></p> -->
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-22">Tuesday, July 22nd, 2014</time>
				</h1>
				<ol class="space-lover">
					<li class="media">
						<div class="media__img"><i class="icon-group"></i></div>
						<div class="media__bd">Arrival of participants</div>
					</li>
					<li class="media">
						<div class="media__img"><i class="icon-dashboard"></i></div>
						<div class="media__bd">Technical inspection and approval at the driving center</div>
					</li>
					<li class="media">
						<div class="media__img"><i class="icon-briefcase"></i></div>
						<div class="media__bd">Hotel Check-In</div>
					</li>
					<li class="media">
						<div class="media__img"><i class="icon-food"></i></div>
						<div class="media__bd">Dinner at the hotel or in one of Merano's gourmet restaurants</div>
					</li>
				</ol>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-23">Wednesday, July 23rd, 2014</time>
				</h1>

				<table class="day__route">
					<thead>
						<th class="route__icon"></th>
						<th class="route__location">Location</th>
						<th class="route__altitude">Altitude</th>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">Merano</td>
							<td class="route__altitude">324m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Passo Giovo</td>
							<td class="route__altitude">2094m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Vipiteno</td>
							<td class="route__altitude">948m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Passo Pennes</td>
							<td class="route__altitude">2211m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Bolzano</td>
							<td class="route__altitude">262m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Passo Mendola</td>
							<td class="route__altitude">1363m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Fondo</td>
							<td class="route__altitude">997m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Passo Palade</td>
							<td class="route__altitude">1518m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">Merano</td>
							<td class="route__altitude">324m</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd"><p>Italian dinner &mdash; the best of italian cuisine</p></div>
				</div>

				<div class="map-container space-lover">
					<div id="map-day-one" class="map-canvas"></div>
				</div>
			</section>

			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-24">Thursday, July 24th, 2014</time>
				</h1>

				<table class="day__route">
					<thead>
						<th class="route__icon"></th>
						<th class="route__location">Location</th>
						<th class="route__altitude">Altitude</th>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">Bolzano</td>
							<td class="route__altitude">262m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Renon</td>
							<td class="route__altitude">1154m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">San Barbiano</td>
							<td class="route__altitude">830m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Passo delle Erbe</td>
							<td class="route__altitude">2003m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Corvara</td>
							<td class="route__altitude">1568m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Passo Gardena</td>
							<td class="route__altitude">2121m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Ortisei</td>
							<td class="route__altitude">1236m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Castelrotto</td>
							<td class="route__altitude">1060m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Siusi</td>
							<td class="route__altitude">1004m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">Bolzano</td>
							<td class="route__altitude">262m</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd"><p>Dinner: A walk through the best of South Tyrolean kitchen</p></div>
				</div>
				
				<div class="map-container space-lover">
					<div id="map-day-two" class="map-canvas"></div>
				</div>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-25">Friday, July 25th, 2014</time>
				</h1>

				<table class="day__route">
					<thead>
						<th class="route__icon"></th>
						<th class="route__location">Location</th>
						<th class="route__altitude">Altitude</th>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">Merano</td>
							<td class="route__altitude">324m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Glorenza</td>
							<td class="route__altitude">907m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Passo Stelvio</td>
							<td class="route__altitude">2763m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">Merano</td>
							<td class="route__altitude">324m</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd"><p>Optional Dinner: Discover a new favourite restaurant in the area</p></div>
				</div>

				<div class="map-container space-lover">
					<div id="map-day-three" class="map-canvas"></div>
				</div>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-26">Saturday, July 26th, 2014</time>
				</h1>

				<table class="day__route">
					<thead>
						<th class="route__icon"></th>
						<th class="route__location">Location</th>
						<th class="route__altitude">Altitude</th>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">Merano</td>
							<td class="route__altitude">324m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Lana</td>
							<td class="route__altitude">1154m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Andrian</td>
							<td class="route__altitude">830m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">St. Pauls</td>
							<td class="route__altitude">2003m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Eppan</td>
							<td class="route__altitude">1568m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Caldaro</td>
							<td class="route__altitude">425m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">Neumarkt</td>
							<td class="route__altitude">1236m</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">Bolzano</td>
							<td class="route__altitude">262m</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd"><p>Gala Dinner: Kurhaus Merano</p></div>
				</div>

				<div class="map-container space-lover">
					<div id="map-day-four" class="map-canvas"></div>
				</div>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-27">Sunday, July 27th, 2014</time>
				</h1>
				<div class="day__special media">
					<div class="media__img"><i class="icon-trophy"></i></div>
					<div class="media__bd"><p>Pricegiving ceremony Promenade Merano</p></div>
				</div>
			</section>
		</div>
	</section>

	<section class="rules">
		<div class="container">
			<hgroup>
				<h1 class="section__title section__title--emphasized">Entry Regulations</h1>
				<h2>FIVA Oldtimer Vehicle Classes</h2>
			</hgroup>
			<dl>
				<dt>Class A, "Ancetre"</dt>
				<dd>All cars manufactured before <time datetime="1904">1904</time></dd>
				<dt>Class B, "Veteran"</dt>
				<dd>All cars manufactured between <time datetime="1905-01-01">January 1st, 1905</time> and <time datetime="1918-12-31">December 31st, 1918</time></dd>
				<dt>Class C, "Vintage"</dt>
				<dd>All cars manufactured between <time datetime="1919-01-01">January 1st, 1919</time> and <time datetime="1930-12-31">December 31st, 1930</time></dd>
				<dt>Class D, "Post Vintage"</dt>
				<dd>All cars manufactured between <time datetime="1931-01-01">January 1st, 1931</time> and <time datetime="1945-12-31">December 31st, 1945</time></dd>
				<dt>Class E</dt>
				<dd>All cars manufactured between <time datetime="1905-01-46">January 1st, 1946</time> and <time datetime="1918-12-60">December 31st, 1960</time></dd>
			</dl>

			<p><? _e("Zulassung", "gp-dolomiti"); ?></p>
		</div>
	</section>
<!--
	<section class="registration">
		<div class="container">
			<h1 class="section__title section__title--emphasized">Registration</h1>
			<p><? _e("Anmeldung/Tickets", "gp-dolomiti"); ?></p>
		</div>
	</section>
-->
	<section class="newsletter section--dark">
		<div class="container">
			<h1 class="section__title section__title--emphasized">Newsletter</h1>
			<p><? _e("Newsletter", "gp-dolomiti"); ?></p>
		</div>
	</section>

	<section class="contact">
		<div class="container">
			<h1 class="section__title section__title--emphasized">Contact</h1>
			<div class='contact-form'>
				<h2>We're happy to hear from you</h2>
				<? // always use id="678" for live site
				echo do_shortcode('[contact-form-7 id="8" title="contact-EN"]'); ?>
			</div>
		</div>
	</section>
	<?php wp_footer(); ?>
</body>

