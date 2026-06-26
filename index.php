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
    'url' => 'https://toonmela.com/',
    'description' => SITE_DESC,
    'inLanguage' => ['hi', 'en'],
    'potentialAction' => [
        '@type' => 'SearchAction',
        'target' => 'https://toonmela.com/search.php?q={search_term_string}',
        'query-input' => 'required name=search_term_string',
    ],
];

$org_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'ToonMela',
    'url' => 'https://toonmela.com/',
    'logo' => 'https://toonmela.com/favicon.svg',
    'description' => 'India\'s moral story platform for all ages. Engaging stories in Hindi & English.',
    'foundingDate' => '2024',
    'sameAs' => [
        'https://facebook.com/toonmela',
        'https://instagram.com/toonmelatv',
        'https://x.com/toonmelatv',
        'https://youtube.com/@toonmela',
    ],
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'email' => 'operations@toonmela.com',
        'contactType' => 'customer support',
    ],
];

require_once __DIR__ . '/includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($org_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
<?php
$featured = get_featured_story();
$all_stories = get_stories();
$age_groups = get_age_groups();
?>

<section class="hero">
    <div class="container">
        <div class="hero-badge"><i data-lucide="book-open" style="width:14px;height:14px;display:inline;vertical-align:-2px"></i> India's Moral Story Platform</div>
        <h1>Kahaniyon Ka Mela</h1>
        <p class="hero-sub">Stories that stay with you — long after you stop reading.</p>
        <div class="hero-langs">
            <span>Read in:</span>
            <span class="hero-lang">हिन्दी</span>
            <span class="hero-lang">English</span>
            <span class="hero-lang">বাংলা</span>
            <span class="hero-lang">தமிழ்</span>
            <span class="hero-lang">తెలుగు</span>
            <span class="hero-lang">मराठी</span>
            <span class="hero-lang-more">+6 more</span>
        </div>
        <div class="age-selector">
            <a href="<?php echo SITE_URL; ?>stories.php" class="age-btn active">
                <i data-lucide="layers" style="width:14px;height:14px;display:inline;vertical-align:-2px"></i> All Stories
            </a>
            <?php foreach ($age_groups as $slug => $info) : ?>
                <a href="<?php echo SITE_URL . 'age/' . $slug . '.php'; ?>" class="age-btn">
                    <?php echo e($info['label']); ?>
                    <span class="age-range"><?php echo e($info['range']); ?></span>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="hero-stats">
            <div class="hero-stat"><strong><?php echo count($all_stories); ?></strong><span>Stories</span></div>
            <div class="hero-stat"><strong>4</strong><span>Age Groups</span></div>
            <div class="hero-stat"><strong>12+</strong><span>Languages</span></div>
            <div class="hero-stat"><strong>Free</strong><span>Always</span></div>
        </div>
    </div>
</section>

<?php if ($featured) : ?>
<section class="featured">
    <div class="container">
        <div class="featured-card">
            <a href="<?php echo story_url($featured['slug']); ?>" class="featured-img">
                <img src="<?php echo e($featured['image']); ?>" alt="<?php echo e($featured['title']); ?>" width="600" height="400" fetchpriority="high">
            </a>
            <div class="featured-body">
                <span class="badge"><i data-lucide="bookmark" style="width:11px;height:11px;display:inline;vertical-align:-1px"></i> Featured Story</span>
                <h2><a href="<?php echo story_url($featured['slug']); ?>"><?php echo e($featured['title']); ?></a></h2>
                <p class="featured-excerpt"><?php echo e($featured['excerpt']); ?></p>
                <div class="meta">
                    <span><i data-lucide="calendar" style="width:14px;height:14px"></i> <?php echo format_date($featured['date']); ?></span>
                    <span><i data-lucide="clock" style="width:14px;height:14px"></i> <?php echo $featured['readTime']; ?> min read</span>
                    <span><i data-lucide="users" style="width:14px;height:14px"></i> <?php echo e($featured['ageLabel']); ?></span>
                </div>
                <a href="<?php echo story_url($featured['slug']); ?>" class="btn" style="margin-top:20px;width:fit-content;">Read Story <i data-lucide="arrow-right" style="width:16px;height:16px;display:inline;vertical-align:-3px"></i></a>
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
