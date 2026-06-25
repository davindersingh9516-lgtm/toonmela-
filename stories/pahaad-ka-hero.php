<?php
require_once __DIR__ . "/../includes/functions.php";

$slug = 'pahaad-ka-hero';
$title = 'Pahaad Ka Hero';
$desc = 'Jab baadh aane wali thi aur koi nahi maan raha tha, ek 11 saal ke ladke ne akele poore gaon ko bachaya. Yeh hai Veer ki kahani.';
$date = '2026-06-23';
$readTime = 7;
$age = 'junior-readers';
$ageLabel = 'Junior Readers (7-12)';
$category = 'Adventure';
$heroImage = '/img/pahaad-hero-main.webp';

ob_start();
?>

<p>Pahadon ke beech ek chhota sa gaon tha — <strong>Devpur</strong>. Yahan ek ladka rehta tha — Veer, 11 saal ka.</p>

<p>Veer school jaata, pahadon par ghoomta, aur jungle mein jaanwaron ko observe karta. Usse nature se bahut pyaar tha. Woh chidion ki boli samajhta tha, mausam ka andaaza lagata tha, aur nadi ke paani ko dekh kar bata deta tha ki baarish hogi ya nahi.</p>

<p>Lekin gaon ke log usse seriously nahi lete the. "Arre chhora hai, kya jaane!"</p>

<h2>Khatarnaak Nishani</h2>

<p>Ek din Veer jungle mein tha. Usne kuch ajeeb dekha — <strong>saare pakshi ek hi direction mein ud rahe the.</strong> Jaldi-jaldi. Dar ke maare.</p>

<p>Phir usne nadi dekhi — paani ka rang badal gaya tha. Mitti jaisa brown ho raha tha. Aur paani ka level bhi badh raha tha.</p>

<img src="<?php echo SITE_URL; ?>img/pahaad-hero-warning.webp" alt="Veer nadi ka paani dekhta hua - khatarnaak nishani - cartoon" style="border-radius:8px; margin: 2em auto;">

<p>Veer ka dil tez dhakne laga. Yeh nishaniyan usne apne Dadaji se seekhi thin. Iska matlab tha — <strong>upar pahadon mein bahut zyada baarish ho rahi hai aur baadh aane wali hai!</strong></p>

<p>Veer bhaagta hua gaon aaya. "Sarpanch ji! Baadh aane wali hai! Sabko upar jaana hoga!"</p>

<p>Sarpanch ne hansa. "Arre Veer, aasmaan saaf hai! Koi baadh nahi aayegi."</p>

<p>"Lekin nadi ka paani brown ho raha hai! Pakshi bhaag rahe hain!"</p>

<p>"Chhore, jaake padhai kar. Hamein mat sikha."</p>

<p>Kisi ne nahi suna.</p>

<h2>Veer Ka Faisla</h2>

<p>Veer rona chahta tha. Lekin uske paas time nahi tha rona ka.</p>

<p>Usne ek faisla kiya — <strong>"Agar bade nahi sunenge, toh main bacchon ko bataunga!"</strong></p>

<p>Veer school gaya aur apne saare doston ko bataya. "Yaar, ghar jaao aur apne mummy-papa se kaho — saamaan pack karo aur pahaad ki upar wali jagah chalo. Baadh aane wali hai."</p>

<p>Bachche ghar gaye. Unhone itna roya, itna kaha, ki parents ko sunna pada. <strong>"Chalo theek hai, chal kar dekh lete hain"</strong> — kuch logon ne sochkar saamaan pack karna shuru kiya.</p>

<p>Veer ne gaon ke mandir ka ghanta bajaya — <strong>Tann tann tann!</strong> Itna zor se ki poora gaon sun le.</p>

<p>"Baadh aa rahi hai! Sab upar chalo! Abhi!"</p>

<h2>Baadh!</h2>

<p>Do ghante baad — jab aadhaa gaon upar pahunch gaya tha — <strong>nadi ka paani achanak badha.</strong> Itna paani ki neeche wale gharon mein paani ghus gaya.</p>

<img src="<?php echo SITE_URL; ?>img/pahaad-hero-saved.webp" alt="Gaon ke log safe upar pahaad par - Veer hero - cartoon" style="border-radius:8px; margin: 2em auto;">

<p>Jo log upar chale gaye the — woh safe the. Jo neeche reh gaye the — unhe bhi doosron ne khinch kar upar pahunchaya.</p>

<p><strong>Ek bhi jaan nahi gayi. Kyunki ek 11 saal ke ladke ne himmat dikhayi.</strong></p>

<p>Sarpanch Veer ke paas aaye. Unki aankhon mein aansoo the. "Beta, tu sahi tha. Hum galat the. Agar tune warning nahi di hoti..."</p>

<p>Veer ne kaha, <strong>"Sarpanch ji, mujhe koi hero nahi banna tha. Main toh bas woh karna chahta tha jo sahi tha."</strong></p>

<p>Us din se poora gaon Veer ki baat sunta. Aur Veer ne sabko sikhaya — nature ki bhasha kaise samjhein, paani kaise dekhein, jaanwaron ke signals kaise padhein.</p>

<div class="moral-box">
    <h3>Kahani Ki Seekh</h3>
    <p><strong>Sahi baat kehne mein umar nahi dekhte.</strong> Chahe tumhari koi na sune — agar tum sahi ho, toh himmat se bolo. Aur nature ka respect karo — woh hamesha humein signals deti hai, bas dekhna seekho. <strong>Asli hero woh hai jo sahi waqt par sahi kaam kare — chahe koi maane ya na maane.</strong></p>
</div>

<?php
$story_content = ob_get_clean();
require __DIR__ . '/../includes/story-layout.php';
