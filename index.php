<?php
require_once __DIR__ . '/includes/functions.php';

$active_page = 'home';
$page_title = SITE_NAME . ' - ' . SITE_TAGLINE . ' | Moral Stories for All Ages';
$page_desc = 'ToonMela - Kahaniyon Ka Mela. Best moral stories for all ages in Hindi. Panchtantra, Fairy Tales, Life Lessons, Bedtime Stories aur bahut kuch.';
$page_url = SITE_URL;
$page_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => SITE_NAME,
    'url' => SITE_URL,
    'description' => SITE_DESC,
    'potentialAction' => [
        '@type' => 'SearchAction',
        'target' => SITE_URL . 'search.php?q={search_term_string}',
        'query-input' => 'required name=search_term_string',
    ],
];

require_once __DIR__ . '/includes/header.php';

$featured = get_featured_story();
$all_stories = get_stories();
$age_groups = get_age_groups();
?>

<section class="hero">
    <div class="container">
        <h1>Kahaniyon Ka Mela</h1>
        <p>Har umar ke liye moral stories jo dimaag ko soochne par majboor karein aur dil ko choo jayein.</p>
        <div class="age-selector">
            <a href="<?php echo SITE_URL; ?>stories.php" class="age-btn active">Sabhi Kahaniyaan</a>
            <?php foreach ($age_groups as $slug => $info) : ?>
                <a href="<?php echo SITE_URL . 'age/' . $slug . '.php'; ?>" class="age-btn">
                    <?php echo e($info['label']); ?>
                    <span class="age-range"><?php echo e($info['range']); ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php if ($featured) : ?>
<section class="featured">
    <div class="container">
        <div class="featured-card">
            <a href="<?php echo story_url($featured['slug']); ?>" class="featured-img">
                <img src="<?php echo e($featured['image']); ?>" alt="<?php echo e($featured['title']); ?>">
            </a>
            <div class="featured-body">
                <span class="badge">Featured Story</span>
                <h2><a href="<?php echo story_url($featured['slug']); ?>"><?php echo e($featured['title']); ?></a></h2>
                <p class="featured-excerpt"><?php echo e($featured['excerpt']); ?></p>
                <div class="meta">
                    <span><?php echo format_date($featured['date']); ?></span>
                    <span><?php echo $featured['readTime']; ?> min read</span>
                    <span><?php echo e($featured['ageLabel']); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="section">
    <div class="container">
        <div class="section-head">
            <h2 class="section-title">Latest Stories</h2>
            <a href="<?php echo SITE_URL; ?>stories.php" class="section-link">View All &rarr;</a>
        </div>
        <div class="stories-grid">
            <?php
            $latest = array_slice($all_stories, 0, 6);
            foreach ($latest as $story) {
                include __DIR__ . '/includes/card.php';
            }
            if (empty($latest)) : ?>
                <div class="no-stories"><p>Jaldi nayi kahaniyaan aayengi!</p></div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php foreach ($age_groups as $slug => $info) :
    $age_stories = get_stories_by_age($slug, 3);
    if (empty($age_stories)) continue;
?>
<section class="section">
    <div class="container">
        <div class="section-head">
            <h2 class="section-title"><?php echo e($info['label'] . ' (' . $info['range'] . ')'); ?></h2>
            <a href="<?php echo SITE_URL . 'age/' . $slug . '.php'; ?>" class="section-link">View All &rarr;</a>
        </div>
        <div class="stories-grid">
            <?php foreach ($age_stories as $story) {
                include __DIR__ . '/includes/card.php';
            } ?>
        </div>
    </div>
</section>
<?php endforeach; ?>

<section class="cta">
    <div class="container">
        <h2>Rozana Nayi Kahaniyaan</h2>
        <p>Har din 1-2 nayi moral stories publish hoti hain. Bookmark karein aur roz padhein!</p>
        <a href="<?php echo SITE_URL; ?>stories.php" class="btn" style="background:var(--gold);">Sabhi Kahaniyaan Padhein</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
