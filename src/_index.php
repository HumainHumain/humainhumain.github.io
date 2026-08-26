<?php
/**
 * @id            accueil
 * @title         Accueil
 * @ogimage       images/accueil/ogdefault.webp
 * 
 * @apropos       _data/accueil/a-propos.md
 * @ethnographie  _data/accueil/ethnographie.md
 * @citation      _data/accueil/citation.md
 * @approche      _data/accueil/approche.md
 * @citationBrown _data/accueil/citation-brown.md
 */
?>

<section class="splash-accueil"></section>
<section class="slideshow-accueil"></section>
<section class="qui-sommes-nous-accueil">
    <?php echo $apropos; ?>
</section>

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