<?php
require_once __DIR__ . "/../includes/functions.php";

$slug = 'woh-ek-din';
$title = 'Woh Ek Din';
$desc = 'Sahil ko roz school mein bully kiya jaata tha. Ek din usne kuch aisa kiya jisne bully ko bhi rula diya. Yeh kahani har bacche ko padhni chahiye.';
$date = '2026-06-22';
$readTime = 8;
$age = 'teen-readers';
$ageLabel = 'Teen Readers (13-17)';
$category = 'Life Lessons';
$heroImage = '/img/woh-ek-din-hero.webp';

ob_start();
?>

<p>Sahil har din school se ghar aake seedha apne kamre mein jaata tha. Darwaaza band karta. Bag phenkta. Aur <strong>bed par muh chhupa kar leta rehta.</strong></p>

<p>Mummy poochti — "School kaisa tha?" Sahil kehta — "Theek." Bas. Isse zyada kabhi nahi bola.</p>

<p>Lekin theek nahi tha. Bilkul bhi theek nahi tha.</p>

<h2>Raj Aur Uska Gang</h2>

<p>Raj class ka sabse popular ladka tha. Tall, smart, sports mein accha. Aur uska ek gang tha — 4-5 ladke jo uski har baat maante the.</p>

<p>Sahil Raj ka favourite target tha.</p>

<p>"Aye Sahil! Teri shirt kitni purani hai — dhobiyon ne bhi reject kar di hogi!"</p>

<p>"Sahil toh itna kamzor hai — hawa bhi aa jaaye toh gir jayega!"</p>

<img src="<?php echo SITE_URL; ?>img/woh-ek-din-bully.webp" alt="Sahil school mein udaas - cartoon illustration" style="border-radius:8px; margin: 2em auto;">

<p>Sab hanste the. Sahil chup rehta tha. Andar-andar toot raha tha — lekin kisi ko nahi dikhata tha.</p>

<p>Ek din Raj ne Sahil ka tiffin chhin liya. "Yeh kya laata hai! Mummy ko khaana banana nahi aata?" Poore class ke saamne Sahil ka tiffin zameen par phenk diya.</p>

<p>Sahil ne tiffin uthaya. Kuch nahi bola. Ghar gaya. Us raat khaana nahi khaaya.</p>

<h2>Woh Ek Din</h2>

<p>Agley din school mein ek event tha — <strong>"Share Your Story."</strong> Har bacche ko stage par aake apni ek baat share karni thi.</p>

<p>Sahil ka naam bhi tha. Woh nahi jaana chahta tha. Lekin teacher ne insist kiya.</p>

<p>Stage par gaya. Mic haath mein liya. Poora school saamne tha — Raj bhi, uska gang bhi.</p>

<p>Sahil ne deep breath liya. Aur bola:</p>

<blockquote>"Mera naam Sahil hai. Aur main roz school aane se darta hun."</blockquote>

<p>Hall mein silence chha gayi.</p>

<blockquote>"Mere Papa nahi hain. 3 saal pehle guzar gaye. Mummy akeli mehnat karti hain. Mera tiffin woh subah 5 baje uthkar banati hain — apna khaana skip karke. Meri shirt purani hai kyunki hum nayi nahi kharid sakte. Aur... aur mujhe is sab ke liye roz mazaak udaaya jaata hai."</blockquote>

<p>Sahil ki awaaz kaamp rahi thi. Lekin woh ruka nahi.</p>

<blockquote>"Main yeh nahi keh raha ki mujhse mazaak mat udaao. Main sirf yeh keh raha hun — <strong>mazaak udaane se pehle ek baar socho ki saamne wale ki zindagi kaisi hai. Kyunki tumhe nahi pata uski kahaani kya hai.</strong>"</blockquote>

<img src="<?php echo SITE_URL; ?>img/woh-ek-din-stage.webp" alt="Sahil stage par apni baat kehta hua - brave cartoon" style="border-radius:8px; margin: 2em auto;">

<p>Sahil stage se utra. Hall mein sannata tha. Phir ek teacher ne taali baajayi. Phir ek student ne. Phir poora hall.</p>

<p><strong>Standing ovation.</strong></p>

<p>Aur Raj? Raj apni seat par sir jhukaye baitha tha. Uski aankhon mein aansoo the.</p>

<h2>Baad Mein</h2>

<p>School ke baad Raj Sahil ke paas aaya. Pehli baar uski awaaz mein rudeness nahi thi.</p>

<p>"Sahil... I'm sorry. Mujhe nahi pata tha."</p>

<p>Sahil ne Raj ko dekha. Gussa aa raha tha — lekin usne kuch aur kiya.</p>

<p><strong>Sahil ne haath milaya.</strong></p>

<p>"Theek hai. Bas aage se kisi ke saath aisa mat karna. Tera nahi pata ki saamne wala andar se kya jhhel raha hai."</p>

<p>Raj ne sir hilaya. Us din ke baad Raj ne kabhi kisi ko bully nahi kiya. Aur Sahil? Sahil ab school aane se nahi darta tha.</p>

<p>Kyunki usne seekh liya tha — <strong>apni baat kehna kamzori nahi, sabse badi taaqat hai.</strong></p>

<div class="moral-box">
    <h3>Kahani Ki Seekh</h3>
    <p><strong>Bullying galat hai — chahe koi bhi kare.</strong> Agar tumhare saath ho raha hai — chup mat raho. Apni baat kaho — kisi teacher ko, parents ko, ya dost ko. Aur agar tum kisi ko bully karte ho — ruko aur socho ki saamne wale ki zindagi kaisi hai. <strong>Har insaan ki ek kahani hai — usse sunne ki koshish karo, mazaak udaane ki nahi.</strong></p>
</div>

<?php
$story_content = ob_get_clean();
require __DIR__ . '/../includes/story-layout.php';
