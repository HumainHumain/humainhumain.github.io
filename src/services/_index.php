<?php
/**
 * @id           services
 * @title        Services
 * @ogimage      images/services/ogdefault.webp
 * 
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
	<div class="portraits">
		<div></div>
		<div>Portraits sociaux</div>
	</div>
	<div class="architecture">
		<div></div>
		<div>Architecture & urbanisme</div>
	</div>
	<div class="placemaking">
		<div></div>
		<div>Placemaking & évènementiel</div>
	</div>
	<div class="innovation">
		<div></div>
		<div>Innovation sociale</div>
	</div>
	<div class="numerique">
		<div></div>
		<div>Numérique</div>
	</div>
	<div class="technologies">
		<div></div>
		<div>Technologies de l’expérience</div>
	</div>
</section>

<section class="services-section" id="portraits" data-hover="out">
	<?php echo $portraits; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>

<section class="services-section-right" id="architecture" data-hover="out">
	<?php echo $architecture; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>

<section class="services-section" id="placemaking" data-hover="out">
	<?php echo $placemaking; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>

<section class="services-section-right" id="innovation" data-hover="out">
	<?php echo $innovation; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>

<section class="services-section" id="numerique" data-hover="out">
	<?php echo $numerique; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>

<section class="services-section-right" id="technologies" data-hover="out">
	<?php echo $technologies; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>
