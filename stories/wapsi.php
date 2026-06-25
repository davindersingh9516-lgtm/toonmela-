<?php
$slug = 'wapsi';
$title = 'Wapsi';
$desc = 'Manoj 20 saal baad apne gaon lautta hai. Sab badal gaya hai - lekin ek cheez nahi badli. Woh kya hai? Padhein yeh dil choo lene wali kahani.';
$date = '2026-06-22';
$readTime = 10;
$age = 'sabke-liye';
$ageLabel = 'Sabke Liye (18+)';
$category = 'Life Lessons';
$heroImage = '/img/wapsi-hero.webp';

ob_start();
?>

<p>Bus ruki. Manoj utra.</p>

<p>20 saal baad. <strong>Wahi bus stand. Wahi dhool. Wahi gaon — Rampur.</strong></p>

<p>Lekin sab badal gaya tha. Kachchi sadak ab pakki ho gayi thi. Purana neem ka ped kat chuka tha. Chacha ki dukaan ki jagah ek ATM laga tha. Aur woh school — jahan Manoj ne pehli baar A likha tha — ab ek warehouse ban gaya tha.</p>

<p>Manoj ka dil bhaari ho gaya. <strong>"Yeh mera gaon nahi hai. Yeh toh kuch aur hai."</strong></p>

<img src="<?php echo SITE_URL; ?>img/wapsi-village.webp" alt="Manoj apne gaon mein wapas - cartoon" style="border-radius:8px; margin: 2em auto;">

<h2>Kyun Gaya Tha</h2>

<p>Manoj 18 saal ka tha jab gaon choda tha. Papa se jhagda hua tha.</p>

<p>"Tujhe yahan reh kar kya milega? Kheti karega? Gareebi kaatega?" Manoj ne kaha tha.</p>

<p>Papa ne kaha tha — <strong>"Beta, shehar jaana galat nahi hai. Lekin apni mitti bhoolna galat hai."</strong></p>

<p>Manoj nahi maana. Shehar gaya. Mehnat ki. Paise kamaaye. Acchi naukri mili. Shaadi hui. Bachche hue. Life "set" ho gayi.</p>

<p>Lekin Papa se baat band ho gayi. Pehle gusse mein, phir ego mein, phir aadat mein.</p>

<p>Aur ab — 20 saal baad — Papa guzar gaye. Gaon se kisi ne bataya. <strong>Manoj antim sanskaar mein bhi nahi ja paaya.</strong></p>

<p>2 mahine baad — aaj — woh aaya hai. Der se. Bahut der se.</p>

<h2>Purana Ghar</h2>

<p>Manoj ghar pahuncha. Darwaaza khula tha. Andar Maa baithi thin — budhi, kamzor, lekin zinda.</p>

<p>Maa ne Manoj ko dekha. Ek pal ke liye aankhein pheeli. Phir — jaise 20 saal ka doori ek pal mein pighal gayi — <strong>Maa ro padin.</strong></p>

<p>"Aa gaya mera beta. Aa gaya."</p>

<p>Manoj Maa ke pair mein gir gaya. "Maa, maaf kar do. Bahut galat kiya maine."</p>

<p>Maa ne usse uthaya. Gale lagaya. Kaha — <strong>"Beta, maa kabhi naraz nahi hoti. Bas intezaar karti hai."</strong></p>

<img src="<?php echo SITE_URL; ?>img/wapsi-maa.webp" alt="Manoj apni Maa se milta hua - emotional cartoon" style="border-radius:8px; margin: 2em auto;">

<h2>Papa Ka Sandook</h2>

<p>Maa ne kaha, "Tere Papa ne tere liye kuch rakha tha. Sandook mein hai. Ja, dekh."</p>

<p>Manoj ne sandook khola. Andar ek purana lifaafa tha. Usme ek khat tha — Papa ki handwriting mein:</p>

<blockquote>"Manoj beta, agar tu yeh padh raha hai toh ya toh main nahi raha, ya tu wapas aa gaya. Dono mein se kuch bhi ho — main khush hun."</blockquote>

<blockquote>"Tu shehar gaya — theek kiya. Mehnat ki — bahut accha kiya. Lekin ek galti ki — wapas nahi aaya. Beta, ped kitna bhi bada ho — uski jadein zameen mein hi hoti hain."</blockquote>

<blockquote>"Main naraz nahi hun. Kabhi nahi tha. Bas tera intezaar tha. Har Diwali pe tere liye ek kurta rakhta tha — socha shayad is saal aayega. 20 kurte hain sandook mein. Ek bhi nahi pehna tune."</blockquote>

<p>Manoj ne sandook mein dekha — sach mein — <strong>20 kurte. Har saal ka ek. Dhyan se fold karke rakhe hue.</strong> Har ek par ek chhoti si chitthi — "Diwali 2007 — Manoj ke liye", "Diwali 2008 — Manoj ke liye"...</p>

<p>Manoj ne ek kurta uthaya. Seene se lagaya. Aur aisi royi jaise 20 saal ka dard ek saath beh nikla ho.</p>

<h2>Nayi Shuruaat</h2>

<p>Manoj ne faisla kiya — woh Maa ko le jaayega apne saath.</p>

<p>Lekin Maa ne mana kar diya. "Mera ghar yahan hai beta. Teri zindagi wahan hai. <strong>Bas ab phone karna — roz.</strong>"</p>

<p>Manoj ne waada kiya. Aur is baar waada nibhaya.</p>

<p>Har roz Maa ko phone karta. Har 2 mahine mein gaon aata. Har Diwali pe woh kurta pehenta jo Papa ne rakha tha.</p>

<p>Aur jab log poochte — "Yeh purane kurte kyun pehente ho?" — Manoj kehta:</p>

<p><strong>"Yeh purane nahi hain. Yeh mere Papa ke pyaar hain. Aur pyaar kabhi purana nahi hota."</strong></p>

<div class="moral-box">
    <h3>Kahani Ki Seekh</h3>
    <p><strong>Ghar wapas jaao — jab tak waqt hai.</strong> Ego, gussa, busy schedule — sab bahane hain. Tumhare maa-baap tumhara intezaar kar rahe hain. Ek phone karo — aaj. Abhi. Kyunki waqt kisike liye nahi rukta, aur kuch rishte aise hain jinke bina duniya ka saara paisa bekaar hai. <strong>Ped kitna bhi bada ho — jadein gaon mein hi hoti hain.</strong></p>
</div>

<?php
$story_content = ob_get_clean();
require __DIR__ . '/../includes/story-layout.php';
