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
			<p><? _e("Branding", "gp-dolomiti"); ?></p>
		</section>

		<section class="info">
			<p><? _e("Beschreibung", "gp-dolomiti"); ?></p>
		</section>

		<section class="program">
			<p><? _e("Programm", "gp-dolomiti"); ?></p>
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

