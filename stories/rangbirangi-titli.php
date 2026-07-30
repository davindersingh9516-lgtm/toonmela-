<?php
require_once __DIR__ . "/../includes/functions.php";

$slug = 'rangbirangi-titli';
$title = 'Rangbirangi Titli - Short Moral Story for Kids in Hindi';
$desc = 'Ek titli thi jise apne rang pasand nahi the. Lekin jab usne jaana ki har rang ka ek kaam hai, toh uski duniya badal gayi!';
$date = '2026-06-25';
$readTime = 4;
$age = 'nanhe-readers';
$ageLabel = 'Nanhe Readers (3-6)';
$category = 'Fairy Tales';
$heroImage = '/img/rangbirangi-titli-hero.webp';
$focus_keyphrase = 'moral story for kids hindi';
$seo_title = 'Rangbirangi Titli - Moral Story for Kids Hindi | ToonMela';
$seo_desc = 'Titli ko apne rang pasand nahi the. Jab usne jaana har rang ka kaam hai, uski duniya badal gayi! Padhein yeh pyaari moral story for kids hindi mein.';

ob_start();
?>

<p>Ek thi titli. Uska naam tha <strong>Rinki</strong>.</p>

<p>Rinki ke pankhon par bahut saare rang the - laal, peela, neela, hara, narangi. Itne saare rang ki log kehte the, "Kitni rangbirangi titli hai!"</p>

<p>Lekin Rinki khush nahi thi.</p>

<p>"Mujhe itne rang kyun mile?" Rinki udaas ho kar boli. "Gulaab ko dekho - sirf laal hai. Kitna sundar lagta hai. Aasmaan ko dekho - sirf neela hai. Kitna pyara lagta hai. <strong>Aur main? Main toh rangon ka mess hun!</strong>"</p>

<h2>Gulaab Se Baat</h2>

<p>Rinki ek gulaab ke phool par baithi aur boli, "Gulaab ji, aap kitne lucky ho. Aapka sirf ek rang hai - laal. Main toh itne rangon mein confuse hun."</p>

<p>Gulaab ne hansa. "Rinki, mera laal rang pyaar ka rang hai. <strong>Lekin tera laal rang bhi toh hai!</strong> Tu bhi pyaar de sakti hai. Aur tere paas toh aur bhi rang hain - jo main de hi nahi sakta!"</p>

<img src="<?php echo SITE_URL; ?>img/rangbirangi-titli-flower.webp" alt="Rinki titli gulaab se baat karti hui - cartoon" width="1536" height="1024" style="border-radius:8px; margin: 2em auto;">

<h2>Aasmaan Se Baat</h2>

<p>Rinki udi aur bahut upar gayi. Aasmaan se boli, "Aasmaan ji, aap kitne sundar ho. Sirf neela - kitna shaant."</p>

<p>Aasmaan ne pyaar se kaha, "Rinki, mera neela rang shaanti ka rang hai. Lekin shaam ko main bhi narangi hota hun, raat ko kaala. <strong>Main bhi ek rang mein nahi rehta!</strong> Aur tera neela rang bhi toh hai - tu bhi shaanti de sakti hai sabko."</p>

<h2>Baarish Ka Rang</h2>

<p>Tabhi baarish aa gayi. Baarish ke baad aasmaan mein ek <strong>indradhanush</strong> nikla - saat rangon wala!</p>

<p>Saare jaanwar, pakshi, phool - sab indradhanush dekh kar khush ho gaye. "Kitna sundar hai! Kitna pyara hai!"</p>

<img src="<?php echo SITE_URL; ?>img/rangbirangi-titli-rainbow.webp" alt="Indradhanush aur Rinki titli - cartoon illustration" width="1536" height="1024" style="border-radius:8px; margin: 2em auto;">

<p>Ek chhoti si chidiya Rinki ke paas aayi aur boli, "Rinki didi! Tum toh <strong>udta hua indradhanush</strong> ho! Tumhare pankhon mein bhi wahi rang hain! Tum toh indradhanush se bhi sundar ho - kyunki tum ud sakti ho!"</p>

<p>Rinki ne apne pankhon ko dekha. Sach mein - laal, narangi, peela, hara, neela - sab rang the!</p>

<p><strong>"Main... main udta hua indradhanush hun?"</strong></p>

<p>Us din se Rinki kabhi udaas nahi hui. Woh jungle mein udti aur jahan jaati, sab khush ho jaate - kyunki Rinki ko dekhna <strong>indradhanush dekhne jaisa tha!</strong></p>

<div class="moral-box">
    <h3>Kahani Ki Seekh</h3>
    <p><strong>Har rang khaas hai, aur tum bhi khaas ho - bilkul waise jaise ho!</strong> Kabhi apne aap ko doosron se compare mat karo. Tumme jo hai, woh kisi aur mein nahi hai. Tum apne aap mein ek poora indradhanush ho!</p>
</div>

<?php
$story_content = ob_get_clean();
require __DIR__ . '/../includes/story-layout.php';
