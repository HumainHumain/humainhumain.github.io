<?php
$ogimage = $baseurl . str_replace(FS::pathJoin('/project', $root), '', FS::pathJoin(pathinfo($file, PATHINFO_DIRNAME), $ogimage));
$pageurl = $baseurl . str_replace(FS::pathJoin('/project', $root), '', pathinfo($file, PATHINFO_DIRNAME)) . '/';

?><!DOCTYPE html>
<html lang="fr-CA" data-page="<? echo $id; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="robots" content="index, follow" />
        <meta name="language" content="fr-CA" />
        <meta property="og:locale" content="fr_CA">
        <meta property="og:type" content="website">
        <!-- <meta property="og:title" content="MÉI | Mouvement Étudiant Indépendantiste"> -->
        <!-- <meta property="og:description" content="Le Mouvement Étudiant Indépendantiste (MÉI) est une organisation parapluie regroupant plus d’une vingtaine de comités souverainistes dans les cégeps et universités à travers tout le Québec. L’organisation mobilise et représente tous les étudiants en vue de construire un Québec pays."> -->
        <meta property="og:url" content="<?php echo $pageurl; ?>">
        <meta property="og:image" content="<?php echo $ogimage; ?>">
        <link rel="canonical" href="<?php echo $pageurl; ?>">
        <link rel="icon" type="image/x-icon" href="<?php echo $relroot; ?>favicon.ico">
        <link rel="stylesheet" href="<?php echo $relroot; ?>styles/hh.core.min.css?###TIMESTAMP###">
        <script src="<?php echo $relroot; ?>scripts/hh.core.min.js?###TIMESTAMP###"></script>
        <title>Humain Humain | <?php echo $title; ?></title>
</head>
<body>
	<header>
        <nav>
            <a data-page="accueil" href="/"><span class="nav-ii"></span>Accueil</a>
            <a data-page="expertise" href="/expertise/">Expertise</a>
            <a data-page="services" href="/services/">Services</a>
            <a data-page="publications" href="/publications/">Publications</a>
            <a data-page="collaborations" href="/collaborations/">Collaborations</a>
            <a data-page="nousjoindre" href="/nous-joindre/">Nous joindre</a>
        </nav>
        <div class="logo-humain"></div>
        <div class="burger"></div>
    </header>
    <main>