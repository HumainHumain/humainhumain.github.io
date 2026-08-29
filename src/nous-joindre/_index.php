<?php
/**
 * @id           nousjoindre
 * @title        Nous joindre
 * @breadcrumb   true
 * 
 * @schema       ../_data/nousjoindre/schema.json
 * @ogimage      ../images/nousjoindre/ogdefault.webp
 * @descshort    Contactez notre équipe
 * @desclong     Abonnez-vous à notre infolettre ou contactez l'équipe de Humain Humain pour discuter de votre prochain mandat en ethnographie sociale. 
 * 
 * @infolettre   ../_data/nousjoindre/infolettre.md
 * @contact      ../_data/nousjoindre/contact.md
 */
?>

<section class="splash-nousjoindre">Nous<br>joindre</section>

<section class="nousjoindre-slideshow"></section>

<section class="nousjoindre-form">
	
	<div class="infolettre"><?php echo $infolettre; ?></div>

	<iframe src="./infolettre/inscription" allowtransparency="true"></iframe>

	<div class="contact"><?php echo $contact; ?></div>

</section>


