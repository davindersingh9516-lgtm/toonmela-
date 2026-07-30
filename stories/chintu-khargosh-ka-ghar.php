<?php
require_once __DIR__ . "/../includes/functions.php";

$slug = 'chintu-khargosh-ka-ghar';
$title = 'Chintu Khargosh Ka Ghar - Sharing Ki Pyaari Kahani';
$desc = 'Chintu Khargosh ke paas jungle ka sabse sookha, sabse warm ghar tha. Jab zor ki baarish aayi aur sab doston ke ghar bheeg gaye, Chintu ne kya kiya? Ek pyaari kahani sharing aur dosti ke baare mein.';
$date = '2026-07-28';
$readTime = 4;
$age = 'nanhe-readers';
$ageLabel = 'Nanhe Readers (3-6)';
$category = 'Friendship';
$heroImage = '/img/khargosh-ghar-hero.webp';
$keywords = 'sharing ki kahani bacchon ke liye, chhote bacchon ki kahani hindi, khargosh ki kahani, moral story for kids hindi, baarish ki kahani bacchon ke liye, dosti aur sharing kahani, hindi story for 3 to 6 years, pyaari kahani bacchon ke liye';
$focus_keyphrase = 'sharing ki kahani bacchon ke liye';
$seo_title = 'Chintu Khargosh Ka Ghar - Sharing Ki Kahani | ToonMela';
$seo_desc = 'Chintu ke paas jungle ka sabse warm ghar tha. Baarish mein doston ke ghar bheeg gaye. Padhein yeh pyaari sharing ki kahani bacchon ke liye.';

ob_start();
?>

<p><strong>Chintu Khargosh</strong> ke paas jungle ka sabse accha ghar tha।</p>

<p>Uska ghar ek bade, mote ped ki jadon ke neeche tha - sookha, garam, aur bahut aaraam wala। Chintu ko apna ghar bahut pyaara tha।</p>

<p>Ek din aasmaan kaala ho gaya। <strong>Ghana-ghor baarish shuru ho gayi!</strong></p>

<p>Chintu apne sookhe ghar mein baitha, garam kambal odhke, khushi khushi gaajar khaa raha tha।</p>

<p>Tabhi darwaze pe <em>tuk-tuk-tuk!</em></p>

<img src="<?php echo SITE_URL; ?>img/khargosh-ghar-hero.webp" alt="Chintu Khargosh apne sookhe ghar mein baitha, bahar zor ki baarish - bacchon ki kahani hindi" width="1024" height="572" style="border-radius:8px; margin: 2em auto;">

<h2>Bheege Hue Dost</h2>

<p>Chintu ne darwaza khola। Wahan khadi thi <strong>Gilhari Mimi</strong> - poori bheegi hui, kaanpti hui।</p>

<p>"Chintu, mera ped ka ghar bheeg gaya! Kya main andar aa sakti hun?"</p>

<p>Chintu ek pal sochne laga। <em>Agar Mimi andar aayegi, toh mera ghar bhi thoda bheega ho jaayega...</em></p>

<p>Lekin Mimi ki kaanpti hui poonchh dekhkar, Chintu ka dil pighal gaya। "Aa jao Mimi!"</p>

<p>Thodi der baad phir <em>tuk-tuk-tuk!</em> Yeh the <strong>Hedgehog Tinku</strong> aur <strong>Chidiya Golu</strong> - dono bhi poore bheege hue!</p>

<p>"Hamare ghar mein paani bhar gaya!" Golu ne udaas awaaz mein kaha।</p>

<p>Chintu ka ghar chhota tha। Agar sab andar aaye, toh jagah kam pad jaayegi। Chintu ne ek second socha - <strong>phir muskura diya।</strong></p>

<p>"Sabke liye jagah hai! Andar aa jao!"</p>

<img src="<?php echo SITE_URL; ?>img/khargosh-ghar-friends.webp" alt="Chintu Khargosh apne sabhi bheege doston ko apne ghar mein sharing karte hue - sharing ki kahani" width="1024" height="572" style="border-radius:8px; margin: 2em auto;">

<h2>Chhota Ghar, Bada Dil</h2>

<p>Ab Chintu ke ghar mein Mimi, Tinku, aur Golu - sab ek saath baithe the। Thoda tight tha, lekin sab garam the, sookhe the, aur khush the।</p>

<p>Chintu ne apni sari gaajar bhi sabke saath share ki। Mimi ne apne baadam nikale। Golu ne meethe daane laaye। Sabne mil ke khaya!</p>

<p>Bahar baarish zor se ho rahi thi। Lekin andar - hansi-mazaak, kahaniyan, aur pyaar tha।</p>

<p>"Chintu," Tinku ne kaha, "tumne apna ghar humse share kiya। Thank you!"</p>

<p>Chintu muskuraya। "Jab hum apni cheezein doston ke saath share karte hain, toh woh cheez chhoti nahi hoti - <strong>woh aur bhi khaas ban jaati hai!</strong>"</p>

<p>Baarish ruk gayi। Lekin Mimi, Tinku, aur Golu ne faisla kiya ki woh Chintu ke ghar ke paas hi apne naye ghar banayenge - taaki agli baarish mein sab ek doosre ki madad kar sakein।</p>

<div class="moral-box">
    <h3>Kahani Ki Seekh</h3>
    <p><strong>Share karna dil ko bada banata hai।</strong> Chintu ka ghar chhota tha, lekin uska dil bahut bada tha। Jab hum apni cheezein doston ke saath baantte hain, toh khushi kam nahi hoti - <strong>aur zyada ho jaati hai!</strong></p>
</div>

<?php
$story_content = ob_get_clean();
require __DIR__ . '/../includes/story-layout.php';
