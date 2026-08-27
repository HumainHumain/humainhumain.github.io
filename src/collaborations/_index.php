<?php
/**
 * @id             collaborations
 * @title          Collaborations
 * @ogimage        ../images/collaborations/ogdefault.webp
 * 
 * @collaborations ../_data/collaborations/collaborations.yaml
 */
?>

<section class="splash-collaborations">Collaborations</section>

<section class="collaborations-slideshow"></section>

<section class="collaborations-index">
	<?php foreach($collaborations as $collab): ?>
		<a noopener noreferrer target="_blank" href="<?php echo $collab->url; ?>" title="<?php echo $collab->name; ?>">
			<img src="../images/collaborations/<?php echo $collab->image; ?>" alt="<?php echo $collab->name; ?>" />
		</a>	
	<?php endforeach; ?>
</section>