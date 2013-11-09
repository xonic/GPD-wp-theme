<?php
/**
 * Template Name: Packages
 * Description: The page template for the available packages and pricing.
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

get_header(); ?>

<section class="packages">
	<div class="grid">
		<h1 class="section__title section__title--emphasized">
			Packages
			<? //_e("pre__rules__title", "gp-dolomiti"); ?>
		</h1>

		<section class="package">
			<h2 class="package__title">Premium Package <span class="package__price">&euro; 4.850,00</span></h2>
			<p class="package__description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<ul class="package__features">
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">Digital Roadbook</h3>
						<div class="feature__img"><i class="fa-tablet"></i></div>
						<p class="feature__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">Premium Hotel</h3>
						<div class="feature__img"><i class="fa-tablet"></i></div>
						<p class="feature__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">High Class Food</h3>
						<div class="feature__img"><i class="fa-tablet"></i></div>
						<p class="feature__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">Safe Parking</h3>
						<div class="feature__img"><i class="fa-tablet"></i></div>
						<p class="feature__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">Branded Clothing</h3>
						<div class="feature__img"><i class="fa-tablet"></i></div>
						<p class="feature__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">Concert</h3>
						<div class="feature__img"><i class="fa-tablet"></i></div>
						<p class="feature__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</li>
			</ul>
		</section>

		<section class="package">
			<h2 class="package__title">Platinum Package</h2>
			
		</section>

		<section class="package">
			<h2 class="package__title">Budget Package</h2>
			
		</section>
	</div>
</section>

<?php get_footer(); ?>