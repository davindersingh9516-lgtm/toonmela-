<?php
require_once __DIR__ . '/includes/functions.php';
$active_page = 'about';
$page_title = 'About ToonMela - Davinder Singh, Founder & Hindi Storyteller | ToonMela';
$page_desc = 'ToonMela founded by Davinder Singh - Hindi storyteller with 5+ years in content creation. Learn how we create 2000+ word moral stories for all ages with full editorial transparency.';
$page_url = 'https://toonmela.com/about.php';
$keywords = 'toonmela founder, davinder singh storyteller, about toonmela, hindi moral stories platform, hindi kahani website, toonmela editorial process';
$page_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'AboutPage',
    'name' => 'About ToonMela - Davinder Singh, Founder',
    'url' => 'https://toonmela.com/about.php',
    'description' => 'ToonMela is India\'s moral stories platform founded by Davinder Singh. Every story is 2000+ words, age-categorized, and personally reviewed.',
    'mainEntity' => [
        '@type' => 'Person',
        'name' => 'Davinder Singh',
        'url' => 'https://toonmela.com/about.php',
        'jobTitle' => 'Founder & Editor-in-Chief',
        'description' => 'Hindi storyteller and content creator with 5+ years experience in Hindi entertainment and children\'s content. Founder of ToonMela, previously created YouTube channels Nightbook (horror stories) and La La TV (moral stories) with lakhs of views.',
        'knowsAbout' => ['Hindi Moral Stories', 'Children\'s Literature', 'Indian Folklore', 'Panchtantra', 'Akbar Birbal Stories', 'Hindi Content Creation', 'Animated Storytelling'],
        'worksFor' => [
            '@type' => 'Organization',
            'name' => 'ToonMela',
            'url' => 'https://toonmela.com/',
            'foundingDate' => '2024',
        ],
        'sameAs' => [
            'https://instagram.com/toonmelatv',
            'https://x.com/toonmelatv',
            'https://youtube.com/@softtoonacademy',
        ],
    ],
];
require_once __DIR__ . '/includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs"><a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span><span>About</span></nav>
</div>

