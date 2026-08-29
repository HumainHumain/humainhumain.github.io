<?php
/**
 * @id             accueil
 * @title          Accueil
 * 
 * @schema         _data/accueil/schema.json
 * @ogimage        images/accueil/ogdefault.webp
 * @descshort      Ethnographie au service des organisations
 * @desclong       Par une approche de proximité, des méthodologies sensibles et une pensée systémique, Humain Humain aide les organisations publiques à comprendre en profondeur les usages actuels pour mieux orienter ceux de demain.
 * 
 * @apropos        _data/accueil/a-propos.md
 * @ethnographie   _data/accueil/ethnographie.md
 * @citation       _data/accueil/citation.md
 * @approche       _data/accueil/approche.md
 * @citationBrown  _data/accueil/citation-brown.md
 */
?>

<section class="splash-accueil"><h1>Humain Humain</h1></section>
<section class="slideshow-accueil"></section>
<section class="qui-sommes-nous-accueil">
    <?php echo $apropos; ?>
</section>

<section class="slideshow-accueil meralie"></section>

<section class="quote">
    <div>
        <?php echo $citation; ?>
    </div>
</section>

<section class="qu-est-ce-que-l-ethnographie-accueil">
    <?php echo $ethnographie; ?>
</section>

<section class="quote yellow">
    <div>
        <?php echo $citationBrown; ?>
    </div>
</section>

<section class="approche">
    <?php echo $approche; ?>
</section>


