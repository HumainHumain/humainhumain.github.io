<?php
/**
 * @id           publications
 * @title        Publications
 * @breadcrumb   true
 * 
 * @schema       ../_data/publications/schema.json
 * @ogimage      ../images/publications/ogdefault.webp
 * @descshort    Rapports et études publiées
 * @desclong     Consultez nos rapports de recherche ethnographique portant sur des enjeux sociaux, culturels et territoriaux au Québec.
 * 
 * @publications ../_data/publications/publications.yaml
 */
?>

<section class="splash-publications">Publications</section>

<section class="publications-slideshow"></section>

<?php foreach($publications as $idx => $pub): ?>
	<section class="publications-section<?php echo ($idx % 2 ? ' right' : ''); ?>">
		<div>
			<img class="publications-rapport" src="../images/publications/<?php echo $pub->thumb; ?>">
			<?php if($pub->file == '__SUR_DEMANDE__'): ?>
				<small>Disponible sur demande</small>
			<?php else: ?>
				<a target="_blank" href="./rapports/<?php echo $pub->file; ?>"><small>Télécharger le rapport</small></a>
			<?php endif; ?>
			
		</div>
		<div>
			<h4><?php echo $pub->name; ?></h4>
			<?php if(!empty($pub->medias)): ?>
				<hr>
				<h5>Médias&nbsp;<span class="newspaper"></span></h5>
				<ul>
					<?php foreach($pub->medias as $media): ?>
						<li><a noopener noreferrer target="_blank" href="<?php echo $media->url; ?>"><?php echo $media->name; ?></a><br>(<?php echo $media->date; ?>, <em><?php echo $media->news; ?></em>)</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</section>
<?php endforeach; ?>






