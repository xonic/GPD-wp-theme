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
	// Get the current page name for use in JS/CSS paths
	$currentTemplate = basename(get_page_template());
	$pos = strpos($currentTemplate, ".php");
	$currentPage = substr($currentTemplate, 0, $pos);

?><!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" class="no-mq" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="no-mq" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<?php //echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
<?php //echo '<!-- ' . $currentPage . ' -->'; ?>
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
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/css/' . $currentPage . '.css' ?>" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/font-awesome-ie7.min.css' ?>">
		<![endif]-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/font-awesome.min.css' ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<!-- TypeKit -->
		<script type="text/javascript" src="//use.typekit.net/wkm4uha.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiah6D-8-DEO6lAtyEXFvPkeohKQdhjKU&amp;sensor=false"></script> -->


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
	</head>

	<body <?php body_class(); ?>>
			<div class="flyout">
				<div class="grid cf">
					<a class="flyout__toggle js-flyout__toggle" href="javascript:void(0)"><i class="icon-reorder"></i><i class="icon-remove"></i></a>
					<!--[if lte IE 8]>
					<img class="mountains" src="<?php echo get_template_directory_uri(); ?>/images/mountains--bw.png" alt="Gran Premio Dolomiti Logo">
					<![endif]-->
					<img class="mountains" src="<?php echo get_template_directory_uri(); ?>/images/mountains--bw.svg" alt="Gran Premio Dolomiti Logo" width="70" height="44">
					<nav class="nav-main">
						<? wp_nav_menu( array( 'theme_location' => 'nav-main' ) ); ?>
					</nav>
					<div class="lang">
						<?php echo qtrans_generateLanguageSelectCode('text'); ?>
					</div>
				</div>
			</div>
			<div class="content">
				<header class="branding" role="banner">
					<h1 class="event-name">
						<small class="event-name__gp">Gran Premio</small>
						Dolomiti
					</h1>
				</header>

				<section class="section info">
					<? //echo qtrans_getLanguage(); ?>
					<div class="grid">
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
<!-- 
						<p>
							<? _e("pre__info__p1", "gp-dolomiti"); ?>
						</p>
						<p>
							<? _e("pre__info__p2", "gp-dolomiti"); ?>
						</p> -->
					</div>
				</section>