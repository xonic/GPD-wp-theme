<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 * @since GP Dolomiti 1.0
 */
?>

		<footer id="colophon" role="contentinfo">

				<?php
					/* A sidebar in the footer? Yep. You can can customize
					 * your footer with three columns of widgets.
					 */
					if ( ! is_404() )
						get_sidebar( 'footer' );
				?>

		</footer>
	</div><!-- .content -->
</div><!-- .grid -->

<?php wp_footer(); ?>

</body>
</html>