<?php
/**
 * @id           accueil
 * @title        Accueil
 * @apropos      _data/accueil/a-propos.md
 * @ethnographie _data/accueil/ethnographie.md
 * @citation     _data/accueil/citation.md
 * @approche     _data/accueil/approche.md
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

<section class="approche">
    <?php echo $approche; ?>
</section>