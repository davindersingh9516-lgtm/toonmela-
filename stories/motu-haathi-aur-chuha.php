<?php
require_once __DIR__ . "/../includes/functions.php";

$slug = 'motu-haathi-aur-chuha';
$title = 'Motu Haathi Aur Chhotu Chuha';
$desc = 'Jungle ka sabse bada haathi sabse chhote chuhe se darta tha! Lekin ek din dono ki dosti ne poora jungle bacha liya. Padhein yeh cute kahani.';
$date = '2026-06-25';
$readTime = 4;
$age = 'nanhe-readers';
$ageLabel = 'Nanhe Readers (3-6)';
$category = 'Friendship';
$heroImage = '/img/motu-haathi-hero.webp';

ob_start();
?>

<p>Jungle mein ek bahut bada haathi rehta tha. Itna bada ki jab woh chalta tha, toh <strong>zameen hilti thi — dhum dhum dhum!</strong></p>

<p>Sablog usse "Motu" kehte the. Motu bahut mazboot tha. Bade-bade ped ukhad de. Bhari cheezein utha le. Poora jungle Motu se darta tha.</p>

<p>Lekin Motu ka ek raaz tha jo kisi ko nahi pata tha.</p>

<p><strong>Motu chuhe se darta tha!</strong></p>

<img src="<?php echo SITE_URL; ?>img/motu-haathi-scared.webp" alt="Motu haathi chuhe se darta hua - funny cartoon" style="border-radius:8px; margin: 2em auto;">

<p>"Eeeeek!" Jab bhi koi chuha aata, Motu chillata aur bhaag jaata. Itna bada haathi — aur itna chhota chuha — sab haste the!</p>

<h2>Chhotu Chuha</h2>

<p>Jungle mein ek chhota sa chuha bhi rehta tha — Chhotu. Chhotu itna chhota tha ki log usse dekhte bhi nahi the. Sab usse ignore karte the.</p>

<p>"Tum itne chhote ho, kya kar loge?" sab kehte.</p>

<p>Chhotu udaas rehta tha. "Kaash main bhi Motu jaisa bada hota. Tab sab mujhse baat karte."</p>

<h2>Toofaan Aa Gaya!</h2>

<p>Ek din jungle mein bahut bada toofaan aaya. Hawa itni tez thi ki ped gir rahe the. Baarish itni thi ki nadi mein paani badh gaya.</p>

<p>Sab jaanwar dar gaye. "Bachao! Paani aa raha hai!"</p>

<p>Motu ne kaha, "Main nadi ka raasta rok deta hun!" Motu ne bade-bade pathar uthaye aur nadi ke saamne rakh diye. Lekin ek jagah se paani nikal raha tha — ek chhota sa ched tha patthar ke beech mein.</p>

<p><strong>"Yeh ched bahut chhota hai! Mera haath nahi jaata ismein!"</strong> Motu pareshaan ho gaya.</p>

<p>Tabhi Chhotu aaya.</p>

<p>"Main hun na!" Chhotu bola. Woh us chhote se ched mein ghus gaya aur andar se mitti aur patthi jamake ched band kar diya!</p>

<img src="<?php echo SITE_URL; ?>img/motu-haathi-friends.webp" alt="Motu haathi aur Chhotu chuha saath mein - dosti cartoon" style="border-radius:8px; margin: 2em auto;">

<p><strong>Paani ruk gaya! Jungle bach gaya!</strong></p>

<h2>Sabse Badi Dosti</h2>

<p>Poora jungle khush tha. Sab Chhotu ki taareef kar rahe the.</p>

<p>Motu ne Chhotu ko apni sund se utha kar apne sar par bithaya. "Chhotu bhai, aaj se tu mera sabse accha dost hai. <strong>Tu chhota zaroor hai — lekin tera kaam bada hai!</strong>"</p>

<p>Chhotu ro pada khushi se. "Aur Motu bhai, chuhe se darne mein koi sharam nahi. Sab kisi se darte hain!"</p>

<p>Motu ne hansa. "Haan, lekin ab ek chuhe se toh bilkul nahi darunga — kyunki mera sabse accha dost hi chuha hai!"</p>

<p>Us din se Motu aur Chhotu hamesha saath rehte. Bada kaam ho — Motu kare. Chhota kaam ho — Chhotu kare. <strong>Dono milkar har mushkil aasaan kar dete!</strong></p>

<div class="moral-box">
    <h3>Kahani Ki Seekh</h3>
    <p><strong>Koi chhota nahi hota, koi bada nahi hota.</strong> Sab apni jagah important hain. Kabhi kisi ko chhota mat samjho — kyunki kabhi-kabhi sabse chhota insaan hi sabse bada kaam karta hai! Aur dosti mein koi size nahi hota — dil bada hona chahiye!</p>
</div>

<?php
$story_content = ob_get_clean();
require __DIR__ . '/../includes/story-layout.php';