<div class="page">
    <div class="container">
        <div class="page-head">
            <h1>About ToonMela</h1>
            <p>Kahaniyon Ka Mela - Where every story has a soul, a purpose, and a lesson that stays with you.</p>
        </div>

        <div class="about-grid">
            <div class="about-text">
                <h2>The Story Behind ToonMela</h2>
                <p>Main <strong>Davinder Singh</strong> hun - ToonMela ka founder. 2019 mein maine YouTube par Hindi animated stories banana shuru kiya tha. Do channels chalaye - <strong>Nightbook</strong> (horror stories) aur <strong>La La TV</strong> (moral stories). Lakhs of views aaye, community bani, lekin ek baat khatakti rahi.</p>
                <p>YouTube mein stories 10-15 minute ki hoti hain - aur log skip karte hain. Lekin <strong>reading mein ek alag depth hai</strong> - padhne waala apni pace se padhe, sooche, mehsoos kare.</p>
                <p>2024 mein maine ToonMela launch kiya - ek aisi jagah jahan <strong>moral stories ko padha jaaye, na sirf dekha jaaye.</strong> Har kahani aise likhi jaati hai ki padhne waala shuru kare toh band na kar sake - aur khatam kare toh sochta reh jaaye.</p>
                <p><strong>Mera vaada:</strong> Har story mein ek aisi seekh hogi jo aapki zindagi mein kaam aaye. Chahe aap 5 saal ke ho ya 50 ke.</p>
            </div>
            <div class="about-img">
                <img src="<?php echo SITE_URL; ?>img/author-davinder.svg" alt="Davinder Singh - Founder, ToonMela" loading="lazy">
                <div style="text-align:center;margin-top:14px;">
                    <strong style="font-family:var(--font-h);font-size:18px;color:var(--heading);">Davinder Singh</strong><br>
                    <span style="font-family:var(--font-ui);font-size:13px;color:var(--text-muted);">Founder & Editor-in-Chief</span><br>
                    <div style="display:flex;gap:10px;justify-content:center;margin-top:8px;">
                        <a href="https://instagram.com/toonmelatv" target="_blank" rel="noopener" style="font-size:13px;"><i data-lucide="instagram" style="width:14px;height:14px;display:inline;vertical-align:-2px"></i> Instagram</a>
                        <a href="https://x.com/toonmelatv" target="_blank" rel="noopener" style="font-size:13px;"><i data-lucide="twitter" style="width:14px;height:14px;display:inline;vertical-align:-2px"></i> Twitter</a>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin:50px 0;">
            <h2 style="font-family:var(--font-h);font-size:28px;color:var(--heading);text-align:center;margin-bottom:10px;">Our Editorial Process</h2>
            <p style="text-align:center;max-width:600px;margin:0 auto 30px;font-family:var(--font-ui);font-size:15px;color:var(--text-light);">Every story goes through a rigorous 4-step process. We believe in full transparency.</p>

            <div class="values-grid">
                <div class="value-card"><div class="icon">1</div><h3>Research & Ideation</h3><p>We study what moral lessons resonate with each age group, which themes are culturally relevant, and what formats keep readers engaged.</p></div>
                <div class="value-card"><div class="icon">2</div><h3>AI-Assisted Drafting</h3><p>We use AI tools to help draft stories faster. AI helps with structure and language - but the soul, moral, and cultural context comes from human judgment.</p></div>
                <div class="value-card"><div class="icon">3</div><h3>Human Editorial Review</h3><p>Every story is personally reviewed for moral accuracy, age-appropriateness, cultural sensitivity, and engagement quality. Nothing publishes without human approval.</p></div>
            </div>
            <div class="values-grid" style="margin-top:20px;">
                <div class="value-card"><div class="icon">4</div><h3>Illustration & Publish</h3><p>Original cartoon illustrations are created. The piece is formatted, SEO-optimized, and published with proper age-group categorization.</p></div>
                <div class="value-card"><div class="icon"><i data-lucide="check-circle" style="width:28px;height:28px;color:var(--accent)"></i></div><h3>Ongoing Quality</h3><p>Published stories are periodically reviewed and updated. Reader feedback is incorporated. Stories below our quality bar are revised.</p></div>
                <div class="value-card"><div class="icon"><i data-lucide="message-circle" style="width:28px;height:28px;color:var(--accent)"></i></div><h3>Reader Feedback</h3><p>We actively listen. If a story needs improvement or content is inappropriate for an age group - we fix it immediately.</p></div>
            </div>
        </div>

        <div class="about-grid" style="margin-top:50px;">
            <div class="about-text">
                <h2>Content Standards</h2>
                <p><strong>Age-Appropriate:</strong> Every story is categorized by age group (3-6, 7-12, 13-17, 18+). Content, vocabulary, and themes match the target reader.</p>
                <p><strong>Culturally Sensitive:</strong> Stories respect Indian cultural values while being inclusive. No stereotyping, no religious bias, no gender discrimination.</p>
                <p><strong>Moral Integrity:</strong> Every story has a genuine moral - not forced, not preachy. The moral emerges naturally from the narrative.</p>
                <p><strong>Engagement First:</strong> If a story doesn't hook in the first 3 lines, it doesn't publish.</p>
                <p><strong>Transparency:</strong> We clearly disclose AI usage. See our <a href="<?php echo SITE_URL; ?>editorial-policy.php">Editorial Policy</a>.</p>
            </div>
            <div class="about-img">
                <img src="<?php echo SITE_URL; ?>img/about-content-standards.webp" alt="ToonMela Content Standards - Books and Quality Stories" loading="lazy" onerror="this.src='<?php echo SITE_URL; ?>img/story1-hero.webp'">
            </div>
        </div>

        <div style="text-align:center;margin:60px 0 40px;max-width:650px;margin-left:auto;margin-right:auto;">
            <h2 style="font-family:var(--font-h);font-size:28px;color:var(--heading);margin-bottom:14px;">Our Mission</h2>
            <p style="font-size:17px;line-height:1.8;color:var(--text-light);">To create a free, accessible platform where every person in India - regardless of age, language, or background - can find a moral story that makes them think, feel, and grow.</p>
        </div>

        <div style="text-align:center;padding:28px;background:var(--bg-white);border:1px solid var(--border);border-radius:10px;margin-bottom:40px;">
            <h3 style="font-family:var(--font-h);font-size:20px;color:var(--heading);margin-bottom:10px;">Get In Touch</h3>
            <p style="font-family:var(--font-ui);font-size:14px;color:var(--text-light);line-height:1.8;">
                <strong>Email:</strong> <a href="mailto:operations@toonmela.com">operations@toonmela.com</a><br>
                <strong>Story Submissions:</strong> We welcome original moral stories from writers across India.<br>
                <strong>Feedback:</strong> <a href="<?php echo SITE_URL; ?>contact.php">Contact us</a>
            </p>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
