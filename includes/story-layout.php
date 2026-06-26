<?php
require_once __DIR__ . '/functions.php';

$story_data = get_story_by_slug($slug);
$related = get_related_stories($slug, $age, 3);
$latest = array_slice(get_stories(), 0, 5);
$age_info = get_age_groups()[$age] ?? [];
$base_url = 'https://toonmela.com/';

$page_title = $title . ' | ' . ($category ?? 'Moral Story') . ' in Hindi | ToonMela';
$page_desc = $desc . ' Padhein yeh ' . $category . ' kahani ToonMela par. Moral story for ' . $ageLabel . '.';
$page_url = $base_url . 'stories/' . $slug . '.php';
$page_image = $base_url . ltrim($heroImage, '/');
$page_type = 'article';

$keywords = $keywords ?? '';
$faq = $faq ?? [];

// Enhanced Article Schema
$page_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $title,
    'alternativeHeadline' => $title . ' - Hindi Moral Story',
    'description' => $desc,
    'image' => [
        '@type' => 'ImageObject',
        'url' => $page_image,
        'width' => 1536,
        'height' => 1024,
    ],
    'datePublished' => $date,
    'dateModified' => $date,
    'author' => [
        '@type' => 'Organization',
        'name' => 'ToonMela',
        'url' => $base_url,
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'ToonMela',
        'url' => $base_url,
        'logo' => [
            '@type' => 'ImageObject',
            'url' => $base_url . 'img/logo.png',
        ],
    ],
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id' => $page_url,
    ],
    'articleSection' => $category,
    'inLanguage' => 'hi',
    'genre' => 'Moral Story',
    'audience' => [
        '@type' => 'Audience',
        'audienceType' => $ageLabel,
    ],
    'wordCount' => $readTime * 200,
    'timeRequired' => 'PT' . $readTime . 'M',
    'isAccessibleForFree' => true,
    'speakable' => [
        '@type' => 'SpeakableSpecification',
        'cssSelector' => ['.story-body p:first-of-type', '.moral-box p'],
    ],
];

// BreadcrumbList Schema
$breadcrumb_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $base_url],
        ['@type' => 'ListItem', 'position' => 2, 'name' => $ageLabel, 'item' => $base_url . 'age/' . $age . '.php'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $category, 'item' => $base_url . 'stories.php?cat=' . urlencode($category)],
        ['@type' => 'ListItem', 'position' => 4, 'name' => $title],
    ],
];

// FAQ Schema (for AEO - Answer Engine Optimization)
$faq_schema = null;
if (!empty($faq)) {
    $faq_items = [];
    foreach ($faq as $q => $a) {
        $faq_items[] = [
            '@type' => 'Question',
            'name' => $q,
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $a,
            ],
        ];
    }
    $faq_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $faq_items,
    ];
}

// Override page_schema to include all schemas
$all_schemas = [$page_schema, $breadcrumb_schema];
if ($faq_schema) $all_schemas[] = $faq_schema;

// Set page_schema to null so header doesn't output it - we'll output manually
$page_schema = null;

require_once __DIR__ . '/header.php';

