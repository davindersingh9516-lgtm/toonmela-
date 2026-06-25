<?php
require_once __DIR__ . '/../includes/functions.php';
$age_slug = 'nanhe-readers';
$info = get_age_groups()[$age_slug];
$stories = get_stories_by_age($age_slug);
$page_title = $info['label'] . ' (' . $info['range'] . ') - Moral Stories | ToonMela';
$page_desc = $info['desc'] . '. ToonMela par ' . $info['label'] . ' ke liye best moral stories padhein.';
require_once __DIR__ . '/../includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs">
        <a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span><span><?php echo e($info['label']); ?></span>
    </nav>
</div>
<div class="archive-head">
    <div class="container">
        <h1><?php echo e($info['label'] . ' (' . $info['range'] . ')'); ?></h1>
        <p><?php echo e($info['desc']); ?></p>
    </div>
</div>
<div class="container">
    <div class="filter-bar">
        <a href="<?php echo SITE_URL; ?>stories.php" class="filter-btn">All</a>
        <?php foreach (get_age_groups() as $slug => $g) : ?>
            <a href="<?php echo SITE_URL . 'age/' . $slug . '.php'; ?>" class="filter-btn<?php if ($slug === $age_slug) echo ' active'; ?>"><?php echo e($g['label']); ?></a>
        <?php endforeach; ?>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="stories-grid">
            <?php if (!empty($stories)) :
                foreach ($stories as $story) { include __DIR__ . '/../includes/card.php'; }
            else : ?>
                <div class="no-stories"><p>Is age group mein abhi koi kahani nahi hai. Jaldi aayengi!</p></div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
