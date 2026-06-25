<?php
require_once __DIR__ . '/includes/functions.php';
$active_page = 'about';
$page_title = 'About ToonMela - Kahaniyon Ka Mela';
$page_desc = 'ToonMela ke baare mein jaanein. Hum moral stories likhte hain jo har umar ke readers ke liye hain.';
require_once __DIR__ . '/includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs">
        <a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span><span>About</span>
    </nav>
</div>

<div class="page">
    <div class="container">
        <div class="page-head">
            <h1>About ToonMela</h1>
            <p>Kahaniyon Ka Mela - Jahan har umar ke liye moral stories milti hain.</p>
        </div>

        <div class="about-grid">
            <div class="about-text">
                <h2>Hamari Kahani</h2>
                <p>ToonMela ek aisi jagah hai jahan kahaniyaan zinda hoti hain. Hum vishwaas karte hain ki ek acchi kahani insaan ki soch badal sakti hai, zindagi mein naya nazariya la sakti hai.</p>
                <p>Hamara mission hai ki har din 1-2 aisi moral stories publish karein jo padhne wale ka dhyan ek minute ke liye bhi idhar-udhar na hone de.</p>
                <p>Chahe aap 5 saal ke ho ya 50 ke - ToonMela mein har umar ke liye kahaniyaan hain.</p>
            </div>
            <div class="about-img">
                <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=600&q=80" alt="Books and Stories" loading="lazy">
            </div>
        </div>

        <div class="values-grid">
            <div class="value-card">
                <div class="icon">&#128214;</div>
                <h3>Engaging Stories</h3>
                <p>Aisi kahaniyaan jo padhte waqt aap band nahi kar paayenge. Har kahani ek safar hai.</p>
            </div>
            <div class="value-card">
                <div class="icon">&#127891;</div>
                <h3>Moral Values</h3>
                <p>Har kahani mein ek seekh chupi hai jo zindagi mein kaam aati hai.</p>
            </div>
            <div class="value-card">
                <div class="icon">&#128106;</div>
                <h3>All Ages</h3>
                <p>3 saal se lekar 80 saal tak - har umar ke liye alag-alag kahaniyaan.</p>
            </div>
        </div>

        <div class="about-grid" style="margin-top:50px;">
            <div class="about-img">
                <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?w=600&q=80" alt="Reading" loading="lazy">
            </div>
            <div class="about-text">
                <h2>Hamara Vaada</h2>
                <p><strong>Rozana nayi kahaniyaan:</strong> Har din 1-2 nayi moral stories publish hongi.</p>
                <p><strong>Quality content:</strong> Har kahani dhyan se likhi jaati hai taaki reader ek baar shuru kare toh puri padhe bina na ruke.</p>
                <p><strong>Free access:</strong> Sabhi kahaniyaan bilkul free hain. Koi paywall nahi.</p>
                <p><strong>Age-appropriate:</strong> Har kahani age group ke hisaab se categorized hai.</p>
            </div>
        </div>
    </div>
</div>

<section class="cta">
    <div class="container">
        <h2>Aaj Se Padhna Shuru Karein</h2>
        <p>Rozana nayi moral stories. Bookmark karein aur roz ek nayi kahani ka maza lein!</p>
        <a href="<?php echo SITE_URL; ?>" class="btn" style="background:var(--gold);">Kahaniyaan Padhein</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
