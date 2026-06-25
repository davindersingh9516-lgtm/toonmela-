<?php
require_once __DIR__ . '/includes/functions.php';
$page_title = 'Page Not Found | ToonMela';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-404">
    <div class="container">
        <h1>404</h1>
        <h2>Yeh Kahani Nahi Mili</h2>
        <p>Lagta hai yeh page exist nahi karta. Homepage pe jaake nayi kahaniyaan padhein!</p>
        <a href="<?php echo SITE_URL; ?>" class="btn">Homepage Pe Jayein</a>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
