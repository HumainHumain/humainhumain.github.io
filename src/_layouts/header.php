<?php

$ogimage = $baseurl . str_replace(FS::pathJoin('/project', $root), '', FS::pathJoin(pathinfo($file, PATHINFO_DIRNAME), $ogimage));
$pageurl = $baseurl . $absurl;

if(!empty($breadcrumb) && boolval($breadcrumb)) {
    $accueil = FS::phpFileInfo(__DIR__ . '/' . $relroot . '_index.php');
    $shemabc = [
        '@context' => 'https://schema.org',
        '@type'    => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => $accueil->title,
                'item' => $baseurl . '/'
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => $title,
                'item' => $pageurl
            ],
        ],
    ];
}

if(!empty($schema)) {
    $schema = replaceSchemaPlaceholders($schema, [
        'PROJECT'     => $project,
        'TITLE'       => $project . ' | ' . $title . ' | ' . $descshort,
        'BASEURL'     => $baseurl . '/',
        'ABSURL'      => $baseurl . $absurl,
        'DESCRIPTION' => $description,
        'PERSON'      => $person,
        'JOBTITLE'    => $jobtitle,
        'EMAIL'       => $email,
        'FACEBOOK'    => $facebook,
        'AREA'        => $area,
        'KNOWSABOUT'  => $knowsabout,
    ]);
}

?><!DOCTYPE html>
<html lang="fr-CA" data-page="<? echo $id; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="<?php echo STR::htmlesc($description); ?>" />
        <meta name="keywords" content="<?php echo STR::htmlesc(join(', ', $keywords)); ?>" />
        <meta name="robots" content="index, follow" />
        <meta name="language" content="fr-CA" />
        <meta name="generator" content="Kirigami">
        <meta name="author" content="<?php echo STR::htmlesc($author); ?>">
        <meta name="designer" content="<?php echo STR::htmlesc($author); ?>">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php echo STR::htmlesc($project); ?> | <?php echo STR::htmlesc($title); ?> | <?php echo STR::htmlesc($descshort); ?>">
        <meta name="twitter:description" content="<?php echo STR::htmlesc($desclong); ?>">
        <meta name="twitter:image" content="<?php echo $ogimage; ?>">
        <meta property="og:site_name" content="<?php echo STR::htmlesc($project); ?>">
        <meta property="og:locale" content="fr_CA">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo STR::htmlesc($project); ?> | <?php echo STR::htmlesc($title); ?> | <?php echo STR::htmlesc($descshort); ?>">
        <meta property="og:description" content="<?php echo STR::htmlesc($desclong); ?>">
        <meta property="og:url" content="<?php echo $pageurl; ?>">
        <meta property="og:image" content="<?php echo $ogimage; ?>">
        <link rel="canonical" href="<?php echo $pageurl; ?>">
        <link rel="author" type="text/plain" href="<?php echo $relroot; ?>humans.txt">
        <link rel="icon" type="image/x-icon" href="<?php echo $relroot; ?>favicon.ico">
        <link rel="stylesheet" href="<?php echo $relroot; ?>styles/hh.core.min.css?###TIMESTAMP###">
        <title><?php echo STR::htmlesc($project); ?> | <?php echo STR::htmlesc($title); ?> | <?php echo STR::htmlesc($descshort); ?></title>
        <script src="<?php echo $relroot; ?>scripts/hh.core.min.js?###TIMESTAMP###"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $gtag; ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo $gtag; ?>');
        </script>
        <? if(!empty($shemabc)): ?>
        <script type="application/ld+json">
<?php echo json_encode($shemabc, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
        </script>
        <?php endif; ?>
        <? if(!empty($schema)): ?>
        <script type="application/ld+json">
<?php echo json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
        </script>
        <?php endif; ?>
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