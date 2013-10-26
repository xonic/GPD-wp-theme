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

		
		<footer class="impressum section--dark">
			<div class="grid">
				<section class="newsletter">
					<div class="container">
						<h1 class="section__title section__title--emphasized">
							<? _e("pre__newsletter__title", "gp-dolomiti"); ?>
						</h1>
						<h2>
							<? _e("pre__newsletter__subtitle", "gp-dolomiti"); ?>
						</h2>
						<?
							if(qtrans_getLanguage() == "en") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Subscribe to our newsletter</a>'; }

							if(qtrans_getLanguage() == "fr") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Abonner à la newsletter</a>'; }

							if(qtrans_getLanguage() == "de") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Zum Newsletter anmelden</a>'; }

							if(qtrans_getLanguage() == "it") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Iscriversi alla newsletter</a>'; }
						?>
					</div>
				</section>

				<section class="container">
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
				</section>
			</div>
		</footer>
	</div><!-- .content -->

<?php wp_footer(); ?>

</body>
</html>