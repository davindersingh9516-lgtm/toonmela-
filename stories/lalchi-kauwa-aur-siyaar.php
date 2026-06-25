<?php
require_once __DIR__ . '/../includes/functions.php';

$slug = 'lalchi-kauwa-aur-siyaar';
$story_data = get_story_by_slug($slug);
$related = get_related_stories($slug, $story_data['age'] ?? 'junior-readers');
$latest = array_slice(get_stories(), 0, 5);

$page_title = 'Lalchi Kauwa Aur Chalak Siyaar | Panchtantra Story | ToonMela';
$page_desc = 'Ek lalchi kauwe ki kahani jo doosron ka khaana churata tha. Chalak siyaar ne usse aisi seekh di ki wo kabhi bhool nahi paaya. Padhein yeh mast Panchtantra story.';
$page_url = SITE_URL . 'stories/lalchi-kauwa-aur-siyaar.php';
$page_image = 'https://cdn.pixabay.com/photo/2017/02/07/16/47/kingfisher-2046453_640.jpg';
$page_type = 'article';
$page_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => 'Lalchi Kauwa Aur Chalak Siyaar',
    'description' => $page_desc,
    'image' => $page_image,
    'datePublished' => '2026-06-25',
    'dateModified' => '2026-06-25',
    'author' => ['@type' => 'Organization', 'name' => 'ToonMela'],
    'publisher' => ['@type' => 'Organization', 'name' => 'ToonMela'],
    'mainEntityOfPage' => $page_url,
    'wordCount' => 850,
];

require_once __DIR__ . '/../includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs">
        <a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span>
        <a href="<?php echo SITE_URL; ?>age/junior-readers.php">Junior Readers</a><span class="sep">/</span>
        <a href="<?php echo SITE_URL; ?>stories.php?cat=Panchtantra">Panchtantra</a><span class="sep">/</span>
        <span>Lalchi Kauwa Aur Chalak Siyaar</span>
    </nav>
</div>

