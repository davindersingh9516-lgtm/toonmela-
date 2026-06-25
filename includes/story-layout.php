<?php
require_once __DIR__ . '/functions.php';

$story_data = get_story_by_slug($slug);
$related = get_related_stories($slug, $age, 3);
$latest = array_slice(get_stories(), 0, 5);
$age_info = get_age_groups()[$age] ?? [];

$page_title = $title . ' | ' . ($category ?? 'Moral Story') . ' | ToonMela';
$page_desc = $desc;
$page_url = SITE_URL . 'stories/' . $slug . '.php';
$page_image = SITE_URL . ltrim($heroImage, '/');
$page_type = 'article';
$page_schema = [
    '@context' => 'https://schema.org', '@type' => 'Article',
    'headline' => $title, 'description' => $desc,
    'image' => $page_image,
    'datePublished' => $date, 'dateModified' => $date,
    'author' => ['@type' => 'Organization', 'name' => 'ToonMela'],
    'publisher' => ['@type' => 'Organization', 'name' => 'ToonMela'],
    'mainEntityOfPage' => $page_url,
];

require_once __DIR__ . '/header.php';
?>

<div class="container">
    <nav class="breadcrumbs">
        <a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span>
        <a href="<?php echo SITE_URL . 'age/' . $age . '.php'; ?>"><?php echo e($ageLabel); ?></a><span class="sep">/</span>
        <span><?php echo e($title); ?></span>
    </nav>
</div>

<article class="single">
    <div class="container">
        <div class="single-layout">
            <div class="single-content">
                <header class="single-header">
                    <h1><?php echo e($title); ?></h1>
                    <div class="single-meta">
                        <span><?php echo format_date($date); ?></span>
                        <span><?php echo $readTime; ?> min read</span>
                        <span><a href="<?php echo SITE_URL . 'age/' . $age . '.php'; ?>"><?php echo e($ageLabel); ?></a></span>
                        <span><a href="<?php echo SITE_URL; ?>stories.php?cat=<?php echo urlencode($category); ?>"><?php echo e($category); ?></a></span>
                    </div>
                </header>

                <div class="single-img">
                    <img src="<?php echo SITE_URL . ltrim($heroImage, '/'); ?>" alt="<?php echo e($title); ?> - cartoon illustration">
                </div>

                <div class="story-body">
                    <?php echo $story_content; ?>
                </div>

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
