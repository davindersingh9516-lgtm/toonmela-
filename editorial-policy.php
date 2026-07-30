<?php
require_once __DIR__ . '/includes/functions.php';
$page_title = 'Editorial Policy - AI Transparency & Standards | ToonMela';
$page_desc = 'ToonMela editorial policy: kaise har story AI-assisted aur human-reviewed hai. Content creation aur correction process ki poori transparency.';
$page_url = 'https://toonmela.com/editorial-policy.php';
$keywords = 'toonmela editorial policy, ai content transparency, hindi story editorial process, moral story quality standards, human reviewed content';
$page_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Editorial Policy | ToonMela',
    'description' => 'Full editorial policy of ToonMela - AI usage transparency, human review process, content standards for all age groups.',
    'url' => 'https://toonmela.com/editorial-policy.php',
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'ToonMela',
        'url' => 'https://toonmela.com/',
        'logo' => ['@type' => 'ImageObject', 'url' => 'https://toonmela.com/favicon.png'],
    ],
    'author' => [
        '@type' => 'Person',
        'name' => 'Davinder Singh',
        'url' => 'https://toonmela.com/about.php',
        'jobTitle' => 'Founder & Editor-in-Chief',
    ],
    'dateModified' => '2026-06-01',
    'inLanguage' => 'en',
];
require_once __DIR__ . '/includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs"><a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span><span>Editorial Policy</span></nav>
</div>

<div class="page">
    <div class="container">
        <div class="page-head">
            <h1>Editorial Policy</h1>
            <p>How we create, review, and maintain content on ToonMela. Full transparency about our process.</p>
        </div>

        <div class="page-content">
            <h2>Our Commitment to Quality</h2>
            <p>ToonMela is committed to publishing moral stories that are engaging, age-appropriate, culturally sensitive, and genuinely valuable to our readers. Every piece of content on this platform goes through human editorial review before publishing.</p>

            <h2>Use of AI Tools</h2>
            <p><strong>We are transparent about our use of AI in content creation.</strong> ToonMela uses AI-assisted tools (including large language models) in the following ways:</p>
            <p><strong>What AI does:</strong></p>
            <ul style="list-style:disc;padding-left:1.5em;margin:1em 0;">
                <li>Helps draft story structures and narratives faster</li>
                <li>Assists with language consistency and grammar</li>
                <li>Generates cartoon illustrations for stories</li>
                <li>Helps with SEO optimization and meta descriptions</li>
            </ul>
            <p><strong>What AI does NOT do:</strong></p>
            <ul style="list-style:disc;padding-left:1.5em;margin:1em 0;">
                <li>AI does not decide which stories to publish - humans do</li>
                <li>AI does not determine moral lessons - our editorial team does</li>
                <li>AI does not verify cultural appropriateness - human reviewers do</li>
                <li>AI does not have final approval - every story is reviewed by our editor before publishing</li>
            </ul>

            <h2>Human Editorial Oversight</h2>
            <p>Every story published on ToonMela is reviewed by our Editor-in-Chief, <strong>Davinder Singh</strong>, who has 5+ years of experience in Hindi content creation. The review checks for:</p>
            <ul style="list-style:disc;padding-left:1.5em;margin:1em 0;">
                <li><strong>Moral accuracy:</strong> Does the story convey a genuine, positive moral lesson?</li>
                <li><strong>Age-appropriateness:</strong> Is the content suitable for the tagged age group?</li>
                <li><strong>Cultural sensitivity:</strong> Does the story respect Indian cultural values without stereotyping?</li>
                <li><strong>Engagement quality:</strong> Is the story compelling enough that readers won't stop reading?</li>
                <li><strong>Language quality:</strong> Is the Hinglish natural, readable, and grammatically sound?</li>
            </ul>

            <h2>Content Categories & Age Groups</h2>
            <p>Stories are categorized into four age groups with specific content guidelines:</p>
            <ul style="list-style:disc;padding-left:1.5em;margin:1em 0;">
                <li><strong>Nanhe Readers (3-6):</strong> Simple language, no violence, no complex emotions, positive themes only</li>
                <li><strong>Junior Readers (7-12):</strong> Adventure and friendship themes, mild conflict allowed, no disturbing content</li>
                <li><strong>Teen Readers (13-17):</strong> Real-world topics (bullying, exam pressure, phone addiction), handled sensitively</li>
                <li><strong>Sabke Liye (18+):</strong> Deep philosophical themes, family dynamics, career-life balance, no explicit content</li>
            </ul>

            <h2>Corrections & Updates</h2>
            <p>If we discover an error in a published story - factual, moral, or cultural - we correct it promptly and note the update date on the story. Readers can report issues to <a href="mailto:operations@toonmela.com">operations@toonmela.com</a>.</p>

            <h2>Reader Feedback</h2>
            <p>We welcome feedback from our readers. If you believe a story contains inappropriate content, factual errors, or doesn't meet our quality standards, please <a href="<?php echo SITE_URL; ?>contact.php">contact us</a>. We take every report seriously and respond within 48 hours.</p>

            <p style="margin-top:2em;font-style:italic;color:var(--text-muted);">Last updated: June 2026</p>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
