<?php
require_once __DIR__ . '/includes/functions.php';
$active_page = 'videos';
$page_title = 'Watch Hindi Moral Stories Videos | ToonMela';
$page_desc = 'Watch animated Hindi moral stories on YouTube. Funny cartoon kahaniyan, family stories, kids stories - sab free mein dekhein ToonMela par.';
$page_url = 'https://toonmela.com/videos.php';
$page_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    'name' => 'ToonMela Videos - Hindi Moral Stories',
    'url' => 'https://toonmela.com/videos.php',
    'description' => $page_desc,
];

$videos_json = file_get_contents(__DIR__ . '/data/videos.json');
$videos = json_decode($videos_json, true) ?: [];

require_once __DIR__ . '/includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs"><a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span><span>Videos</span></nav>
</div>

<div class="archive-head">
    <div class="container">
        <h1>Watch Moral Stories</h1>
        <p>Animated Hindi moral stories - dekhein aur seekhein. Har video mein ek kahani, har kahani mein ek seekh.</p>
    </div>
</div>

<section class="section">
    <div class="container">

        <!-- YouTube Subscribe Bar -->
        <div style="background:linear-gradient(135deg,#FF0000,#CC0000);border-radius:12px;padding:20px 28px;margin-bottom:36px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:14px;">
            <div style="display:flex;align-items:center;gap:14px;">
                <i data-lucide="youtube" style="width:32px;height:32px;color:#fff;"></i>
                <div>
                    <div style="font-family:var(--font-h);font-size:18px;font-weight:700;color:#fff;">Toon Stories Mela</div>
                    <div style="font-family:var(--font-ui);font-size:12px;color:rgba(255,255,255,0.7);">YouTube Channel - Subscribe for daily stories!</div>
                </div>
            </div>
            <a href="https://youtube.com/@softtoonacademy?sub_confirmation=1" target="_blank" rel="noopener" style="background:#fff;color:#FF0000;font-family:var(--font-ui);font-size:14px;font-weight:700;padding:10px 24px;border-radius:50px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;">
                <i data-lucide="bell" style="width:16px;height:16px;"></i> SUBSCRIBE
            </a>
        </div>

        <!-- Videos Grid -->
        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:24px;">
            <?php foreach ($videos as $video) : ?>
            <div style="background:var(--bg-white);border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,0.06);transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 28px rgba(0,0,0,0.12)'" onmouseout="this.style.transform='none';this.style.boxShadow='0 2px 8px rgba(0,0,0,0.06)'">
                <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
                    <iframe src="https://www.youtube.com/embed/<?php echo htmlspecialchars($video['youtubeId']); ?>" title="<?php echo htmlspecialchars($video['title']); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy" style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                </div>
                <div style="padding:16px 20px;">
                    <div style="font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;color:var(--accent);margin-bottom:6px;"><?php echo htmlspecialchars($video['category']); ?></div>
                    <h3 style="font-family:var(--font-h);font-size:17px;font-weight:700;color:var(--heading);margin-bottom:8px;line-height:1.35;"><?php echo htmlspecialchars($video['title']); ?></h3>
                    <p style="font-family:var(--font-ui);font-size:13px;color:var(--text-light);line-height:1.5;margin-bottom:10px;"><?php echo htmlspecialchars($video['desc']); ?></p>
                    <div style="font-family:var(--font-ui);font-size:11px;color:var(--text-muted);display:flex;align-items:center;gap:4px;">
                        <i data-lucide="calendar" style="width:12px;height:12px;"></i>
                        <?php echo date('d M Y', strtotime($video['date'])); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if (empty($videos)) : ?>
        <div class="no-stories"><p>Videos jaldi aayengi!</p></div>
        <?php endif; ?>

        <!-- CTA -->
        <div style="text-align:center;margin-top:40px;padding:30px;background:var(--bg-highlight);border-radius:12px;">
            <h3 style="font-family:var(--font-h);font-size:20px;color:var(--heading);margin-bottom:8px;">Rozana Nayi Videos!</h3>
            <p style="font-family:var(--font-ui);font-size:14px;color:var(--text-light);margin-bottom:16px;">YouTube pe subscribe karein - har din nayi animated moral story!</p>
            <a href="https://youtube.com/@softtoonacademy?sub_confirmation=1" target="_blank" rel="noopener" class="btn" style="background:#FF0000;">
                <i data-lucide="youtube" style="width:16px;height:16px;display:inline;vertical-align:-3px;"></i> Subscribe on YouTube
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
