<?php
/**
 * @id           expertise
 * @title        Expertise
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
	<div class="anticiper" onclick="document.location.href='#anticiper'">
		<div></div>
		<div>Anticiper les défis et faire émerger les scénarios alternatifs</div>
	</div>
	<div class="saisir" onclick="document.location.href='#saisir'">
		<div></div>
		<div>Saisir les espoirs et les appréhensions autour d’un projet</div>
	</div>
	<div class="creer" onclick="document.location.href='#creer'">
		<div></div>
		<div>Créer des ponts entre les silos</div>
	</div>
	<div class="rester" onclick="document.location.href='#rester'">
		<div></div>
		<div>Rester à l’affût des nouveaux modes d’être ensemble</div>
	</div>
	<div class="perspectives" onclick="document.location.href='#perspectives'">
		<div></div>
		<div>Perspectives critiques et vision macro</div>
	</div>
	<div class="inclusion" onclick="document.location.href='#inclusion'">
		<div></div>
		<div>Inclusion des personnes difficiles d’accès</div>
	</div>
</section>

<section class="expertise-section" id="anticiper">
	<?php echo $anticiper; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#expertise'"></div></div>
</section>

<section class="expertise-section-right" id="saisir">
	<?php echo $saisir; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#expertise'"></div></div>
</section>

<section class="expertise-section" id="creer">
	<?php echo $creer; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#expertise'"></div></div>
</section>

<section class="expertise-section-right" id="rester">
	<?php echo $rester; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#expertise'"></div></div>
</section>

<section class="expertise-section" id="perspectives">
	<?php echo $perspectives; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#expertise'"></div></div>
</section>

<section class="expertise-section-right" id="inclusion">
	<?php echo $inclusion; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#expertise'"></div></div>
</section>
