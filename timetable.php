<?php
/**
 * Template Name: Timetable
 * Description: The page template for the timetable including routes and events.
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

get_header(); ?>

		<section class="program">
			<div class="grid">
				<h1 class="section__title section__title--emphasized">
					<? _e("pre__program__title", "gp-dolomiti"); ?>
				</h1>
				<section class="day">
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
				</section>
				<section class="day">
					<h1 class="day__date">
						<time datetime="2014-07-23">
							<? _e("pre__day2", "gp-dolomiti"); ?>
						</time>
					</h1>

					<h2 class="day__subheading">Tagesroute</h2>
					
					<section class="slider">
						<div class="slider__inner">
							<ul class="slides slides--contains-4">
								<li class="slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<a class="tile__content map-link map-link--route-1" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Jaufenpass,+St.+Leonhard+in+Passeier,+S%C3%BCdtirol,+Italien+to:Sterzing,+S%C3%BCdtirol,+Italien+to:Penser+Joch,+Sarntal,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien+to:Mendelpass,+Mendola,+Trient,+Italien+to:Fondo,+Trient,+Italien+to:Gampenpass,+Unsere+Liebe+Frau+im+Walde-St.+Felix,+S%C3%BCdtirol,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.65415,11.299438&amp;sspn=0.945449,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFbWeygIdu62sAClnVbN9b7KCRzEgTnEuiAkHHQ%3BFYCGywIdk3auACntTyuRQFOdRzH5_NYp3pHP7A%3BFZtdygIddXWuACn_HvJzkquCRzFQTnEuiAkHHQ%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTBExAIdNgKrACkZljiUJoWCRzFATnEuiAkHHQ%3BFcKQxAIdKfypACmxF1oGJ5CCRzFXqmBhJJ6ZoQ%3BFfz_xQIdHo-pACl5PXXqppaCRzH_Wz3I4d1znw%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10"></a>
										</div>
									</div>
								</li>
								<li class="slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<a class="tile__content map-link map-link--route-2" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Jaufenpass,+St.+Leonhard+in+Passeier,+S%C3%BCdtirol,+Italien+to:Sterzing,+S%C3%BCdtirol,+Italien+to:Penser+Joch,+Sarntal,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien+to:Mendelpass,+Mendola,+Trient,+Italien+to:Fondo,+Trient,+Italien+to:Gampenpass,+Unsere+Liebe+Frau+im+Walde-St.+Felix,+S%C3%BCdtirol,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.65415,11.299438&amp;sspn=0.945449,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFbWeygIdu62sAClnVbN9b7KCRzEgTnEuiAkHHQ%3BFYCGywIdk3auACntTyuRQFOdRzH5_NYp3pHP7A%3BFZtdygIddXWuACn_HvJzkquCRzFQTnEuiAkHHQ%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTBExAIdNgKrACkZljiUJoWCRzFATnEuiAkHHQ%3BFcKQxAIdKfypACmxF1oGJ5CCRzFXqmBhJJ6ZoQ%3BFfz_xQIdHo-pACl5PXXqppaCRzH_Wz3I4d1znw%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10"></a>
										</div>
									</div>
								</li>
								<li class="slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<a class="tile__content map-link map-link--route-3" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Jaufenpass,+St.+Leonhard+in+Passeier,+S%C3%BCdtirol,+Italien+to:Sterzing,+S%C3%BCdtirol,+Italien+to:Penser+Joch,+Sarntal,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien+to:Mendelpass,+Mendola,+Trient,+Italien+to:Fondo,+Trient,+Italien+to:Gampenpass,+Unsere+Liebe+Frau+im+Walde-St.+Felix,+S%C3%BCdtirol,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.65415,11.299438&amp;sspn=0.945449,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFbWeygIdu62sAClnVbN9b7KCRzEgTnEuiAkHHQ%3BFYCGywIdk3auACntTyuRQFOdRzH5_NYp3pHP7A%3BFZtdygIddXWuACn_HvJzkquCRzFQTnEuiAkHHQ%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTBExAIdNgKrACkZljiUJoWCRzFATnEuiAkHHQ%3BFcKQxAIdKfypACmxF1oGJ5CCRzFXqmBhJJ6ZoQ%3BFfz_xQIdHo-pACl5PXXqppaCRzH_Wz3I4d1znw%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10"></a>
										</div>
									</div>
								</li>
								<li class="slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<a class="tile__content map-link map-link--route-4" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Jaufenpass,+St.+Leonhard+in+Passeier,+S%C3%BCdtirol,+Italien+to:Sterzing,+S%C3%BCdtirol,+Italien+to:Penser+Joch,+Sarntal,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien+to:Mendelpass,+Mendola,+Trient,+Italien+to:Fondo,+Trient,+Italien+to:Gampenpass,+Unsere+Liebe+Frau+im+Walde-St.+Felix,+S%C3%BCdtirol,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.65415,11.299438&amp;sspn=0.945449,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFbWeygIdu62sAClnVbN9b7KCRzEgTnEuiAkHHQ%3BFYCGywIdk3auACntTyuRQFOdRzH5_NYp3pHP7A%3BFZtdygIddXWuACn_HvJzkquCRzFQTnEuiAkHHQ%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTBExAIdNgKrACkZljiUJoWCRzFATnEuiAkHHQ%3BFcKQxAIdKfypACmxF1oGJ5CCRzFXqmBhJJ6ZoQ%3BFfz_xQIdHo-pACl5PXXqppaCRzH_Wz3I4d1znw%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10"></a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</section>


					<!-- <a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Jaufenpass,+St.+Leonhard+in+Passeier,+S%C3%BCdtirol,+Italien+to:Sterzing,+S%C3%BCdtirol,+Italien+to:Penser+Joch,+Sarntal,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien+to:Mendelpass,+Mendola,+Trient,+Italien+to:Fondo,+Trient,+Italien+to:Gampenpass,+Unsere+Liebe+Frau+im+Walde-St.+Felix,+S%C3%BCdtirol,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.65415,11.299438&amp;sspn=0.945449,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFbWeygIdu62sAClnVbN9b7KCRzEgTnEuiAkHHQ%3BFYCGywIdk3auACntTyuRQFOdRzH5_NYp3pHP7A%3BFZtdygIddXWuACn_HvJzkquCRzFQTnEuiAkHHQ%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTBExAIdNgKrACkZljiUJoWCRzFATnEuiAkHHQ%3BFcKQxAIdKfypACmxF1oGJ5CCRzFXqmBhJJ6ZoQ%3BFfz_xQIdHo-pACl5PXXqppaCRzH_Wz3I4d1znw%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10">
						<div class="map-container space-lover">
							<div id="map-day-one" class="map-canvas"></div>
						</div>
					</a> -->

					<table class="day__route">
						<thead>
							<tr>
								<th class="route__icon"></th>
								<th class="route__location">
									<? _e("pre__location", "gp-dolomiti"); ?>
								</th>
								<th class="route__altitude">
									<? _e("pre__altitude", "gp-dolomiti"); ?>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="route__icon"><i class="icon-flag-alt"></i></td>
								<td class="route__location">
								<? _e("pre__meran", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__jaufen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__jaufen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__sterzing", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__sterzing__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__penser", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__penser__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__bozen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__mendel", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__mendel__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__fondo", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__fondo__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__gampen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__gampen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-flag-checkered"></i></td>
								<td class="route__location">
									<? _e("pre__meran", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="day__dinner">
						<h2 class="day__subheading">Abendevent</h2>
						<div class="day__dinner__img">
							<img src="<? echo get_template_directory_uri(); ?>/images/events/notte-italiana.jpg" alt="La notte italiana">
						</div>
						<div class="media__img program__icon"><i class="icon-food"></i></div>
						<div class="media__bd">
							<p>
								<? _e("pre__day2__dinner", "gp-dolomiti"); ?>
							</p>
						</div>
					</div>

				</section>

				<section class="day">
					<h1 class="day__date">
						<time datetime="2014-07-24">
							<? _e("pre__day3", "gp-dolomiti"); ?>
						</time>
					</h1>

					<h2 class="day__subheading">Tagesroute</h2>

					<a class="map-link map-link--route-2" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Bozen,+S%C3%BCdtirol,+Italien&amp;daddr=V%C3%B6ls+am+Schlern,+S%C3%BCdtirol,+Italien+to:Corvara,+S%C3%BCdtirol,+Italien+to:Passo+Campolongo,+Livinallongo+del+Col+di+Lana,+Provinz+Belluno,+Italien+to:Pordoijoch,+Livinallongo+del+Col+di+Lana,+Provinz+Belluno,+Italien+to:Sellajoch,+Canazei,+Trient,+Italien+to:Ortisei-St+Ulrich,+Italien+to:46.5713068,11.5813223+to:Bozen,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.537137,11.621475&amp;sspn=0.473277,1.056747&amp;geocode=FfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTKixQId5aWvACmNN9M8gHN4RzE2QTtdJm7-aw%3BFQ5WxgId4i-1ACmfprHjBj94RzEkeMnpGUOq3A%3BFbvJxQIdKxK1ACmZG28WmUB4RzFwTnEuiAkHHQ%3BFYVHxQId2060ACnROCyBNEB4RzGA64MuiAkHHQ%3BFaCIxQIdcEqzAClFDDg06Gp4RzGQ64MuiAkHHQ%3BFXunxgIdWyKyACm524Cn-RJ4RzE7oJYosjXYOg%3BFSqfxgIdirewAClpFHQ3GQ14RzF_8Yl01LNn5Q%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ&amp;oq=boz&amp;mra=pr&amp;via=7&amp;t=m&amp;z=11"></a>

					<!-- <a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Bozen,+S%C3%BCdtirol,+Italien&amp;daddr=V%C3%B6ls+am+Schlern,+S%C3%BCdtirol,+Italien+to:Corvara,+S%C3%BCdtirol,+Italien+to:Passo+Campolongo,+Livinallongo+del+Col+di+Lana,+Provinz+Belluno,+Italien+to:Pordoijoch,+Livinallongo+del+Col+di+Lana,+Provinz+Belluno,+Italien+to:Sellajoch,+Canazei,+Trient,+Italien+to:Ortisei-St+Ulrich,+Italien+to:46.5713068,11.5813223+to:Bozen,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.537137,11.621475&amp;sspn=0.473277,1.056747&amp;geocode=FfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTKixQId5aWvACmNN9M8gHN4RzE2QTtdJm7-aw%3BFQ5WxgId4i-1ACmfprHjBj94RzEkeMnpGUOq3A%3BFbvJxQIdKxK1ACmZG28WmUB4RzFwTnEuiAkHHQ%3BFYVHxQId2060ACnROCyBNEB4RzGA64MuiAkHHQ%3BFaCIxQIdcEqzAClFDDg06Gp4RzGQ64MuiAkHHQ%3BFXunxgIdWyKyACm524Cn-RJ4RzE7oJYosjXYOg%3BFSqfxgIdirewAClpFHQ3GQ14RzF_8Yl01LNn5Q%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ&amp;oq=boz&amp;mra=pr&amp;via=7&amp;t=m&amp;z=11">
						<div class="map-container space-lover">
							<div id="map-day-two" class="map-canvas"></div>
						</div>
					</a> -->

					<table class="day__route">
						<thead>
							<tr>
								<th class="route__icon"></th>
								<th class="route__location">
									<? _e("pre__location", "gp-dolomiti"); ?>
								</th>
								<th class="route__altitude">
									<? _e("pre__altitude", "gp-dolomiti"); ?>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="route__icon"><i class="icon-flag-alt"></i></td>
								<td class="route__location">
									<? _e("pre__bozen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__ortisei", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__ortisei__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__wolkenstein", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__wolkenstein__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__groedner", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__groedner__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__corvara", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__corvara__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__campolungo", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__campolungo__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__pordoi", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__pordoi__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__sella", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__sella__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__ortisei", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__ortisei__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-flag-checkered"></i></td>
								<td class="route__location">
									<? _e("pre__bozen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="day__dinner media">
						<h2 class="day__subheading">Abendevent</h2>
						<div class="media__img program__icon"><i class="icon-food"></i></div>
						<div class="media__bd">
							<p>
								<? _e("pre__day3__dinner", "gp-dolomiti"); ?>
							</p>
						</div>
					</div>
					
				</section>
				<section class="day">
					<h1 class="day__date">
						<time datetime="2014-07-25">
							<? _e("pre__day4", "gp-dolomiti"); ?>
						</time>
					</h1>

					<h2 class="day__subheading">Tagesroute</h2>

					<a class="map-link map-link--route-3" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Glurns,+S%C3%BCdtirol,+Italien+to:Stilfserjoch,+Stelvio,+S%C3%BCdtirol,+Italien+to:Passo+Tonale,+Passo+del+Tonale,+Trient,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;ll=46.444481,10.72403&amp;spn=0.949108,1.141205&amp;sll=46.444481,10.71579&amp;sspn=0.949108,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFb_kxwIdq9SgACl5L6ITDiKDRzEwMpEVhwkHBA%3BFREJxgIdnsSfACEbbJ7SxU1d1inPjoL65BqDRzEbbJ7SxU1d1g%3BFU_iwQId5o6hACFx-bdxAzejBCnnyF5jClSCRzFx-bdxAzejBA%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10"></a>

					<!-- <a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Glurns,+S%C3%BCdtirol,+Italien+to:Stilfserjoch,+Stelvio,+S%C3%BCdtirol,+Italien+to:Passo+Tonale,+Passo+del+Tonale,+Trient,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;ll=46.444481,10.72403&amp;spn=0.949108,1.141205&amp;sll=46.444481,10.71579&amp;sspn=0.949108,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFb_kxwIdq9SgACl5L6ITDiKDRzEwMpEVhwkHBA%3BFREJxgIdnsSfACEbbJ7SxU1d1inPjoL65BqDRzEbbJ7SxU1d1g%3BFU_iwQId5o6hACFx-bdxAzejBCnnyF5jClSCRzFx-bdxAzejBA%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10">
						<div class="map-container space-lover">
							<div id="map-day-three" class="map-canvas"></div>
						</div>
					</a> -->

					<table class="day__route">
						<thead>
							<tr>
								<th class="route__icon"></th>
								<th class="route__location">
									<? _e("pre__location", "gp-dolomiti"); ?>
								</th>
								<th class="route__altitude">
									<? _e("pre__altitude", "gp-dolomiti"); ?>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="route__icon"><i class="icon-flag-alt"></i></td>
								<td class="route__location">
									<? _e("pre__meran", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__glurns", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__glurns__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__stilfs", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__stilfs__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-flag-checkered"></i></td>
								<td class="route__location">
									<? _e("pre__meran", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="day__dinner media">
						<h2 class="day__subheading">Abendevent</h2>
						<div class="media__img program__icon"><i class="icon-food"></i></div>
						<div class="media__bd">
							<p>
								<? _e("pre__day4__dinner", "gp-dolomiti"); ?>
							</p>
						</div>
					</div>
					
				</section>
				<section class="day">
					<h1 class="day__date">
						<time datetime="2014-07-26">
							<? _e("pre__day5", "gp-dolomiti"); ?>
						</time>
					</h1>

					<h2 class="day__subheading">Tagesroute</h2>

					<a class="map-link map-link--route-4" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Lana,+S%C3%BCdtirol,+Italien+to:Andrian,+S%C3%BCdtirol,+Italien+to:St.+Pauls,+S%C3%BCdtirol,+Italien+to:Eppan,+S%C3%BCdtirol,+Italien+to:Kaltern,+S%C3%BCdtirol,+Italien+to:Neumarkt,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.571425,11.20423&amp;sspn=0.236725,0.285301&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFYc8xwIdSlWqACmvbK1awr2CRzGMWIT3SGkYqQ%3BFavSxQIdl2mrACm96caqk5mCRzEh49uDGewsJQ%3BFWkZxQIdPtCrACkxGLhymJuCRzFtp_GuK0RRGA%3BFTolxQIdH6GrACkBkS3jCJuCRzEwMJEVhwkHBA%3BFW73wwIdZoqrACnj_C3kfoSCRzHgMJEVhwkHBA%3BFZxuwgIddhGsACkPypVuWYCCRzHAMZEVhwkHBA%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ&amp;oq=bozen&amp;mra=ls&amp;t=m&amp;z=11"></a>

					<!-- <a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Lana,+S%C3%BCdtirol,+Italien+to:Andrian,+S%C3%BCdtirol,+Italien+to:St.+Pauls,+S%C3%BCdtirol,+Italien+to:Eppan,+S%C3%BCdtirol,+Italien+to:Kaltern,+S%C3%BCdtirol,+Italien+to:Neumarkt,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.571425,11.20423&amp;sspn=0.236725,0.285301&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFYc8xwIdSlWqACmvbK1awr2CRzGMWIT3SGkYqQ%3BFavSxQIdl2mrACm96caqk5mCRzEh49uDGewsJQ%3BFWkZxQIdPtCrACkxGLhymJuCRzFtp_GuK0RRGA%3BFTolxQIdH6GrACkBkS3jCJuCRzEwMJEVhwkHBA%3BFW73wwIdZoqrACnj_C3kfoSCRzHgMJEVhwkHBA%3BFZxuwgIddhGsACkPypVuWYCCRzHAMZEVhwkHBA%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ&amp;oq=bozen&amp;mra=ls&amp;t=m&amp;z=11">
						<div class="map-container space-lover">
							<div id="map-day-four" class="map-canvas"></div>
						</div>
					</a> -->

					<table class="day__route">
						<thead>
							<tr>
								<th class="route__icon"></th>
								<th class="route__location">
									<? _e("pre__location", "gp-dolomiti"); ?>
								</th>
								<th class="route__altitude">
									<? _e("pre__altitude", "gp-dolomiti"); ?>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="route__icon"><i class="icon-flag-alt"></i></td>
								<td class="route__location">
									<? _e("pre__meran", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__lana", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__lana__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__andrian", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__andrian__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__pauls", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__pauls__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__eppan", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__eppan__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__kaltern", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__kaltern__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__neumarkt", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__neumarkt__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="icon-flag-checkered"></i></td>
								<td class="route__location">
									<? _e("pre__bozen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="day__dinner media">
						<h2 class="day__subheading">Abendevent</h2>
						<div class="media__img program__icon"><i class="icon-food"></i></div>
						<div class="media__bd">
							<p>
								<? _e("pre__day5__dinner", "gp-dolomiti"); ?>
							</p>
						</div>
					</div>

				</section>
				<section class="day">
					<h1 class="day__date">
						<time datetime="2014-07-27">
							<? _e("pre__day6", "gp-dolomiti"); ?>
						</time>
					</h1>
					<div class="day__special media">
						<div class="media__img"><i class="icon-trophy"></i></div>
						<div class="media__bd">
							<p>
								<? _e("pre__day6__ceremony", "gp-dolomiti"); ?>
							</p>
						</div>
					</div>
				</section>
			</div>
		</section>

<?php get_footer(); ?>