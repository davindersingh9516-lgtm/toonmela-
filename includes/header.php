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
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/style.css?v=3.0">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
    .lang-bar{background:var(--heading-color,#1A1A2E);padding:5px 0}
    .lang-bar .container{display:flex;align-items:center;justify-content:flex-end;gap:8px}
    .lang-bar label{font-family:var(--font-ui);font-size:11px;color:#aaa;letter-spacing:0.5px}
    .lang-select{font-family:var(--font-ui);font-size:12px;padding:4px 8px;border:1px solid #444;border-radius:4px;background:#2a2a4a;color:#ddd;outline:none;cursor:pointer}
    .goog-te-banner-frame{display:none!important}
    body{top:0!important}
    .VIpgJd-ZVi9od-ORHb-OEVmcd,.skiptranslate:not(#google_translate_element){display:none!important}
    </style>
</head>
<body>

<div class="lang-bar">
    <div class="container">
        <label>&#127760; Language:</label>
        <select class="lang-select" id="langSelect" onchange="changeLanguage(this.value)">
            <option value="">Hinglish (Default)</option>
            <option value="hi">हिन्दी</option>
            <option value="en">English</option>
            <option value="bn">বাংলা</option>
            <option value="ta">தமிழ்</option>
            <option value="te">తెలుగు</option>
            <option value="mr">मराठी</option>
            <option value="gu">ગુજરાતી</option>
            <option value="kn">ಕನ್ನಡ</option>
            <option value="ml">മലയാളം</option>
            <option value="pa">ਪੰਜਾਬੀ</option>
            <option value="ur">اردو</option>
            <option value="or">ଓଡ଼ିଆ</option>
            <option value="as">অসমীয়া</option>
            <option value="sa">संस्कृतम्</option>
        </select>
        <div id="google_translate_element" style="display:none"></div>
    </div>
</div>
<script>
function googleTranslateElementInit(){
    new google.translate.TranslateElement({pageLanguage:'hi',includedLanguages:'hi,en,bn,ta,te,mr,gu,kn,ml,pa,ur,or,as,sa',autoDisplay:false},'google_translate_element');
}
function changeLanguage(lang){
    if(!lang){
        // Reset to original
        var frame=document.querySelector('.goog-te-banner-frame');
        if(frame){var btn=frame.contentDocument.querySelector('.goog-close-link');if(btn)btn.click();}
        document.cookie="googtrans=;path=/;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        document.cookie="googtrans=;path=/;domain=."+location.hostname+";expires=Thu, 01 Jan 1970 00:00:00 GMT";
        location.reload();
        return;
    }
    document.cookie="googtrans=/hi/"+lang+";path=/";
    document.cookie="googtrans=/hi/"+lang+";path=/;domain=."+location.hostname;
    location.reload();
}
// Set dropdown to current language on load
document.addEventListener('DOMContentLoaded',function(){
    var m=document.cookie.match(/googtrans=\/hi\/(\w+)/);
    if(m&&document.getElementById('langSelect')){document.getElementById('langSelect').value=m[1];}
});
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<header class="header">
    <div class="container header-inner">
        <a href="<?php echo SITE_URL; ?>" class="logo">Toon<span>Mela</span><small>Kahaniyon Ka Mela</small></a>
        <button class="mobile-toggle" aria-label="Menu" onclick="document.querySelector('.nav').classList.toggle('active')">
            <i data-lucide="menu" style="width:24px;height:24px;color:var(--text)"></i>
        </button>
        <nav class="nav">
            <a href="<?php echo SITE_URL; ?>"<?php if (($active_page ?? '') === 'home') echo ' class="active"'; ?>>Home</a>
            <a href="<?php echo SITE_URL; ?>stories.php"<?php if (($active_page ?? '') === 'stories') echo ' class="active"'; ?>>Stories</a>
            <?php foreach (get_age_groups() as $slug => $info) : ?>
                <a href="<?php echo SITE_URL . 'age/' . $slug . '.php'; ?>"><?php echo e($info['label']); ?></a>
            <?php endforeach; ?>
            <a href="<?php echo SITE_URL; ?>about.php"<?php if (($active_page ?? '') === 'about') echo ' class="active"'; ?>>About</a>
            <a href="<?php echo SITE_URL; ?>contact.php"<?php if (($active_page ?? '') === 'contact') echo ' class="active"'; ?>>Contact</a>
            <button class="nav-search" onclick="document.querySelector('.search-overlay').classList.add('active')" aria-label="Search"><i data-lucide="search" style="width:18px;height:18px"></i></button>
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
