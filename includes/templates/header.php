<?php 
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars(CURRENT_LANG) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== MÉTADONNÉES SEO PRINCIPALES ===== -->
    <title>
        <?= htmlspecialchars(t('site.title', 'Teferet-Acarad')) ?> -
        <?= htmlspecialchars(t('site.description', 'Art, culture et cosmétique africaine')) ?>
    </title>

    <meta name="description"
          content="<?= htmlspecialchars(t(
              'site.description',
              'Découvrez Teferet SARL pour la cosmétique africaine authentique et ACARAD pour la promotion culturelle artistique. Art, culture et beauté naturelle.'
          )) ?>">

    <meta name="keywords"
          content="cosmétique africaine, art africain, culture africaine, Teferet, ACARAD, beauté naturelle, traditions ancestrales, diaspora africaine">

    <meta name="author" content="Teferet-Acarad">
    <meta name="copyright" content="Teferet-Acarad">

    <!-- ===== OPEN GRAPH (Facebook, LinkedIn) ===== -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars(SITE_URL) ?>">
    <meta property="og:title" content="<?= htmlspecialchars(t('site.title', 'Teferet-Acarad')) ?>">
    <meta property="og:description" content="<?= htmlspecialchars(t(
        'site.description',
        'Art, culture et cosmétique africaine authentique'
    )) ?>">
    <meta property="og:image" content="<?= asset('images/logos/logo-seo.jpg') ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="<?= htmlspecialchars(CURRENT_LANG) ?>">
    <meta property="og:site_name" content="Teferet-Acarad">

    <!-- ===== TWITTER CARD ===== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@teferetacarad">
    <meta name="twitter:creator" content="@teferetacarad">
    <meta name="twitter:title" content="<?= htmlspecialchars(t('site.title', 'Teferet-Acarad')) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars(t(
        'site.description',
        'Art, culture et cosmétique africaine'
    )) ?>">
    <meta name="twitter:image" content="<?= asset('images/logos/logo-twitter.jpg') ?>">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#2c3e50">

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">


    <!-- ===== SCHEMA.ORG STRUCTURED DATA ===== -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Teferet-Acarad",
        "url": "<?= htmlspecialchars(SITE_URL) ?>",
        "logo": "<?= asset('images/logos/logo.png') ?>",
        "description": "<?= htmlspecialchars(t('site.description', 'Art, culture et cosmétique africaine')) ?>",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "FR"
        },
        "sameAs": [
            "https://www.facebook.com/teferetacarad",
            "https://www.instagram.com/teferetacarad"
        ]
    }
    </script>

    <!-- ===== FAVICON & ICONS ===== -->
    <link rel="icon" type="image/x-icon" href="<?= asset('images/favicon.ico') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('images/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('images/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('images/favicon-16x16.png') ?>">

    <!-- ===== CANONICAL & LANG ALTERNATES ===== -->
    <link rel="canonical" href="<?= htmlspecialchars(SITE_URL) ?>">

    <link rel="alternate" hreflang="fr" href="<?= htmlspecialchars(SITE_URL) ?>?lang=fr">
    <link rel="alternate" hreflang="en" href="<?= htmlspecialchars(SITE_URL) ?>?lang=en">
    <link rel="alternate" hreflang="ru" href="<?= htmlspecialchars(SITE_URL) ?>?lang=ru">
    <link rel="alternate" hreflang="x-default" href="<?= htmlspecialchars(SITE_URL) ?>">

    <!-- ===== FONTS & STYLES ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/tommy-hilfiger" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/champagne-limousines" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>

<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    <?php include __DIR__ . '/sidebar.php'; ?>
    <main>
