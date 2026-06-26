<?php
header('Content-Type: application/xml; charset=UTF-8');
require_once __DIR__ . '/includes/functions.php';

$base = 'https://toonmela.com';
$stories = get_stories();

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo $base; ?>/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?php echo $base; ?>/stories.php</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?php echo $base; ?>/videos.php</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo $base; ?>/about.php</loc>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc><?php echo $base; ?>/contact.php</loc>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>
<?php foreach (get_age_groups() as $slug => $info) : ?>
    <url>
        <loc><?php echo $base; ?>/age/<?php echo $slug; ?>.php</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
<?php endforeach; ?>
<?php foreach ($stories as $s) : ?>
    <url>
        <loc><?php echo $base; ?>/stories/<?php echo $s['slug']; ?>.php</loc>
        <lastmod><?php echo $s['date']; ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
<?php endforeach; ?>
</urlset>
