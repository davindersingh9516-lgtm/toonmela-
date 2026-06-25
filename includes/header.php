<?php if (!defined('SITE_NAME')) { require_once __DIR__ . '/functions.php'; } ?>
<!DOCTYPE html>
<html lang="hi-IN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($page_title ?? SITE_NAME . ' - ' . SITE_TAGLINE); ?></title>
    <meta name="description" content="<?php echo e($page_desc ?? SITE_DESC); ?>">
    <link rel="canonical" href="<?php echo e($page_url ?? SITE_URL); ?>">

    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
    <meta property="og:title" content="<?php echo e($page_title ?? SITE_NAME); ?>">
    <meta property="og:description" content="<?php echo e($page_desc ?? SITE_DESC); ?>">
    <meta property="og:type" content="<?php echo ($page_type ?? 'website'); ?>">
    <meta property="og:url" content="<?php echo e($page_url ?? SITE_URL); ?>">
    <?php if (!empty($page_image)) : ?>
    <meta property="og:image" content="<?php echo e($page_image); ?>">
    <?php endif; ?>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo e($page_title ?? SITE_NAME); ?>">
    <meta name="twitter:description" content="<?php echo e($page_desc ?? SITE_DESC); ?>">
    <?php if (!empty($page_image)) : ?>
    <meta name="twitter:image" content="<?php echo e($page_image); ?>">
    <?php endif; ?>

    <?php if (!empty($page_schema)) : ?>
    <script type="application/ld+json"><?php echo json_encode($page_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
    <?php endif; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Source+Sans+3:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/style.css?v=2.0">
</head>
<body>

<header class="header">
    <div class="container header-inner">
        <a href="<?php echo SITE_URL; ?>" class="logo">Toon<span>Mela</span><small>Kahaniyon Ka Mela</small></a>
        <button class="mobile-toggle" aria-label="Menu" onclick="document.querySelector('.nav').classList.toggle('active')">
            <span></span><span></span><span></span>
        </button>
        <nav class="nav">
            <a href="<?php echo SITE_URL; ?>"<?php if (($active_page ?? '') === 'home') echo ' class="active"'; ?>>Home</a>
            <a href="<?php echo SITE_URL; ?>stories.php"<?php if (($active_page ?? '') === 'stories') echo ' class="active"'; ?>>Stories</a>
            <?php foreach (get_age_groups() as $slug => $info) : ?>
                <a href="<?php echo SITE_URL . 'age/' . $slug . '.php'; ?>"><?php echo e($info['label']); ?></a>
            <?php endforeach; ?>
            <a href="<?php echo SITE_URL; ?>about.php"<?php if (($active_page ?? '') === 'about') echo ' class="active"'; ?>>About</a>
            <a href="<?php echo SITE_URL; ?>contact.php"<?php if (($active_page ?? '') === 'contact') echo ' class="active"'; ?>>Contact</a>
            <button class="nav-search" onclick="document.querySelector('.search-overlay').classList.add('active')" aria-label="Search">&#128269;</button>
        </nav>
    </div>
</header>

<div class="search-overlay" onclick="if(event.target===this)this.classList.remove('active')">
    <div class="search-box">
        <form action="<?php echo SITE_URL; ?>search.php" method="get">
            <input type="text" name="q" placeholder="Kahani dhundein..." required>
            <button type="submit">Search</button>
        </form>
    </div>
</div>
