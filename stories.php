<?php
require_once __DIR__ . '/includes/functions.php';

$active_page = 'stories';
$cat = $_GET['cat'] ?? '';
$age = $_GET['age'] ?? '';

if ($cat) {
    $stories = get_stories_by_category($cat);
    $heading = e($cat) . ' Stories';
    $desc = 'Best ' . e($cat) . ' moral stories on ToonMela';
} elseif ($age) {
    $stories = get_stories_by_age($age);
    $groups = get_age_groups();
    $heading = ($groups[$age]['label'] ?? 'Stories') . ' (' . ($groups[$age]['range'] ?? '') . ')';
    $desc = ($groups[$age]['desc'] ?? 'Moral stories') . ' - ToonMela';
} else {
    $stories = get_stories();
    $heading = 'Sabhi Kahaniyaan';
    $desc = 'All moral stories on ToonMela';
}

$page_title = $heading . ' | ToonMela';
$page_desc = $desc;
$page_url = SITE_URL . 'stories.php';

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
        <p><?php echo e($desc); ?></p>
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
