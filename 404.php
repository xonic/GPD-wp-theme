<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 * @since GP Dolomiti 1.0
 */

//get_header(); ?>

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
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/404.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- TypeKit -->
<script type="text/javascript" src="//use.typekit.net/wkm4uha.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!--[if lte IE 8]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->

<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
<![endif]-->
<?php

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	//wp_head();
?>
</head>

<body <?php body_class(); ?>>

	<header class="branding">
		<div class="container">
			<h1 class="event-name">
				<small class="event-name__gp">Gran Premio</small>
				Dolomiti
			</h1>
		</div>
	</header>

	<section class="not-found">
		<div class="container">
			<h1>Oh no, something went wrong. Sorry about that.</h1>
			<p>Let's <a href="<?php echo home_url(); ?>" title="Back to homepage">start over!</a></p>
		</div>
	</section>

	<footer class="impressum section--dark">
		<div class="container">
			<p>&copy; Gran Premio Dolomiti 2014</p>
			<address class="vcard">
				<!-- WAT?! -->
				<span class="fn n">
					<span class="given-name"></span>
				</span>
			 	<div class="org">Rentor KG des Biasi Gerhard</div>
			 	<div class="adr">
			  		<span class="street-address">Piavestr. 27</span><br/>
			  		<span class="postal-code">39012</span>
			  		<span class="locality">Meran</span><br/>
			  		<span class="country-name">Italien</span>
			 	</div>
			</address>
		</div>
	</footer>
</body>
</html>