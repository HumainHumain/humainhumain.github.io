<?php
/**
 * @id           services
 * @title        Services
 * @portraits    ../_data/services/01-portraits.md
 * @architecture ../_data/services/02-architecture.md
 * @placemaking  ../_data/services/03-placemaking.md
 * @innovation   ../_data/services/04-innovation.md
 * @numerique    ../_data/services/05-numerique.md
 * @technologies ../_data/services/06-technologies.md
 */
?>

<section class="splash-services">Services</section>

<section class="services-slideshow"></section>

<section class="services-index" id="services">
	<div class="portraits" onclick="document.location.href='#portraits'">
		<div></div>
		<div>Portraits sociaux</div>
	</div>
	<div class="architecture" onclick="document.location.href='#architecture'">
		<div></div>
		<div>Architecture & urbanisme</div>
	</div>
	<div class="placemaking" onclick="document.location.href='#placemaking'">
		<div></div>
		<div>Placemaking & évènementiel</div>
	</div>
	<div class="innovation" onclick="document.location.href='#innovation'">
		<div></div>
		<div>Innovation sociale</div>
	</div>
	<div class="numerique" onclick="document.location.href='#numerique'">
		<div></div>
		<div>Numérique</div>
	</div>
	<div class="technologies" onclick="document.location.href='#technologies'">
		<div></div>
		<div>Technologies de l’expérience</div>
	</div>
</section>

<section class="services-section" id="portraits" data-hover="out">
	<?php echo $portraits; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>

<section class="services-section-right" id="architecture" data-hover="out">
	<?php echo $architecture; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>

<section class="services-section" id="placemaking" data-hover="out">
	<?php echo $placemaking; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>

<section class="services-section-right" id="innovation" data-hover="out">
	<?php echo $innovation; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>

<section class="services-section" id="numerique" data-hover="out">
	<?php echo $numerique; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>

<section class="services-section-right" id="technologies" data-hover="out">
	<?php echo $technologies; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>
