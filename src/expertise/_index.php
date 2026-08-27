<?php
/**
 * @id           expertise
 * @title        Expertise
 * @ogimage      images/expertise/ogdefault.webp
 * 
 * @anticiper    ../_data/expertise/01-anticiper.md
 * @saisir       ../_data/expertise/02-saisir.md
 * @creer        ../_data/expertise/03-creer.md
 * @rester       ../_data/expertise/04-rester.md
 * @perspectives ../_data/expertise/05-perspectives.md
 * @inclusion    ../_data/expertise/06-inclusion.md
 */
?>

<section class="splash-expertise">Expertise</section>

<section class="expertise-slideshow"></section>

<section class="expertise-index" id="expertise">
	<div class="anticiper">
		<div></div>
		<div>Anticiper les défis et faire émerger les scénarios alternatifs</div>
	</div>
	<div class="saisir">
		<div></div>
		<div>Saisir les espoirs et les appréhensions autour d’un projet</div>
	</div>
	<div class="creer">
		<div></div>
		<div>Créer des ponts entre les silos</div>
	</div>
	<div class="rester">
		<div></div>
		<div>Rester à l’affût des nouveaux modes d’être ensemble</div>
	</div>
	<div class="perspectives">
		<div></div>
		<div>Perspectives critiques et vision macro</div>
	</div>
	<div class="inclusion">
		<div></div>
		<div>Inclusion des personnes difficiles d’accès</div>
	</div>
</section>

<section class="expertise-section" id="anticiper" data-hover="out">
	<?php echo $anticiper; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>

<section class="expertise-section-right" id="saisir" data-hover="out">
	<?php echo $saisir; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>

<section class="expertise-section" id="creer" data-hover="out">
	<?php echo $creer; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>

<section class="expertise-section-right" id="rester" data-hover="out">
	<?php echo $rester; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>

<section class="expertise-section" id="perspectives" data-hover="out">
	<?php echo $perspectives; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>

<section class="expertise-section-right" id="inclusion" data-hover="out">
	<?php echo $inclusion; ?>
	<div class="arrowup"><div title="Remonter"></div></div>
</section>
