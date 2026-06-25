<?php
require_once __DIR__ . '/../includes/functions.php';

$slug = 'imandaar-lakadhara';
$story_data = get_story_by_slug($slug);
$related = get_related_stories($slug, $story_data['age'] ?? 'nanhe-readers');
$latest = array_slice(get_stories(), 0, 5);

$page_title = 'Imaandaar Lakadhara - Sachai Ki Jeet | Fairy Tale | ToonMela';
$page_desc = 'Ek gareeb lakadhara ki kulhaadi nadi mein gir gayi. Jal devta ne usse teen kulhadiyaan dikhayi. Kya lakadhara ne sachai ka raasta chuna? Padhein yeh classic moral story.';
$page_url = SITE_URL . 'stories/imandaar-lakadhara.php';
$page_image = 'https://cdn.pixabay.com/photo/2015/06/19/21/24/avenue-815297_640.jpg';
$page_type = 'article';
$page_schema = [
    '@context' => 'https://schema.org', '@type' => 'Article',
    'headline' => 'Imaandaar Lakadhara - Sachai Ki Jeet',
    'description' => $page_desc, 'image' => $page_image,
    'datePublished' => '2026-06-24', 'dateModified' => '2026-06-24',
    'author' => ['@type' => 'Organization', 'name' => 'ToonMela'],
    'publisher' => ['@type' => 'Organization', 'name' => 'ToonMela'],
    'mainEntityOfPage' => $page_url, 'wordCount' => 800,
];

require_once __DIR__ . '/../includes/header.php';
?>

<div class="container">
    <nav class="breadcrumbs">
        <a href="<?php echo SITE_URL; ?>">Home</a><span class="sep">/</span>
        <a href="<?php echo SITE_URL; ?>age/nanhe-readers.php">Nanhe Readers</a><span class="sep">/</span>
        <span>Imaandaar Lakadhara</span>
    </nav>
</div>

<article class="single">
    <div class="container">
        <div class="single-layout">
            <div class="single-content">
                <header class="single-header">
                    <h1>Imaandaar Lakadhara - Sachai Ki Jeet</h1>
                    <div class="single-meta">
                        <span>24 Jun 2026</span>
                        <span>4 min read</span>
                        <span><a href="<?php echo SITE_URL; ?>age/nanhe-readers.php">Nanhe Readers (3-6)</a></span>
                        <span><a href="<?php echo SITE_URL; ?>stories.php?cat=Fairy+Tales">Fairy Tales</a></span>
                    </div>
                </header>

                <div class="single-img">
                    <img src="https://cdn.pixabay.com/photo/2015/06/19/21/24/avenue-815297_640.jpg" alt="Imaandaar Lakadhara - Moral Story">
                </div>

                <div class="story-body">
                    <p>Ek gaon mein ek gareeb lakadhara rehta tha jiska naam tha Ramu. Ramu bahut mehanti tha. Wo roz subah jungle jaata, lakdiyan kaattha, aur bazaar mein bech kar apna guzaara karta tha.</p>

                    <p>Ramu ke paas ek hi kulhaadi thi - <strong>purani si, lohe ki kulhaadi</strong> - lekin woh usse bahut sambhaal kar rakhta tha. Yeh kulhaadi uski rozi-roti ka ek matra sahara thi.</p>

                    <h2>Kulhaadi Gir Gayi!</h2>

                    <p>Ek din Ramu nadi ke kinaare ek ped kaat raha tha. Jor se kulhaadi chalaayi toh achanak uska haath phisal gaya aur <strong>kulhaadi seedhi nadi mein jaake gir gayi!</strong></p>

                    <p>Ramu ghabra gaya. Nadi ka paani bahut gehra tha, woh tair nahi sakta tha. Uski aankhon mein aansoo aa gaye.</p>

                    <blockquote>"Hai bhagwaan! Ab main kya karunga? Yahi ek kulhaadi thi mere paas. Ab main lakdiyan kaise katunga? Mere bachche bhookhe mar jayenge!" Ramu rone laga.</blockquote>

                    <h2>Jal Devta Ka Aana</h2>

                    <p>Ramu ki sacchi prayers sun kar nadi mein se ek chamakdaar roshni nikli. Paani mein se <strong>Jal Devta</strong> prakat hue!</p>

                    <p>"Mat ro Ramu. Main jaanta hun teri kulhaadi nadi mein gir gayi hai. Main tujhe dhundh kar laata hun," Jal Devta ne kaha.</p>

                    <p>Jal Devta paani mein doobi aur wapas aaye - unke haath mein ek <strong>chamchamaati sone ki kulhaadi</strong> thi!</p>

                    <p>"Kya yeh teri kulhaadi hai?" Jal Devta ne poocha.</p>

                    <p>Ramu ne kulhaadi dekhi. Sone ki thi - bahut keemti! Agar woh haan bol deta toh uski gareebi door ho jaati. Lekin Ramu ne apna sir hilaya.</p>

                    <p><strong>"Nahi ji, yeh meri kulhaadi nahi hai. Meri toh lohe ki kulhaadi thi."</strong></p>

                    <p>Jal Devta phir paani mein gaye aur is baar ek <strong>chaandi ki kulhaadi</strong> lekar aaye.</p>

                    <p>"Kya yeh teri hai?"</p>

                    <p>"Nahi ji, yeh bhi meri nahi hai," Ramu ne sachai se kaha.</p>

                    <p>Teesri baar Jal Devta Ramu ki <strong>purani lohe ki kulhaadi</strong> lekar aaye.</p>

                    <p>Ramu ki aankhon mein chamak aa gayi! "Haan ji! Yeh meri kulhaadi hai! Bahut bahut shukriya!" Ramu ne khushi se kaha.</p>

                    <h2>Sachai Ka Inaam</h2>

                    <p>Jal Devta muskuraye aur bole, <strong>"Ramu, tum bahut imaandaar ho. Bahut se log sone ki kulhaadi dekh kar lalach mein aa jaate. Lekin tumne sachai ka raasta chuna."</strong></p>

                    <p>"Toh iske inaam mein - lo, teeno kulhadiyaan tumhari hain! Sone ki, chaandi ki, aur tumhari apni lohe ki!"</p>

                    <p>Ramu ki aankhon mein khushi ke aansoo aa gaye. Usne Jal Devta ko pranaam kiya aur ghar chala gaya.</p>

                    <p>Us din se Ramu kabhi gareeb nahi raha. Lekin usne apni imaandaari kabhi nahi chhodi. Gaon ke log uski imaandaari ki kahaniyaan aaj bhi sunaate hain.</p>

                    <div class="moral-box">
                        <h3>Kahani Ki Seekh</h3>
                        <p><strong>Imaandaari sabse badi daulat hai.</strong> Sachai ka raasta mushkil ho sakta hai, lekin iska phal hamesha meetha hota hai. Jhooth aur lalach se payi gayi cheez kabhi sukh nahi deti. <strong>Sachai ki hamesha jeet hoti hai!</strong></p>
                    </div>
                </div>

                <div class="share">
                    <div class="share-title">Share This Story</div>
                    <div class="share-btns">
                        <a href="https://api.whatsapp.com/send?text=<?php echo urlencode('Imaandaar Lakadhara - ' . $page_url); ?>" target="_blank" rel="noopener" class="share-btn wa">WhatsApp</a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page_url); ?>" target="_blank" rel="noopener" class="share-btn fb">Facebook</a>
                        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode('Imaandaar Lakadhara - Moral Story'); ?>&url=<?php echo urlencode($page_url); ?>" target="_blank" rel="noopener" class="share-btn tw">Twitter</a>
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
