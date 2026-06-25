<?php
require_once __DIR__ . "/../includes/functions.php";

$slug = '98-percent-ka-sach';
$title = '98 Percent Ka Sach';
$desc = 'Riya class topper thi - 98%. Sabki aankhon ka taara. Lekin ek din usse pata chala ki 98% ke peeche ka sach kitna khaali hai. Yeh kahani har student ko padhni chahiye.';
$date = '2026-06-25';
$readTime = 8;
$age = 'teen-readers';
$ageLabel = 'Teen Readers (13-17)';
$category = 'Life Lessons';
$heroImage = '/img/98-percent-hero.webp';

ob_start();
?>

<p>Result aa gaya tha. Board pe naam chamak raha tha:</p>

<p><strong>Riya Sharma — 98.4% — School Topper</strong></p>

<p>Taaliyan baj rahi thin. Teachers badhai de rahe the. Papa ka phone aaya — "Bahut proud hain beta!" Mummy ro rahi thin khushi se. Relatives ke messages aa rahe the — "Humein pata tha Riya toh genius hai!"</p>

<p>Lekin Riya... Riya muskura rahi thi lekin andar se kuch aur mehsoos kar rahi thi. Woh kuch tha jo kisi ko nahi dikh raha tha.</p>

<img src="<?php echo SITE_URL; ?>img/98-percent-result.webp" alt="Riya result board ke saamne khadi - cartoon" style="border-radius:8px; margin: 2em auto;">

<h2>Peeche Mudke Dekho</h2>

<p>98% laane ke liye Riya ne kya-kya kiya tha?</p>

<p>Pichle 2 saal mein usne <strong>ek bhi baar doston ke saath bahar nahi gayi.</strong> Birthday parties? Nahi gayi. School trip? Nahi gayi. Ek baar Simran ne poocha tha — "Yaar chal na, ice cream khaate hain" — Riya ne kaha, "Nahi, mujhe Organic Chemistry karna hai."</p>

<p>Dheere-dheere <strong>doston ne bulana band kar diya.</strong></p>

<p>Riya raat 2 baje tak padhti thi. Subah 5 baje uthti thi. Khana kabhi time pe khaati thi, kabhi nahi. Health kharaab ho gayi — aankhon ke neeche dark circles aa gaye, weight badh gaya, aur ek baar toh exam ke pressure mein <strong>panic attack</strong> aa gaya tha.</p>

<p>Lekin kisiko nahi bataya. Kyunki "Riya toh strong hai. Riya toh topper hai."</p>

<h2>Woh Ek Sawaal</h2>

<p>Result ke din dopahar mein Riya ghar aayi. Kamre mein akeli baithi. Phone pe 147 congratulation messages the.</p>

<p>Tabhi uski chhoti behen Pihu aayi. Pihu 8 saal ki thi.</p>

<p>"Didi, congratulations! Tum bahut smart ho!" Pihu ne hug kiya.</p>

<p>"Thank you Pihu." Riya ne force smile di.</p>

<p>Pihu ne innocently poocha — <strong>"Didi, tum toh topper ho — toh tum bahut khush hogi na?"</strong></p>

<p>Riya kuch nahi bol paayi. Uski aankhon mein aansoo aa gaye.</p>

<p>Kyunki jawab tha — <strong>nahi.</strong></p>

<img src="<?php echo SITE_URL; ?>img/98-percent-alone.webp" alt="Riya akeli kamre mein sochti hui - cartoon" style="border-radius:8px; margin: 2em auto;">

<h2>Papa Se Baat</h2>

<p>Raat ko Papa aaye. Mithai laaye. Khush the.</p>

<p>"Papa..." Riya ne kaha. "Mujhe aapse kuch kehna hai."</p>

<p>"Bol beta."</p>

<p>"Main khush nahi hun."</p>

<p>Papa ka haath ruk gaya.</p>

<p>"Papa, maine 98% laaye. Lekin is process mein maine apne dost kho diye. Apni health kho di. Do saal se maine ek baar bhi zindagi enjoy nahi ki. <strong>Mujhe nahi pata ki 98% ke alaawa main aur kya hun.</strong>"</p>

<p>"Agar kal koi mujhse pooche — Riya, tumhe kya pasand hai? Tumhara hobby kya hai? Tumhara sapna kya hai? — toh mera jawab hoga: <strong>mujhe nahi pata.</strong> Kyunki maine kabhi socha hi nahi. Bas padhai, padhai, padhai."</p>

<p>Papa chup the. Bahut der tak.</p>

<p>Phir unhone Riya ko gale lagaya aur kaha — <strong>"Beta, humne galti ki. Humne tujhse kabhi nahi poocha ki tu khush hai ya nahi. Bas marks poochte rahe."</strong></p>

<p>"98% important hai. Lekin <strong>tu 98% se zyada important hai.</strong>"</p>

<h2>Nayi Shuruaat</h2>

<p>Agley hafte Riya ne Simran ko call kiya. "Simran, ice cream chalein?"</p>

<p>Simran hairaan thi. "Riya? Tu? Ice cream?"</p>

<p>"Haan yaar. Bahut der ho gayi."</p>

<p>Woh gayin. Hansin. Baatein kin. Riya ne 2 saalon mein pehli baar <strong>bina guilt ke time spend kiya.</strong></p>

<p>Riya ne painting shuru ki — jo usne 3 saal pehle chhod di thi. Guitar bhi uthaya. Roz shaam ko walk pe jaane lagi.</p>

<p>Marks? Woh ab bhi acche aate the. Lekin ab Riya <strong>jeeti bhi thi — sirf padhti nahi thi.</strong></p>

<div class="moral-box">
    <h3>Kahani Ki Seekh</h3>
    <p><strong>Marks important hain — lekin tum marks se zyada important ho.</strong> Padho, mehnat karo — lekin apne aap ko kho mat do. Dost banana, hobbies rakhna, health ka dhyan rakhna — yeh sab bhi utna hi zaroori hai jitna 98%. Zindagi sirf ek exam nahi hai — yeh ek poora safar hai. <strong>Acche marks ke saath acchi zindagi bhi jeeo.</strong></p>
</div>

<?php
$story_content = ob_get_clean();
require __DIR__ . '/../includes/story-layout.php';
