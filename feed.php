<?php
header('Content-Type: application/rss+xml; charset=UTF-8');
require_once __DIR__ . '/includes/functions.php';

$base = 'https://toonmela.com';
$stories = get_stories();

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
<channel>
    <title>ToonMela - Kahaniyon Ka Mela</title>
    <link><?php echo $base; ?></link>
    <description>Best moral stories for all ages in Hindi. Panchtantra, Fairy Tales, Life Lessons, Bedtime Stories.</description>
    <language>hi</language>
    <lastBuildDate><?php echo date('r'); ?></lastBuildDate>
    <atom:link href="<?php echo $base; ?>/feed.xml" rel="self" type="application/rss+xml"/>
    <image>
        <url><?php echo $base; ?>/favicon.svg</url>
        <title>ToonMela</title>
        <link><?php echo $base; ?></link>
    </image>
<?php foreach ($stories as $s) : ?>
    <item>
        <title><?php echo htmlspecialchars($s['title']); ?></title>
        <link><?php echo $base . '/stories/' . $s['slug']; ?></link>
        <guid isPermaLink="true"><?php echo $base . '/stories/' . $s['slug']; ?></guid>
        <description><?php echo htmlspecialchars($s['excerpt']); ?></description>
        <pubDate><?php echo date('r', strtotime($s['date'])); ?></pubDate>
        <dc:creator>ToonMela</dc:creator>
        <category><?php echo htmlspecialchars($s['category']); ?></category>
        <category><?php echo htmlspecialchars($s['ageLabel']); ?></category>
        <?php if (!empty($s['image'])) : ?>
        <enclosure url="<?php echo $base . $s['image']; ?>" type="image/webp"/>
        <?php endif; ?>
    </item>
<?php endforeach; ?>
</channel>
</rss>
