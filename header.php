<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 * @since GP Dolomiti 1.0
 */
?><!DOCTYPE html>
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
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged;

			wp_title( '|', true, 'right' );

			// Add the blog name.
			bloginfo( 'name' );

			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";

			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

			?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/css/' . $pagename . '.css' ?>" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/font-awesome-ie7.min.css' ?>">
		<![endif]-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/font-awesome.min.css' ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<!-- TypeKit -->
		<script type="text/javascript" src="//use.typekit.net/wkm4uha.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiah6D-8-DEO6lAtyEXFvPkeohKQdhjKU&amp;sensor=false"></script>


		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->
		<?php

			/* Always have wp_head() just before the closing </head>
			 * tag of your theme, or you will break many plugins, which
			 * generally use this hook to add elements to <head> such
			 * as styles, scripts, and meta tags.
			 */
			wp_head();
		?>
		<?  $jsDir = get_template_directory_uri();
			$jsDir = $jsDir . "/js/";
		?>
		<!-- RequireJS -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/require.js"></script>

		<script type="text/javascript">

			requirejs.config(
			{
				baseUrl:'<? echo get_template_directory_uri(); ?>',
				paths:
				{
					'jquery'			: 'js/imports/jquery-1.9.1',
					'modernizr'			: 'js/imports/modernizr',
					'selectivizr'		: 'js/imports/selectivizr', 
					'maps'				: 'js/imports/MapController',
					'nav'				: 'js/imports/NavController',
					'timetable'			: 'js/timetable'
				},

				shim:
				{
					'modernizr': {
						exports: 'Modernizr'
					}
				}
			});

			// Load common code that includes config,
			// then load the app logic for this page.
			require(['<?php echo get_template_directory_uri(); ?>/js/common.js'], function (common)
			{
				// Load app logic for this page
				require(['<? echo $jsDir . $pagename . ".js" ?>']);
			});
		</script>
	</head>

	<body <?php body_class(); ?>>
			<div class="flyout">
				<a class="flyout__toggle js-flyout__toggle" href="javascript:void(0)"><i class="icon-reorder"></i><i class="icon-remove"></i></a>
				<img class="mountains" src="<?php echo get_template_directory_uri(); ?>/images/mountains--bw.svg" alt="Gran Premio Dolomiti Logo" width="70" height="44">
				<nav class="nav-main">
					<ul class="nav-main__entries">
						<li class="nav-main__entry"><a class="nav-main__link nav-main__link--is-active" href="<? echo $pagename ?>"><? echo qtrans_use($q_config['language'], $post->post_title, true);?></a></li>
						<li class="nav-main__entry"><a class="nav-main__link" href="#">Packages</a></li>
						<li class="nav-main__entry"><a class="nav-main__link" href="#">Anmeldung</a></li>
						<li class="nav-main__entry"><a class="nav-main__link" href="#">Kontakt</a></li>
					</ul>
				</nav>
				<div class="lang">
					<?php echo qtrans_generateLanguageSelectCode('text'); ?>
				</div>
			</div>
			<div class="content">
				<header class="branding" role="banner">
					<h1 class="event-name">
						<small class="event-name__gp">Gran Premio</small>
						Dolomiti
					</h1>
				</header>