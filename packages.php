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
			<? _e("<!--:en-->Packages<!--:--><!--:de-->Pakete<!--:--><!--:it-->Pacchetti<!--:--><!--:fr-->Forfaits<!--:-->"); ?>
			<? //_e("pre__rules__title", "gp-dolomiti"); ?>
		</h1>

		<section class="package">
			<h2 class="package__title"><? _e("<!--:en-->Premium package<!--:--><!--:de-->Premium Paket<!--:--><!--:it-->Pacchetto premium<!--:--><!--:fr-->Forfait premium<!--:-->"); ?> <span class="package__price">&euro; 4.850,00</span></h2>
			<div class="l-package__description">
				<p class="package__description">
					Mit dem Premium Paket können Sie sich gemütlich zurücklehnen und uns die Arbeit überlassen. Dieses Package gilt <strong>für 1 Fahrzeug und 2 Personen</strong>. Es beinhaltet die <strong>Teilnahme</strong> am Rennen, ein <strong>Tablet</strong> mit einem digitalen Roadbook, <strong>5 Übernachtungen</strong> in einem Spitzenhotel, <strong>komplette Verpflegung</strong> (mittags &amp; abends), <strong>tägliches Rahmenprogramm</strong>, offizielle und <strong>exklusive Bekleidung</strong>, sowie eine <strong>bewachte Parkanlage</strong> für Ihr Fahrzeug.
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
			<div class="l-package__action">
				<a class="package__action btn btn--newsletter btn--disabled" href="#"><? _e("<!--:en-->Order<!--:--><!--:de-->Bestellen<!--:--><!--:it-->Ordina<!--:--><!--:fr-->Commander<!--:-->"); ?></a> <span class="package__action__msg less-important">Bestellung derzeit noch nicht möglich. Gerne <a href="http://eepurl.com/xOMaz" title="Newsletter">benachrichtigen wir Sie</a>, wenn es soweit ist.</span>
			</div>
			<ul class="package__features">
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">Digitales Roadbook</h3>
						<div class="feature__img"><i class="fa fa-tablet fa-5x"></i></div>
						<p class="feature__description">
							Für das Rennen bekommen Sie von uns ein Tablet zur Verfügung gestellt. Darauf finden Sie ein digitales Roadbook, mit wertvollen Informationen rund um die Strecke.
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">Premium Hotel</h3>
						<div class="feature__img"><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i> <span class="feature__icon-text">S</span></div>
						<p class="feature__description">
							Wer den ganzen Tag unterwegs ist, braucht einen gesunden Schlaf. Daher übernachten Sie in einem der hochwertigsten und besten Hotels direkt im Zentrum von Meran.
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">Köstliche Verpflegung</h3>
						<div class="feature__img"><i class="fa fa-cutlery fa-4x"></i></div>
						<p class="feature__description">
							Wir legen großen Wert auf traditionelles, hoch qualitatives und genußvolles Essen. Sie bekommen während des gesamten Events die beste Verpflegung, mittags sowie auch abends.
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">Bewachtes Parken</h3>
						<div class="feature__img"><i class="fa fa-lock fa-5x"></i></div>
						<p class="feature__description">
							Wir bieten Ihnen einen rund um die Uhr bewachten Parkplatz, inklusive Shuttle-Service von und zum Hotel.
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">Offizielle Bekleidung</h3>
						<div class="feature__img"><i class="fa fa-user fa-5x"></i></div>
						<p class="feature__description">
							Lassen Sie sich von uns neu einkleiden: mit der offiziellen und exklusiven Gran Premio Dolomiti Kleidung.
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title">Konzert</h3>
						<div class="feature__img"><i class="fa fa-music fa-5x"></i></div>
						<p class="feature__description">
							Am letzten Abend runden wir das Event mit einem Gala-Dinner und anschließendem Konzert feinster Musik ab.
						</p>
					</div>
				</li>
			</ul>
		</section>

		<section class="package">
			<h2 class="package__title"><? _e("<!--:en-->Platinum package<!--:--><!--:de-->Platinum Paket<!--:--><!--:it-->Pacchetto platinum<!--:--><!--:fr-->Forfait platinum<!--:-->"); ?> <span class="package__price package__price--on-demand less-important"><? _e("<!--:en-->Price on request<!--:--><!--:de-->Preis auf Anfrage<!--:--><!--:it-->Prezzo su richiesta<!--:--><!--:fr-->Prix sur demande<!--:-->"); ?></span></h2>
			<div class="l-package__description">
				<p class="package__description">
					Das Platinum Paket ist für all jene, die nicht auf den besonderen Luxus verzichten möchten. Anstatt in einem der Hotels, logieren Sie in einem exklusiven und stilvollen <strong>Appartement</strong> der Extraklasse. Dieses Paket <strong>enthält alle Leistungen</strong> des Premium Pakets und <strong>gilt für 2 Personen</strong>.
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