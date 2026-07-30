<?php
require_once __DIR__ . '/includes/functions.php';

$active_page = 'stories';
$cat = $_GET['cat'] ?? '';
$age = $_GET['age'] ?? '';

$age_groups_data = get_age_groups();
if ($cat) {
    $stories = get_stories_by_category($cat);
    $heading = $cat . ' Stories';
    $page_title = $cat . ' Ki Kahaniyaan Hindi Mein | ToonMela';
    $page_desc = 'ToonMela ki best ' . $cat . ' moral stories Hindi mein. ' . count($stories) . ' kahaniyan - sabke liye free. Padhein aur seekhein.';
    $keywords = strtolower($cat) . ' stories hindi, ' . strtolower($cat) . ' ki kahani, moral story hindi, hindi kahani with moral, best hindi stories';
    $page_url = 'https://toonmela.com/stories.php?cat=' . urlencode($cat);
} elseif ($age) {
    $stories = get_stories_by_age($age);
    $heading = ($age_groups_data[$age]['label'] ?? 'Stories') . ' (' . ($age_groups_data[$age]['range'] ?? '') . ')';
    $page_title = ($age_groups_data[$age]['label'] ?? 'Stories') . ' (' . ($age_groups_data[$age]['range'] ?? '') . ') Stories | ToonMela';
    $page_desc = 'ToonMela par ' . ($age_groups_data[$age]['label'] ?? '') . ' ke liye ' . count($stories) . ' best Hindi moral stories. ' . ($age_groups_data[$age]['desc'] ?? '') . '. Free, 12+ Indian languages mein padhein.';
    $keywords = strtolower($age_groups_data[$age]['label'] ?? '') . ' hindi stories, moral story for ' . ($age_groups_data[$age]['range'] ?? '') . ', hindi kahani ' . ($age_groups_data[$age]['range'] ?? '') . ', best hindi moral stories, panchtantra ki kahani';
    // Canonicalize to the dedicated /age/{slug}.php page - it covers the exact same
    // story list and is the one listed in the sitemap, so this avoids splitting
    // ranking signal across two near-identical URLs for the same content.
    $page_url = isset($age_groups_data[$age]) ? 'https://toonmela.com/age/' . $age . '.php' : 'https://toonmela.com/stories.php?age=' . $age;
} else {
    $stories = get_stories();
    $heading = 'Sabhi Kahaniyaan';
    $page_title = 'Sabhi Hindi Moral Stories - Best Collection | ToonMela';
    $page_desc = 'ToonMela par best Hindi moral stories sabke liye - bachon se adults tak. Panchtantra, Akbar Birbal, Fairy Tales, Life Lessons. Free, 12+ languages.';
    $keywords = 'hindi moral stories, hindi kahani, moral story in hindi, panchtantra ki kahani, akbar birbal ki kahani, bacchon ki kahani hindi, best hindi stories, kahani with moral, hindi fairy tales';
    $page_url = 'https://toonmela.com/stories.php';
}

$page_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    'name' => $heading . ' | ToonMela',
    'description' => $page_desc,
    'url' => $page_url,
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'ToonMela',
        'url' => 'https://toonmela.com/',
        'logo' => ['@type' => 'ImageObject', 'url' => 'https://toonmela.com/favicon.png'],
    ],
    'breadcrumb' => [
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://toonmela.com/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => $heading],
        ],
    ],
];

require_once __DIR__ . '/includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs">
        <a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span>
        <span><?php echo $heading; ?></span>
    </nav>
</div>

<div class="archive-head">
    <div class="container">
        <h1><?php echo $heading; ?></h1>
        <p><?php echo e($page_desc); ?></p>
    </div>
</div>

<div class="container">
    <div class="filter-bar">
        <a href="<?php echo SITE_URL; ?>stories.php" class="filter-btn<?php if (!$cat && !$age) echo ' active'; ?>">All</a>
        <?php foreach (get_age_groups() as $slug => $info) : ?>
            <a href="<?php echo SITE_URL; ?>stories.php?age=<?php echo $slug; ?>" class="filter-btn<?php if ($age === $slug) echo ' active'; ?>"><?php echo e($info['label']); ?></a>
        <?php endforeach; ?>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="stories-grid">
            <?php if (!empty($stories)) :
                foreach ($stories as $story) {
                    include __DIR__ . '/includes/card.php';
                }
            else : ?>
                <div class="no-stories"><p>Is category mein abhi koi kahani nahi hai. Jaldi nayi stories aayengi!</p></div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
