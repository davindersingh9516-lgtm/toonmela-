<?php
require_once __DIR__ . '/../includes/functions.php';

$slug = 'sher-aur-chuha';
$story_data = get_story_by_slug($slug);
$related = get_related_stories($slug, $story_data['age'] ?? 'nanhe-readers');
$latest = array_slice(get_stories(), 0, 5);

$page_title = 'Sher Aur Chuha - Ek Dosti Ki Kahani | Panchtantra | ToonMela';
$page_desc = 'Jungle ka raja sher aur ek chhota chuha. Jab chuhe ne sher ki jaan bachayi toh sabko pata chala - chhota ya bada koi nahi hota, dosti sabse badi hoti hai.';
$page_url = SITE_URL . 'stories/sher-aur-chuha.php';
$page_image = 'https://cdn.pixabay.com/photo/2018/07/31/22/08/lion-3576045_640.jpg';
$page_type = 'article';
$page_schema = [
    '@context' => 'https://schema.org', '@type' => 'Article',
    'headline' => 'Sher Aur Chuha - Ek Dosti Ki Kahani',
    'description' => $page_desc, 'image' => $page_image,
    'datePublished' => '2026-06-25', 'dateModified' => '2026-06-25',
    'author' => ['@type' => 'Organization', 'name' => 'ToonMela'],
    'publisher' => ['@type' => 'Organization', 'name' => 'ToonMela'],
    'mainEntityOfPage' => $page_url, 'wordCount' => 750,
];

require_once __DIR__ . '/../includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs">
        <a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span>
        <a href="<?php echo SITE_URL; ?>age/nanhe-readers.php">Nanhe Readers</a><span class="sep">/</span>
        <span>Sher Aur Chuha</span>
    </nav>
</div>

<article class="single">
    <div class="container">
        <div class="single-layout">
            <div class="single-content">
                <header class="single-header">
                    <h1>Sher Aur Chuha - Ek Dosti Ki Kahani</h1>
                    <div class="single-meta">
                        <span>25 Jun 2026</span>
                        <span>4 min read</span>
                        <span><a href="<?php echo SITE_URL; ?>age/nanhe-readers.php">Nanhe Readers (3-6)</a></span>
                        <span><a href="<?php echo SITE_URL; ?>stories.php?cat=Panchtantra">Panchtantra</a></span>
                    </div>
                </header>

                <div class="single-img">
                    <img src="https://cdn.pixabay.com/photo/2018/07/31/22/08/lion-3576045_640.jpg" alt="Sher Aur Chuha - Panchtantra Moral Story">
                </div>

                <div class="story-body">
                    <p>Bahut samay pehle ki baat hai. Ek ghane jungle mein ek bahut bada aur taaqatwar sher rehta tha. Saare jaanwar usse darte the. Sher ko apni taaqat par bahut ghamand tha.</p>

                    <p>Ek din dopahar ko sher ek bade patthar ke neeche so raha tha. Uski neend bahut gehri thi. Tabhi ek chhota sa chuha udhar se guzra. Chuha itna chhota tha ki wo galti se sher ke upar chadh gaya!</p>

                    <h2>Sher Ka Gussa</h2>

                    <p>Sher ki neend khul gayi. Usne apni badi si panja se chuhe ko pakad liya.</p>

                    <blockquote>"Tu itna chhota sa chuha! Tune meri neend kharaab ki? Main tujhe abhi kha jaunga!" sher ne garjte hue kaha.</blockquote>

                    <p>Chhota chuha dar ke kaamp raha tha. Lekin usne himmat karke kaha, "Maharaj, please mujhe maaf kar dijiye! Main bahut chhota hun, main aapka pet bhi nahi bhar paunga. Lekin agar aap mujhe chhodh denge, toh ek din main zaroor aapke kaam aaunga."</p>

                    <p>Sher ko hans aayi. <strong>"Tu? Itna chhota chuha? Mere kaam aayega?"</strong> Sher ne maze mein hanste hue chuhe ko chhodh diya.</p>

                    <h2>Mushkil Ghadi</h2>

                    <p>Kuch dinon baad jungle mein ek shikari aaya. Usne ek bada sa jaaj bicha diya. Sher shaam ko jungle mein ghoom raha tha ki achanak woh jaaj mein fans gaya!</p>

                    <p>Sher ne bahut koshish ki - apne panjon se, apne daanton se - lekin jaaj ka jaala itna mazboot tha ki sher nikkal hi nahi paaya. Sher ne zor-zor se dahaadhna shuru kiya.</p>

                    <p>"Bachao! Koi bachao!"</p>

                    <p>Sher ki awaaz sun kar woh chhota chuha bhaagta hua aaya. Usne dekha ki sher jaaj mein phansa hua hai.</p>

                    <h2>Chuhe Ka Waada</h2>

                    <p>"Maharaj! Ghabrayiye mat! Main aaya!" chuhe ne kaha.</p>

                    <p>Chuhe ne apne chhote-chhote lekin tez daanton se jaaj ke dhaage kaatne shuru kiye. <strong>Kat-kat-kat-kat!</strong> Ek-ek karke saare dhaage kaat diye. Kuch hi der mein sher aazaad ho gaya!</p>

                    <p>Sher hairaan tha. Itna chhota chuha - aur usne uski jaan bacha di!</p>

                    <p>"Chuhe bhai, tum sach mein mere kaam aaye. Maine socha tha ki tum itne chhote ho, kya kar paoge. Lekin aaj tumne sabit kar diya ki <strong>koi chhota ya bada nahi hota.</strong>"</p>

                    <p>Us din se sher aur chuha pakke dost ban gaye. Sher ne kabhi bhi kisi chhote jaanwar ko neechi nazar se nahi dekha.</p>

                    <div class="moral-box">
                        <h3>Kahani Ki Seekh</h3>
                        <p><strong>Kisi ko chhota mat samjho.</strong> Har kisi mein koi na koi khoobee hoti hai. Aaj jo chhota lagta hai, kal wahi tumhari madad kar sakta hai. Dosti mein koi chhota-bada nahi hota!</p>
                    </div>
                </div>

                <div class="share">
                    <div class="share-title">Share This Story</div>
                    <div class="share-btns">
                        <a href="https://api.whatsapp.com/send?text=<?php echo urlencode('Sher Aur Chuha - ' . $page_url); ?>" target="_blank" rel="noopener" class="share-btn wa">WhatsApp</a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page_url); ?>" target="_blank" rel="noopener" class="share-btn fb">Facebook</a>
                        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode('Sher Aur Chuha - Moral Story'); ?>&url=<?php echo urlencode($page_url); ?>" target="_blank" rel="noopener" class="share-btn tw">Twitter</a>
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
