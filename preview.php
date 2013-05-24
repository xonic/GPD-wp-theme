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

	<div class="branding">
		<div class="container">
			<h1 class="event-name">
				<small class="event-name__gp">Gran Premio</small>
				Dolomiti
				<!-- <small class="event-name__year">2014</small> -->
			</h1>
		</div>
	</div>

	<section class="info">
		<? echo qtrans_getLanguage(); ?>
		<div class="container">
			<hgroup>
				<h1 class="section__title">
					<? _e("pre__info__title", "gp-dolomiti"); ?>
				</h1>
				<h2 class="info__date">
					<time datetime="2014-07-23">
						<? _e("pre__info__start-date", "gp-dolomiti"); ?>
					</time> 
					<? _e("pre__info__to", "gp-dolomiti"); ?>
					<time datetime="2014-07-27">
						<? _e("pre__info__end-date", "gp-dolomiti"); ?>
					</time>
				</h2>
			</hgroup>

			<p>
				<? _e("pre__info__p1", "gp-dolomiti"); ?>
			</p>
			<p>
				<? _e("pre__info__p2", "gp-dolomiti"); ?>
			</p>
		</div>
	</section>

	<section class="program section--dark">
		<div class="container">
			<h1 class="section__title section__title--emphasized">
				<? _e("pre__program__title", "gp-dolomiti"); ?>
			</h1>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-22">
						<? _e("pre__day1", "gp-dolomiti"); ?>
					</time>
				</h1>
				<ol class="space-lover">
					<li class="media">
						<div class="media__img"><i class="icon-group"></i></div>
						<div class="media__bd">
							<? _e("pre__arrival", "gp-dolomiti"); ?>
						</div>
					</li>
					<li class="media">
						<div class="media__img"><i class="icon-dashboard"></i></div>
						<div class="media__bd">
							<? _e("pre__inspection", "gp-dolomiti"); ?>
						</div>
					</li>
					<li class="media">
						<div class="media__img"><i class="icon-briefcase"></i></div>
						<div class="media__bd">
							<? _e("pre__check-in", "gp-dolomiti"); ?>
						</div>
					</li>
					<li class="media">
						<div class="media__img"><i class="icon-food"></i></div>
						<div class="media__bd">
							<? _e("pre__day1__dinner", "gp-dolomiti"); ?>
						</div>
					</li>
				</ol>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-23">
							<? _e("pre__day2", "gp-dolomiti"); ?>
						</time>
				</h1>

				<table class="day__route">
					<thead>
						<th class="route__icon"></th>
						<th class="route__location">
							<? _e("pre__location", "gp-dolomiti"); ?>
						</th>
						<th class="route__altitude">
							<? _e("pre__altitude", "gp-dolomiti"); ?>
						</th>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">
							<? _e("pre__meran", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__jaufen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__jaufen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__sterzing", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__sterzing__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__penser", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__penser__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__bozen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__mendel", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__mendel__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__fondo", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__fondo__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__gampen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__gampen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">
								<? _e("pre__meran", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd">
						<p>
							<? _e("pre__day2__dinner", "gp-dolomiti"); ?>
						</p>
					</div>
				</div>

				<div class="map-container space-lover">
					<div id="map-day-one" class="map-canvas"></div>
				</div>
			</section>

			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-24">
						<? _e("pre__day3", "gp-dolomiti"); ?>
					</time>
				</h1>

				<table class="day__route">
					<thead>
						<th class="route__icon"></th>
						<th class="route__location">
							<? _e("pre__location", "gp-dolomiti"); ?>
						</th>
						<th class="route__altitude">
							<? _e("pre__altitude", "gp-dolomiti"); ?>
						</th>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">
								<? _e("pre__bozen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__ritten", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__ritten__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__barbian", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__barbian__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__erbe", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__erbe__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__corvara", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__corvara__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__gader", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__gader__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__ortisei", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__ortisei__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__kastelruth", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__kastelruth__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__siusi", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__siusi__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">
								<? _e("pre__bozen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd">
						<p>
							<? _e("pre__day3__dinner", "gp-dolomiti"); ?>
						</p>
					</div>
				</div>
				
				<div class="map-container space-lover">
					<div id="map-day-two" class="map-canvas"></div>
				</div>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-25">
						<? _e("pre__day4", "gp-dolomiti"); ?>
					</time>
				</h1>

				<table class="day__route">
					<thead>
						<th class="route__icon"></th>
						<th class="route__location">
							<? _e("pre__location", "gp-dolomiti"); ?>
						</th>
						<th class="route__altitude">
							<? _e("pre__altitude", "gp-dolomiti"); ?>
						</th>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">
								<? _e("pre__meran", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__glurns", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__glurns__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__stilfs", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__stilfs__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">
								<? _e("pre__meran", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd">
						<p>
							<? _e("pre__day4__dinner", "gp-dolomiti"); ?>
						</p>
					</div>
				</div>

				<div class="map-container space-lover">
					<div id="map-day-three" class="map-canvas"></div>
				</div>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-26">
						<? _e("pre__day5", "gp-dolomiti"); ?>
					</time>
				</h1>

				<table class="day__route">
					<thead>
						<th class="route__icon"></th>
						<th class="route__location">
							<? _e("pre__location", "gp-dolomiti"); ?>
						</th>
						<th class="route__altitude">
							<? _e("pre__altitude", "gp-dolomiti"); ?>
						</th>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">
								<? _e("pre__meran", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__lana", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__lana__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__andrian", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__andrian__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__pauls", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__pauls__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__eppan", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__eppan__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__kaltern", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__kaltern__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__neumarkt", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__neumarkt__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">
								<? _e("pre__bozen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd">
						<p>
							<? _e("pre__day5__dinner", "gp-dolomiti"); ?>
						</p>
					</div>
				</div>

				<div class="map-container space-lover">
					<div id="map-day-four" class="map-canvas"></div>
				</div>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-27">
						<? _e("pre__day6", "gp-dolomiti"); ?>
					</time>
				</h1>
				<div class="day__special media">
					<div class="media__img"><i class="icon-trophy"></i></div>
					<div class="media__bd">
						<p>
							<? _e("pre__day6__ceremony", "gp-dolomiti"); ?>
						</p>
					</div>
				</div>
			</section>
		</div>
	</section>

	<section class="rules">
		<div class="container">
			<hgroup>
				<h1 class="section__title section__title--emphasized">
					<? _e("pre__rules__title", "gp-dolomiti"); ?>
				</h1>
				<h2>
					<? _e("pre__rules__subtitle", "gp-dolomiti"); ?>
				</h2>
			</hgroup>
			<dl>
				<dt>
					<? _e("pre__rules__a", "gp-dolomiti"); ?>
				</dt>
				<dd>
					<? _e("pre__rules__a__year", "gp-dolomiti"); ?>
				</dd>
				<dt>
					<? _e("pre__rules__b", "gp-dolomiti"); ?>
				</dt>
				<dd>
					<? _e("pre__rules__b__year", "gp-dolomiti"); ?>
				</dd>
				<dt>
					<? _e("pre__rules__c", "gp-dolomiti"); ?>
				</dt>
				<dd>
					<? _e("pre__rules__c__year", "gp-dolomiti"); ?>
				</dd>
				<dt>
					<? _e("pre__rules__d", "gp-dolomiti"); ?>
				</dt>
				<dd>
					<? _e("pre__rules__d__year", "gp-dolomiti"); ?>
				</dd>
				<dt>
					<? _e("pre__rules__e", "gp-dolomiti"); ?>
				</dt>
				<dd>
					<? _e("pre__rules__e__year", "gp-dolomiti"); ?>
				</dd>
			</dl>
		</div>
	</section>

	<section class="newsletter section--dark">
		<div class="container">
			<h1 class="section__title section__title--emphasized">
				<? _e("pre__newsletter__title", "gp-dolomiti"); ?>
			</h1>
			<h2>
				<? _e("pre__newsletter__subtitle", "gp-dolomiti"); ?>
			</h2>
			<?
				if(qtrans_getLanguage() == "en") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Subscribe to our newsletter!</a>'; }

				if(qtrans_getLanguage() == "fr") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Abonner à la newsletter!</a>'; }

				if(qtrans_getLanguage() == "de") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Zum Newsletter anmelden!</a>'; }

				if(qtrans_getLanguage() == "it") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Iscriversi alla newsletter!</a>'; }
			?>
		</div>
	</section>

	<section class="contact">
		<div class="container">
			<hgroup>
				<h1 class="section__title section__title--emphasized">
					<? _e("pre__contact__title", "gp-dolomiti"); ?>
				</h1>
				<h2>
					<? _e("pre__content__subtitle", "gp-dolomiti"); ?>
				</h2>
			</hgroup>
			<div class='contact-form'>
				<?
					// id="11" on http://granpremiodolomiti.com
					if(qtrans_getLanguage() == "en") { echo do_shortcode( '[contact-form-7 id="11" title="contact-EN"]' ); }

					if(qtrans_getLanguage() == "fr") { echo do_shortcode( '[contact-form-7 id="11" title="contact-EN"]' ); }

					if(qtrans_getLanguage() == "de") { echo do_shortcode( '[contact-form-7 id="11" title="contact-EN"]' ); }

					if(qtrans_getLanguage() == "it") { echo do_shortcode( '[contact-form-7 id="11" title="contact-EN"]' ); }
				?>
			</div>
		</div>
	</section>
	<?php wp_footer(); ?>
</body>

