<?php
require_once __DIR__ . '/includes/functions.php';

$q = trim($_GET['q'] ?? '');
$results = $q ? search_stories($q) : [];

$page_title = 'Search: "' . e($q) . '" | ToonMela';
$page_desc = count($results) . ' results found for "' . e($q) . '" on ToonMela';

require_once __DIR__ . '/includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs">
        <a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span>
        <span>Search</span>
    </nav>
</div>

<div class="archive-head">
    <div class="container">
        <h1>Search: "<?php echo e($q); ?>"</h1>
        <p><?php echo count($results); ?> results found</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="stories-grid">
            <?php if (!empty($results)) :
                foreach ($results as $story) {
                    include __DIR__ . '/includes/card.php';
                }
            else : ?>
                <div class="no-stories"><p>Koi result nahi mila "<?php echo e($q); ?>" ke liye. Kuch aur search karein.</p></div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
