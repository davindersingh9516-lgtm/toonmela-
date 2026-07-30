<?php
require_once __DIR__ . '/includes/functions.php';
$page_title = 'Privacy Policy | ToonMela';
$page_desc = 'ToonMela privacy policy: what data we collect, how we use cookies and analytics, third-party services, and children\'s privacy. Simple and transparent.';
$page_url = 'https://toonmela.com/privacy-policy.php';
$keywords = 'toonmela privacy policy, cookies policy, data protection, children privacy';
$page_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Privacy Policy | ToonMela',
    'description' => 'Full privacy policy of ToonMela - data collection, cookies, analytics, third-party services, and children\'s privacy.',
    'url' => 'https://toonmela.com/privacy-policy.php',
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'ToonMela',
        'url' => 'https://toonmela.com/',
        'logo' => ['@type' => 'ImageObject', 'url' => 'https://toonmela.com/favicon.png'],
    ],
    'dateModified' => '2026-07-10',
    'inLanguage' => 'en',
];
require_once __DIR__ . '/includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs"><a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span><span>Privacy Policy</span></nav>
</div>

<div class="page">
    <div class="container">
        <div class="page-head">
            <h1>Privacy Policy</h1>
            <p>What data we collect, how we use it, and your choices. Simple and transparent.</p>
        </div>

        <div class="page-content">
            <h2>Overview</h2>
            <p>ToonMela (toonmela.com) is a free storytelling website. We do not require accounts, logins, or subscriptions to read our stories. We collect as little data as possible - this page explains exactly what is collected and why.</p>

            <h2>Information We Collect</h2>
            <p><strong>Information you give us:</strong> If you contact us through our contact form or by email, we receive the name, email address, and message you provide. We use it only to reply to you and never sell or share it for marketing.</p>
            <p><strong>Information collected automatically:</strong></p>
            <ul style="list-style:disc;padding-left:1.5em;margin:1em 0;">
                <li><strong>Analytics data:</strong> We use Google Analytics (GA4) to understand which stories readers enjoy - pages visited, approximate location (city level), device type, and time on page. This data is aggregated and does not personally identify you.</li>
                <li><strong>Story popularity counts:</strong> Our server keeps anonymous counters of how often each story is opened, so we can feature popular stories. No personal information is stored with these counts.</li>
            </ul>

            <h2>Cookies</h2>
            <p>ToonMela uses a small number of cookies:</p>
            <ul style="list-style:disc;padding-left:1.5em;margin:1em 0;">
                <li><strong>Google Analytics cookies:</strong> used to measure site traffic and reader engagement.</li>
                <li><strong>Language preference cookie (googtrans):</strong> if you use the language selector, a cookie remembers your chosen language so pages stay translated.</li>
            </ul>
            <p>You can delete or block cookies anytime in your browser settings. The site remains fully readable with cookies disabled.</p>

            <h2>Third-Party Services</h2>
            <p>Some features are provided by third parties, which may set their own cookies or collect usage data under their own privacy policies:</p>
            <ul style="list-style:disc;padding-left:1.5em;margin:1em 0;">
                <li><strong>Google Analytics</strong> - site traffic measurement (<a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google Privacy Policy</a>)</li>
                <li><strong>Google Translate</strong> - on-page language translation</li>
                <li><strong>Google Fonts</strong> - webfonts used for the site design</li>
                <li><strong>YouTube</strong> - embedded story videos on our Videos page</li>
                <li><strong>Formspree</strong> - processes contact form submissions</li>
            </ul>

            <h2>Children's Privacy</h2>
            <p>Many of our stories are written for children, and we take children's privacy seriously. ToonMela does not knowingly collect personal information from children under 13. We have no accounts, comments, chat, or profile features. If you believe a child has sent us personal information (for example, through the contact form), please email us and we will delete it promptly.</p>

            <h2>How We Use Data</h2>
            <ul style="list-style:disc;padding-left:1.5em;margin:1em 0;">
                <li>To understand which stories and age groups readers enjoy, so we can write better content</li>
                <li>To feature popular stories on the homepage</li>
                <li>To respond to messages you send us</li>
            </ul>
            <p>We do <strong>not</strong> sell, rent, or trade any reader data. We do not run third-party advertising networks on this site.</p>

            <h2>Data Retention & Your Rights</h2>
            <p>Contact emails are kept only as long as needed to handle your request. Analytics data is retained per Google Analytics' standard settings. You can ask us anytime to view or delete any personal information we hold about you by emailing <a href="mailto:operations@toonmela.com">operations@toonmela.com</a>.</p>

            <h2>Changes to This Policy</h2>
            <p>If we change how we handle data, we will update this page and the "last updated" date below.</p>

            <h2>Contact</h2>
            <p>Questions about privacy? Email <a href="mailto:operations@toonmela.com">operations@toonmela.com</a> or use our <a href="<?php echo SITE_URL; ?>contact.php">contact page</a>.</p>

            <p style="margin-top:2em;font-style:italic;color:var(--text-muted);">Last updated: July 2026</p>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