// Output all schemas
foreach ($all_schemas as $schema) {
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
?>

<div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
        <a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span>
        <a href="<?php echo SITE_URL . 'age/' . $age . '.php'; ?>"><?php echo e($ageLabel); ?></a><span class="sep">/</span>
        <a href="<?php echo SITE_URL; ?>stories.php?cat=<?php echo urlencode($category); ?>"><?php echo e($category); ?></a><span class="sep">/</span>
        <span><?php echo e($title); ?></span>
    </nav>
</div>

<article class="single" itemscope itemtype="https://schema.org/Article">
    <div class="container">
        <div class="single-layout">
            <div class="single-content">
                <header class="single-header">
                    <h1 itemprop="headline"><?php echo e($title); ?></h1>
                    <div class="single-meta">
                        <span>
                            <time itemprop="datePublished" datetime="<?php echo $date; ?>"><?php echo format_date($date); ?></time>
                        </span>
                        <span><?php echo $readTime; ?> min read</span>
                        <span><a href="<?php echo SITE_URL . 'age/' . $age . '.php'; ?>" rel="tag"><?php echo e($ageLabel); ?></a></span>
                        <span><a href="<?php echo SITE_URL; ?>stories.php?cat=<?php echo urlencode($category); ?>" rel="tag"><?php echo e($category); ?></a></span>
                    </div>
                    <?php if ($keywords) : ?>
                        <meta itemprop="keywords" content="<?php echo e($keywords); ?>">
                    <?php endif; ?>
                </header>

                <div class="single-img">
                    <img itemprop="image" src="<?php echo SITE_URL . ltrim($heroImage, '/'); ?>" alt="<?php echo e($title); ?> - cartoon illustration" width="1536" height="1024" loading="eager">
                </div>

                <div class="story-body" itemprop="articleBody">
                    <?php echo $story_content; ?>
                </div>

                <?php if (!empty($faq)) : ?>
                <section class="faq-section" style="margin-top:40px;padding-top:30px;border-top:2px solid var(--border);">
                    <h2 style="font-family:var(--font-h);font-size:22px;color:var(--heading);margin-bottom:20px;">Aksar Poochhe Jaane Wale Sawaal (FAQ)</h2>
                    <?php foreach ($faq as $q => $a) : ?>
                        <details style="margin-bottom:14px;background:var(--bg-white);border:1px solid var(--border);border-radius:var(--r-lg);padding:16px 20px;">
                            <summary style="font-family:var(--font-ui);font-weight:600;font-size:15px;color:var(--heading);cursor:pointer;"><?php echo e($q); ?></summary>
                            <p style="margin-top:10px;font-size:15px;color:var(--text-light);line-height:1.7;"><?php echo e($a); ?></p>
                        </details>
                    <?php endforeach; ?>
                </section>
                <?php endif; ?>

                <div class="share">
                    <div class="share-title">Share This Story</div>
                    <div class="share-btns">
                        <a href="https://api.whatsapp.com/send?text=<?php echo urlencode($title . ' - ' . $page_url); ?>" target="_blank" rel="noopener" class="share-btn wa">WhatsApp</a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page_url); ?>" target="_blank" rel="noopener" class="share-btn fb">Facebook</a>
                        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($title . ' - Must Read!'); ?>&url=<?php echo urlencode($page_url); ?>" target="_blank" rel="noopener" class="share-btn tw">Twitter</a>
                        <button class="share-btn cp" onclick="navigator.clipboard.writeText('<?php echo $page_url; ?>');this.textContent='Copied!';">Copy Link</button>
                    </div>
                </div>

                <?php if (!empty($related)) : ?>
                <div class="related">
                    <h2>Aur Padhein</h2>
                    <div class="stories-grid">
                        <?php foreach ($related as $story) { include __DIR__ . '/card.php'; } ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <aside class="sidebar">
                <div class="widget">
                    <h3 class="widget-title">Latest Stories</h3>
                    <?php foreach ($latest as $s) : if ($s['slug'] === $slug) continue; ?>
                        <div class="sb-story">
                            <div class="sb-story-img"><a href="<?php echo story_url($s['slug']); ?>"><img src="<?php echo e($s['image']); ?>" alt="<?php echo e($s['title']); ?>" loading="lazy"></a></div>
                            <div>
                                <div class="sb-story-title"><a href="<?php echo story_url($s['slug']); ?>"><?php echo e($s['title']); ?></a></div>
                                <div class="sb-story-date"><?php echo format_date($s['date']); ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="widget">
                    <h3 class="widget-title">Age Groups</h3>
                    <ul class="age-list">
                        <?php foreach (get_age_groups() as $aslug => $ainfo) : ?>
                            <li><a href="<?php echo SITE_URL . 'age/' . $aslug . '.php'; ?>"><?php echo e($ainfo['label'] . ' (' . $ainfo['range'] . ')'); ?><span class="age-count"><?php echo get_age_count($aslug); ?></span></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</article>

<?php require_once __DIR__ . '/footer.php'; ?>
