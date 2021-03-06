<?php
/**
 * Template Name: Packages
 * Description: The page template for the available packages and pricing.
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

	$contactUrl = get_site_url() . '/contact';

	if(function_exists('qtrans_convertURL'))
	{
		$contactUrl = qtrans_convertURL($contactUrl);
	}


get_header(); ?>

<section class="packages">
	<div class="grid">
		<h1 class="section__title section__title--emphasized">
			<? _e("<!--:en-->Packages<!--:--><!--:de-->Pakete<!--:--><!--:it-->Pacchetti partecipazione<!--:--><!--:fr-->Forfaits<!--:-->"); ?>
		</h1>

		<section class="package">
			<h2 class="package__title"><? _e("<!--:en-->Premium package<!--:--><!--:de-->Premium Paket<!--:--><!--:it-->Pacchetto premium<!--:--><!--:fr-->Forfait premium<!--:-->"); ?></h2>
			<div class="l-package__description">
				<p class="package__description">
					<? _e("package__premium__description", "gp-dolomiti"); ?>
				</p>
				<a href="<? echo get_site_url(); _e('<!--:en-->/contact/?lang=en<!--:--><!--:de-->/contact/?lang=de<!--:--><!--:it-->/contact/?lang=it<!--:--><!--:fr-->/contact/?lang=fr<!--:-->'); ?>" title="<? _e("<!--:en-->Contact us<!--:--><!--:de-->Kontaktieren Sie uns<!--:--><!--:it-->Contattaci<!--:--><!--:fr-->Contactez-nous<!--:-->"); ?>"><? _e("<!--:en-->Got questions?<!--:--><!--:de-->Noch Fragen?<!--:--><!--:it-->Avete delle domande?<!--:--><!--:fr-->Des questions?<!--:-->"); ?></a>
			</div>
			<div class="l-package__summary">
				<ul class="package__summary">
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Participation<!--:--><!--:de-->Teilnahme<!--:--><!--:it-->Partecipazione<!--:--><!--:fr-->Participation<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Accomodation<!--:--><!--:de-->Unterkunft<!--:--><!--:it-->Albergo<!--:--><!--:fr-->Hébergement<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Catering<!--:--><!--:de-->Verpflegung<!--:--><!--:it-->Sostenimento<!--:--><!--:fr-->Restauration<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Official clothing<!--:--><!--:de-->Offizielle Bekleidung<!--:--><!--:it-->Abbigliamento ufficiale<!--:--><!--:fr-->Vêtements officiels<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Safe parking<!--:--><!--:de-->Sicher parken<!--:--><!--:it-->Parcheggio sicuro<!--:--><!--:fr-->Parking sécurisé<!--:-->"); ?></div></li>
				</ul>
			</div>
			<div class="package__price">&euro; 4.850,00</div>
			<div class="l-package__action">
				<a class="package__action btn btn--newsletter btn--disabled" href="javascript:void(0)"><? _e("<!--:en-->Order<!--:--><!--:de-->Anmelden<!--:--><!--:it-->Iscrizione<!--:--><!--:fr-->Inscription<!--:-->"); ?></a> <span class="package__action__msg less-important"><? _e('<!--:en-->Tickets are not available yet. We\'d love to <a href="http://eepurl.com/xOMaz" title="Newsletter">notify you</a> as soon as we\'re ready.<!--:--><!--:de-->Anmeldung derzeit noch nicht möglich. Gerne <a href="http://eepurl.com/xOMaz" title="Newsletter">benachrichtigen wir Sie</a>, wenn es soweit ist.<!--:--><!--:it-->Le iscrizioni non sono attualmente possibili, <a href="http://eepurl.com/xOMaz" title="Newsletter">vi informeremo</a> entro breve.<!--:--><!--:fr-->Les inscriptions ne sont pas encore possibles. <a href="http://eepurl.com/xOMaz" title="Newsletter">Nous vous informerons</a> dès que possible de leur ouverture. <!--:-->'); ?></span>
			</div>
			<ul class="package__features">
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Digital Roadbook<!--:--><!--:de-->Digitales Roadbook<!--:--><!--:it-->Roadbook Digitale<!--:--><!--:fr-->Roadbook numérique<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-tablet fa-5x"></i></div>
						<p class="feature__description">
							<? _e("package__roadbook", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Premium Hotel<!--:--><!--:de-->Premium Hotel<!--:--><!--:it-->Premium Hotel<!--:--><!--:fr-->Premium Hôtel<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i> <span class="feature__icon-text">S</span></div>
						<p class="feature__description">
							<? _e("package__hotel", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Delicious Catering<!--:--><!--:de-->Köstliche Verpflegung<!--:--><!--:it-->Catering Delizioso<!--:--><!--:fr-->Restauration<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-cutlery fa-4x"></i></div>
						<p class="feature__description">
							<? _e("package__food", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Safe Parking<!--:--><!--:de-->Bewachtes Parken<!--:--><!--:it-->Parcheggio custodito<!--:--><!--:fr-->Parking Surveillé<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-lock fa-5x"></i></div>
						<p class="feature__description">
							<? _e("package__parking", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Official Clothing<!--:--><!--:de-->Offizielle Bekleidung<!--:--><!--:it-->Abbigliamento Ufficiale<!--:--><!--:fr-->Tenue Officielle<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-user fa-5x"></i></div>
						<p class="feature__description">
							<? _e("package__clothing", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Concert<!--:--><!--:de-->Konzert<!--:--><!--:it-->Concerto<!--:--><!--:fr-->Concert<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-music fa-5x"></i></div>
						<p class="feature__description">
							<? _e("package__concert", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
			</ul>
		</section>

		<section class="package">
			<h2 class="package__title"><? _e("<!--:en-->Platinum package<!--:--><!--:de-->Platinum Paket<!--:--><!--:it-->Pacchetto platinum<!--:--><!--:fr-->Forfait platinum<!--:-->"); ?></h2>
			<div class="l-package__description">
				<p class="package__description">
					<? _e("package__platinum__description", "gp-dolomiti"); ?>
				</p>
				<a href="<? echo get_site_url() . '/' . qtrans_getLanguage(); ?>/contact" title="Kontaktieren Sie uns"><? _e("<!--:en-->Got questions?<!--:--><!--:de-->Noch Fragen?<!--:--><!--:it-->Avete delle domande?<!--:--><!--:fr-->Des questions?<!--:-->"); ?></a>
			</div>
			<div class="l-package__summary">
				<ul class="package__summary">
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Participation<!--:--><!--:de-->Teilnahme<!--:--><!--:it-->Partecipazione<!--:--><!--:fr-->Participation<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Exclusive appartment<!--:--><!--:de-->Exklusives Appartement<!--:--><!--:it-->Appartamento esclusivo<!--:--><!--:fr-->Exclusive appartment<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Catering<!--:--><!--:de-->Verpflegung<!--:--><!--:it-->Sostenimento<!--:--><!--:fr-->Restauration<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Official clothing<!--:--><!--:de-->Offizielle Bekleidung<!--:--><!--:it-->Abbigliamento ufficiale<!--:--><!--:fr-->Vêtements officiels<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Safe parking<!--:--><!--:de-->Sicher parken<!--:--><!--:it-->Parcheggio sicuro<!--:--><!--:fr-->Parking sécurisé<!--:-->"); ?></div></li>
				</ul>
			</div>
			<div class="package__price package__price--on-demand less-important"><? _e("<!--:en-->Price on request<!--:--><!--:de-->Preis auf Anfrage<!--:--><!--:it-->Prezzo su richiesta<!--:--><!--:fr-->Prix sur demande<!--:-->"); ?></div>
			<div class="l-package__action">
				<a class="btn btn--newsletter" href="<? echo get_site_url(); _e('<!--:en-->/contact/?lang=en<!--:--><!--:de-->/contact/?lang=de<!--:--><!--:it-->/contact/?lang=it<!--:--><!--:fr-->/contact/?lang=fr<!--:-->'); ?>"><? _e("<!--:en-->Request<!--:--><!--:de-->Anfragen<!--:--><!--:it-->Richiesta<!--:--><!--:fr-->Demande<!--:-->"); ?></a>
			</div>
		</section>
		<?
		// <section class="package">
		// 	<h2 class="package__title">Budget Package <span class="package__price">&euro; 3.700,00</span></h2>
		// 	<p class="package__description">
		// 		Für all jene, die sich lieber selbst eine Unterkunft organisieren, bieten wir das Budget-Package an. Es <strong>enthält die selben Leistungen</strong> wie das Premium Package, <strong>ohne Hotel &amp; Nächtigung</strong>.
		// 	</p>
		// 	<div class="l-package__summary">
		// 		<ul class="package__summary">
		// 			<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd">Teilnahme</div></li>
		// 			<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd">Verpflegung</div></li>
		// 			<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd">Bekleidung</div></li>
		// 			<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd">Sicher parken</div></li>
		// 		</ul>
		// 	</div>
		// 	<div class="l-package__action">
		// 		<a class="btn btn--newsletter" href="#">Bestellen</a>
		// 	</div>
		// </section>
		?>
	</div>
</section>

<?php get_footer(); ?>