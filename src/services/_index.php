<?php
/**
 * @id           services
 * @title        Services
 * @portraits    _data/01-portraits.md
 * @architecture _data/02-architecture.md
 * @placemaking  _data/03-placemaking.md
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

<section class="services-section" id="portraits">
	<?php echo $portraits; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>

<section class="services-section-right" id="architecture">
	<?php echo $architecture; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>

<section class="services-section" id="placemaking">
	<?php echo $placemaking; ?>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>



<section class="services-section-right" id="innovation">
	<h3>Innovation sociale</h3>
	<p><strong>L’ethnographie contribue au succès de projets à portée sociale en optimisant leur potentiel d’appropriation à long terme.</strong></p>
	<p>Les études sur l’innovation et la créativité ont montré que les principaux obstacles à l’implantation réussie d’un projet d’innovation ne sont pas, le plus souvent, d’ordre technologique.</p>
	<p>Ils découlent de facteurs organisationnels, sociaux et culturels.</p>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>


<section class="services-section" id="numerique">
	<h3>Numérique</h3>
	<p><strong>Vous concevez une application ou un service en ligne et vous désirez connaître davantage les besoins et les comportements des vos potentiel.le.s usager.ère.s ?</strong></p>
	<p><strong>La collecte de données de nature sociale et expérientielle peut constituer un avantage concurrentiel à l’ère du digital.</strong></p>
	<p>Nos méthodes de collecte de données donnent aux équipes de concepteur.rice.s les moyens de s’approprier les savoirs tacites et l’expérience subjective de l’utilisateur.rice : les dimensions sensorielles, émotives mais aussi interactionnelles.</p>
	<p>Ces informations permettent de comprendre de façon précise les habitudes numériques et ainsi de concevoir des applications ou des services en ligne adaptés et cohérents.</p>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>



<section class="services-section-right" id="technologies">
	<h3>Technologies de l’expérience</h3>
	<p><strong>Catalysez les connaissances névralgiques (implicites et expérientielles) que vous avez déjà sans le savoir.</strong></p>
	<p><strong>Intégrez-les ensuite à plusieurs niveaux de profondeur (individuel, organisationnel et systémique).</strong></p>
	<p><strong>Optimisez votre compréhension sensible des enjeux, votre ressenti stratégique et l’impact que vous avez dans votre milieu.</strong></p>
	<p>Grâce notamment à l’éducation somatique (éducation à l’expérience sensible) et à des entretiens expérientiels spécialisés, nous offrons des ateliers et du coaching stratégique pour transformer vos pratiques et vos représentations à leur source.</p>
	<p>Nos méthodes et outils vous permettront d’optimiser vos modes de fonctionnement et ainsi de demeurer à l’avant-garde des sensibilités et des innovations de votre secteur d’activité.</p>
	<div class="arrowup"><div title="Remonter" onclick="document.location.href='#services'"></div></div>
</section>
