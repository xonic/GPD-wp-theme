<?php
/**
 * Template Name: About
 * Description: The page template for the timetable including routes and events.
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

get_header(); ?>
	

	
		<section class="program">
			<div class="grid">
				<section class="info">
					<? //echo qtrans_getLanguage(); ?>
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

					<p>
						<? _e("pre__info__p1", "gp-dolomiti"); ?>
					</p>
					<p>
						<? _e("pre__info__p2", "gp-dolomiti"); ?>
					</p>
				</section>
				<!-- <section class="day">
					<h1 class="day__date">
						<time datetime="2014-07-22">
							<? _e("pre__day1", "gp-dolomiti"); ?>
						</time>
					</h1>
					<ol class="space-lover">
						<li class="media">
							<div class="media__img program__icon"><i class="icon-group"></i></div>
							<div class="media__bd">
								<? _e("pre__arrival", "gp-dolomiti"); ?>
							</div>
						</li>
						<li class="media">
							<div class="media__img program__icon"><i class="icon-dashboard"></i></div>
							<div class="media__bd">
								<? _e("pre__inspection", "gp-dolomiti"); ?>
							</div>
						</li>
						<li class="media">
							<div class="media__img program__icon"><i class="icon-briefcase"></i></div>
							<div class="media__bd">
								<? _e("pre__check-in", "gp-dolomiti"); ?>
							</div>
						</li>
						<li class="media">
							<div class="media__img program__icon"><i class="icon-food"></i></div>
							<div class="media__bd">
								<? _e("pre__day1__dinner", "gp-dolomiti"); ?>
							</div>
						</li>
					</ol>
				</section> -->
			</div>
				
			<section class="section section--has-img">
				<div class="grid">
					<div class="section__bd section__bd--is-right">
						<h1 class="section__title">Discover</h1>
						<p class="section__text">High mountains, deep valleys and the most beautiful landscapes.</p>
					</div>
				</div>
			</section>
				
			<section class="section section--has-img section--feel">
				<div class="grid">
					<div class="section__bd">
						<h1 class="section__title">Feel</h1>
						<p class="section__text">High mountains, deep valleys and the most beautiful landscapes.</p>
					</div>
				</div>
			</section>
				
			<section class="section section--has-img section--conquer">
				<div class="grid">
					<div class="section__bd section__bd--is-right">
						<h1 class="section__title">Conquer</h1>
						<p class="section__text">High mountains, deep valleys and the most beautiful landscapes.</p>
					</div>
				</div>
			</section>
				
			<section class="section section--has-img section--taste">
				<div class="grid">
					<div class="section__bd section__bd--is-right">
						<h1 class="section__title">Taste</h1>
						<p class="section__text">High mountains, deep valleys and the most beautiful landscapes.</p>
					</div>
				</div>
			</section>
				
			<section class="section section--has-img section--experience">
				<div class="grid">
					<div class="section__bd">
						<h1 class="section__title">Experience</h1>
						<p class="section__text">High mountains, deep valleys and the most beautiful landscapes.</p>
					</div>
				</div>
			</section>

		</section>

<?php get_footer(); ?>