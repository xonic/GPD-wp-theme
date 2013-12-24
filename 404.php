<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 * @since GP Dolomiti 1.0
 */

get_header(); ?>


	<section class="not-found">
		<div class="grid">
			<h1>Oh no, something went wrong. Sorry about that.</h1>
			<p>Let's <a href="<?php echo home_url(); ?>" title="Back to homepage">start over!</a></p>
		</div>
	</section>

<? get_footer(); ?>