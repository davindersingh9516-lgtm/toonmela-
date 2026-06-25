<?php
require_once __DIR__ . "/../includes/functions.php";

$slug = 'dadi-ki-jadui-rasoi';
$title = 'Dadi Ki Jadui Rasoi';
$desc = 'Dadi ka khaana itna tasty kyun hota tha? Kya unki rasoi mein sach mein jaadu tha? Ek pote ne dhundha asli raaz aur woh sabko rula dega.';
$date = '2026-06-24';
$readTime = 6;
$age = 'junior-readers';
$ageLabel = 'Junior Readers (7-12)';
$category = 'Family Stories';
$heroImage = '/img/dadi-rasoi-hero.webp';

ob_start();
?>

<p>Aman ke ghar mein sabse tasty khaana <strong>Dadi</strong> banati thin.</p>

<p>Wahi daal, wahi chawal, wahi sabzi — lekin Dadi banaaye toh swaad alag! Mummy banaye toh theek, Papa banaye toh aur theek, lekin <strong>Dadi banaye toh "Waaah!"</strong></p>

<p>"Dadi, aapka khaana itna tasty kyun hota hai?" Aman hamesha poocha karta.</p>

<p>Dadi hamesha muskurati aur kehti, <strong>"Meri rasoi mein jaadu hai beta!"</strong></p>

<img src="<?php echo SITE_URL; ?>img/dadi-rasoi-cooking.webp" alt="Dadi rasoi mein pyaar se khaana banati hui - cartoon" style="border-radius:8px; margin: 2em auto;">

<p>Aman ko lagta tha Dadi mazaak karti hain. Lekin phir bhi usse jaanana tha — <strong>asli raaz kya hai?</strong></p>

<h2>Secret Agent Aman</h2>

<p>Ek din Aman ne faisla kiya — "Aaj main chhup kar dekhuga Dadi kya dalti hain khaane mein!"</p>

<p>Aman rasoi ke darwaaze ke peeche chhup gaya. Dadi andar aayin aur khaana banana shuru kiya.</p>

<p>Aman ne dhyan se dekha:</p>

<p>Dadi ne daal mein namak daala — <em>wahi namak jo ghar mein hai.</em></p>

<p>Haldi dali — <em>wahi haldi.</em></p>

<p>Mirch dali — <em>wahi mirch.</em></p>

<p>Koi special masala nahi. Koi jadui powder nahi. <strong>Sab kuch same tha!</strong></p>

<p>"Toh phir taste alag kyun hai?" Aman confused ho gaya.</p>

<p>Tabhi usne kuch notice kiya jo pehle kabhi nahi dekha tha.</p>

<h2>Asli Jaadu</h2>

<p>Dadi jab daal chala rahi thin — <strong>woh gaana ga rahi thin.</strong> Halka sa, meetha sa gaana.</p>

<p>Jab roti bel rahi thin — <strong>woh muskura rahi thin.</strong></p>

<p>Jab sabzi mein namak daal rahi thin — <strong>woh chakh kar check kar rahi thin</strong> ki sahi hai ya nahi. Ek baar nahi, do-teen baar.</p>

<p>Jab khaana plate mein rakh rahi thin — woh ek second ruk kar <strong>aankhein band karke kuch bol rahi thin.</strong></p>

<p>Aman aur kareeb aaya. Dadi keh rahi thin: <em>"Mere bachche khush rahen. Sehatmand rahen."</em></p>

<img src="<?php echo SITE_URL; ?>img/dadi-rasoi-love.webp" alt="Dadi pyaar se plate mein khaana lagati hui - cartoon" style="border-radius:8px; margin: 2em auto;">

<p>Aman ki aankhein bhar aayin.</p>

<p>Woh samajh gaya. Dadi ke khaane mein koi jadui masala nahi tha. <strong>Dadi ka jaadu tha — pyaar.</strong></p>

<p>Woh har roti mein pyaar dal rahi thin. Har sabzi mein dua de rahi thin. Har plate mein apna dil rakh rahi thin.</p>

<p>Isliye Dadi ka khaana alag tha. Kyunki <strong>pyaar se bani cheez ka swaad hi alag hota hai.</strong></p>

<h2>Aman Ka Faisla</h2>

<p>Us din Aman ne Dadi ko bahut tight waala hug diya.</p>

<p>"Dadi, mujhe pata chal gaya aapka raaz!"</p>

<p>"Accha? Kya hai?" Dadi ne poocha.</p>

<p>"Aapka jadui masala <strong>pyaar hai</strong>. Aap isliye accha khaana banati ho kyunki aap humse bahut pyaar karti ho."</p>

<p>Dadi ki aankhon mein aansoo aa gaye. "Beta... <strong>yeh duniya ka sabse purana masala hai. Aur sabse tasty bhi.</strong>"</p>

<div class="moral-box">
    <h3>Kahani Ki Seekh</h3>
    <p><strong>Pyaar se bani cheez ka swaad hi alag hota hai.</strong> Chahe khaana ho, koi kaam ho, ya koi rishta — jab usme dil lagao, toh woh khaas ban jaata hai. Apne ghar ke badon ko kabhi mat bhoolo — unka har kaam tumhare liye pyaar se bhara hota hai!</p>
</div>

<?php
$story_content = ob_get_clean();
require __DIR__ . '/../includes/story-layout.php';