<article class="single">
    <div class="container">
        <div class="single-layout">
            <div class="single-content">
                <header class="single-header">
                    <h1>Lalchi Kauwa Aur Chalak Siyaar</h1>
                    <div class="single-meta">
                        <span>25 Jun 2026</span>
                        <span>5 min read</span>
                        <span><a href="<?php echo SITE_URL; ?>age/junior-readers.php">Junior Readers (7-12)</a></span>
                        <span><a href="<?php echo SITE_URL; ?>stories.php?cat=Panchtantra">Panchtantra</a></span>
                    </div>
                </header>

                <div class="single-img">
                    <img src="https://cdn.pixabay.com/photo/2017/02/07/16/47/kingfisher-2046453_640.jpg" alt="Lalchi Kauwa Aur Chalak Siyaar - Panchtantra Story">
                </div>

                <div class="story-body">
                    <p>Bahut purani baat hai, ek ghane jungle mein ek kauwa rehta tha jiska naam tha Kaalu. Kaalu dekhne mein toh seedha-saadha lagta tha, lekin uski ek bahut buri aadat thi - <strong>wo hamesha doosron ka khaana churata tha.</strong></p>

                    <p>Jab bhi koi jaanwar apna khaana dhundhta, Kaalu usse door se dekhta rehta. Jaise hi woh jaanwar thoda sa idhar-udhar hota, Kaalu jhapt kar uska khaana le udta. Jungle ke saare jaanwar usse tang aa chuke the.</p>

                    <h2>Siyaar Ka Plan</h2>

                    <p>Ek din jungle mein ek chalak siyaar aaya jiska naam tha Sheru. Sheru bahut samajhdar tha aur usne Kaalu ke baare mein sab sun rakha tha.</p>

                    <p>"Main is lalchi kauwe ko seekh sikhaaunga," Sheru ne mann mein socha.</p>

                    <p>Agley din Sheru ne ek taaza roti ka tukda liya aur jungle ke beech mein rakh diya. Phir woh chhup kar ped ke peeche baith gaya. Jaise ki usse pata tha, Kaalu upar se udta hua aaya aur roti dekh kar khush ho gaya.</p>

                    <blockquote>"Wah! Aaj toh bina mehnat ke khaana mil gaya!" Kaalu ne socha aur jhapt kar roti apni chonch mein pakad li.</blockquote>

                    <p>Kaalu ek oonchi daali par baith gaya aur roti khaane laga. Tabhi neeche se Sheru ki awaaz aayi.</p>

                    <h2>Sheru Ki Chaal</h2>

                    <p>"Arre Kaalu bhai! Kya baat hai! Aaj toh tum bahut sundar lag rahe ho. Maine suna hai ki tumhari awaaz bhi bahut meethi hai. Ek baar gaana suna do na!" Sheru ne neeche se kaha.</p>

                    <p>Kaalu ko apni tareef sunna bahut accha laga. Wo phool kar kupp ho gaya. Usne socha, "Sach mein! Main toh bahut sundar hun. Chalo, gaana bhi suna deta hun."</p>

                    <p>Jaise hi Kaalu ne gaane ke liye apni chonch kholi - <strong>"Kaaw..."</strong> - roti uski chonch se neeche gir gayi! Sheru ne turant roti pakad li aur khaane laga.</p>

                    <p>"Arre! Meri roti!" Kaalu chillaya.</p>

                    <p>Sheru ne hanste hue kaha, "Kaalu bhai, yeh roti toh waise bhi tumhari nahi thi. Tumne bhi toh yeh kisi aur se churaayi thi na? Aaj tumhe pata chala ki jab apni cheez churi jaati hai toh kaisa lagta hai?"</p>

                    <h2>Kaalu Ki Samajh</h2>

                    <p>Kaalu ko bahut sharam aayi. Wo chup ho gaya aur sochne laga. Sach mein, usne aaj tak kitne jaanwaron ka khaana churaya tha. Unhe kitna dukh hua hoga!</p>

                    <p>Us din se Kaalu ne chori karna band kar diya. Wo apna khaana khud dhundhne laga aur doosre jaanwaron ki madad bhi karne laga. Dheere-dheere jungle ke saare jaanwar usse pyaar karne lage.</p>

                    <div class="moral-box">
                        <h3>Kahani Ki Seekh</h3>
                        <p><strong>Lalach buri balaa hai.</strong> Doosron ki cheezein churaane se kabhi khushi nahi milti. Jo apni mehnat se kamaata hai, wahi asli sukh paata hai. Aur haan - <strong>tareef sunkar kabhi apni akal mat khona!</strong></p>
                    </div>
                </div>

                <div class="share">
                    <div class="share-title">Share This Story</div>
                    <div class="share-btns">
                        <a href="https://api.whatsapp.com/send?text=<?php echo urlencode('Lalchi Kauwa Aur Chalak Siyaar - ' . $page_url); ?>" target="_blank" rel="noopener" class="share-btn wa">WhatsApp</a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page_url); ?>" target="_blank" rel="noopener" class="share-btn fb">Facebook</a>
                        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode('Lalchi Kauwa Aur Chalak Siyaar - Panchtantra Story'); ?>&url=<?php echo urlencode($page_url); ?>" target="_blank" rel="noopener" class="share-btn tw">Twitter</a>
                        <button class="share-btn cp" onclick="navigator.clipboard.writeText('<?php echo $page_url; ?>');this.textContent='Copied!';">Copy Link</button>
                    </div>
                </div>

                <?php if (!empty($related)) : ?>
                <div class="related">
                    <h2>Aur Padhein</h2>
                    <div class="stories-grid">
                        <?php foreach ($related as $story) { include __DIR__ . '/../includes/card.php'; } ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <aside class="sidebar">
                <div class="widget">
                    <h3 class="widget-title">Latest Stories</h3>
                    <?php foreach ($latest as $s) : if ($s['slug'] === $slug) continue; ?>
                        <div class="sb-story">
                            <div class="sb-story-img"><a href="<?php echo story_url($s['slug']); ?>"><img src="<?php echo e($s['image']); ?>" alt="<?php echo e($s['title']); ?>" loading="lazy"></a></div>
                            <div>
                                <div class="sb-story-title"><a href="<?php echo story_url($s['slug']); ?>"><?php echo e($s['title']); ?></a></div>
                                <div class="sb-story-date"><?php echo format_date($s['date']); ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="widget">
                    <h3 class="widget-title">Age Groups</h3>
                    <ul class="age-list">
                        <?php foreach (get_age_groups() as $aslug => $ainfo) : ?>
                            <li><a href="<?php echo SITE_URL . 'age/' . $aslug . '.php'; ?>"><?php echo e($ainfo['label'] . ' (' . $ainfo['range'] . ')'); ?><span class="age-count"><?php echo get_age_count($aslug); ?></span></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</article>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
