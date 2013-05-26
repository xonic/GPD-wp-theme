<?php
/**
 * @package WordPress
 * @subpackage GP Dolomiti
 * @since GP Dolomiti 1.0
 */

//update_option('siteurl','http://localhost:8888/gp-dolomiti-new');
//update_option('home','http://localhost:8888/gp-dolomiti-new');

// Load languages
add_action("init", "theme_init");
function theme_init()
{
	load_theme_textdomain("gp-dolomiti" , get_template_directory() . "/languages");
}

// Remove the head tags that qTranslate inserts. They don't validate
add_action('init', 'remove_header_info');
function remove_header_info() {
	remove_action('wp_head', 'qtrans_header');
}

// Remove jQuery
//if ( !is_admin() ) wp_deregister_script('jquery');