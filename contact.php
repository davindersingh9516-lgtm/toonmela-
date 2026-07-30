<?php
require_once __DIR__ . '/includes/functions.php';
$active_page = 'contact';
$page_title = 'Contact ToonMela - Feedback & Suggestions';
$page_desc = 'ToonMela se contact karein - sawaal, suggestion ya feedback bhejein. Story submissions aur collaboration ke liye bhi humse yahan sampark karein.';
$page_url = 'https://toonmela.com/contact.php';
$page_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'ContactPage',
    'name' => 'Contact ToonMela',
    'description' => $page_desc,
    'url' => $page_url,
    'mainEntity' => [
        '@type' => 'Organization',
        'name' => 'ToonMela',
        'url' => 'https://toonmela.com/',
        'email' => 'operations@toonmela.com',
        'sameAs' => [
            'https://facebook.com/toonmela',
            'https://instagram.com/toonmelatv',
            'https://x.com/toonmelatv',
            'https://youtube.com/@softtoonacademy',
        ],
    ],
];
require_once __DIR__ . '/includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs">
        <a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span><span>Contact</span>
    </nav>
</div>

<div class="page">
    <div class="container">
        <div class="page-head">
            <h1>Contact Us</h1>
            <p>Koi sawaal, suggestion ya feedback? Hum sunna chahte hain aapki baat.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <h2>Get In Touch</h2>
                <div class="contact-item">
                    <strong>Email</strong>
                    <a href="mailto:operations@toonmela.com">operations@toonmela.com</a>
                </div>
                <div class="contact-item">
                    <strong>Social Media</strong>
                    <p>Facebook, Instagram, Twitter par ToonMela follow karein.</p>
                </div>
                <div class="contact-item">
                    <strong>Story Submission</strong>
                    <p>Agar aapke paas koi acchi moral story hai jo ToonMela par publish karna chahte hain, toh humein email karein!</p>
                </div>
            </div>

            <div class="contact-form">
                <h2>Send a Message</h2>
                <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
                    <div class="form-group">
                        <label for="name">Aapka Naam</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Aapka Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
