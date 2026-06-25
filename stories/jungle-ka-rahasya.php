<?php
require_once __DIR__ . "/../includes/functions.php";

$slug = 'jungle-ka-rahasya';
$title = 'Jungle Ka Rahasya';
$desc = 'Teen dost jungle mein gaye aur unhe mila ek aisa rahasya jisne unki zindagi badal di. Kya tha woh rahasya? Padhein poori kahani.';
$date = '2026-06-25';
$readTime = 7;
$age = 'junior-readers';
$ageLabel = 'Junior Readers (7-12)';
$category = 'Adventure';
$heroImage = '/img/jungle-rahasya-hero.webp';

ob_start();
?>

<p>"Chalo na yaar, jungle chalte hain!" Kabir ne kaha, apni cycle rok kar.</p>

<p>Sanya ne aankhein ghumayi. "Mummy ne mana kiya hai."</p>

<p>"Meri mummy ne bhi," Rohan bola. Phir muskuraya. <strong>"Isliye toh mazaa aayega!"</strong></p>

<p>Teen dost — Kabir, Sanya aur Rohan — gaon ke bahar wale jungle ki taraf nikle. Yeh jungle bahut purana tha. Gaon ke bade log kehte the ki jungle ke andar ek <strong>"khoyi hui jagah"</strong> hai jahan jaane wala kabhi khaali haath nahi lautta.</p>

<p>Koi kehta tha wahan sona hai. Koi kehta tha jadui phool hai. Koi kehta tha kuch nahi hai — bas kahaniyaan hain.</p>

<p>Teeno ko pata lagana tha.</p>

<img src="<?php echo SITE_URL; ?>img/jungle-rahasya-friends.webp" alt="Teen dost jungle mein jaate hue - adventure cartoon" style="border-radius:8px; margin: 2em auto;">

<h2>Jungle Ke Andar</h2>

<p>Jungle ghane pedon se bhara tha. Upar se suraj ki roshni mushkil se aa rahi thi. Chidion ki awaazein thi, patthi ki sarsar thi, aur kabhi-kabhi kisi jaanwar ki aahat.</p>

<p>"Mujhe dar lag raha hai," Sanya boli.</p>

<p>"Mujhe bhi," Rohan bola. "Lekin hum wapas nahi jayenge."</p>

<p>Kabir saamne chal raha tha. Achanak woh ruka. "Dekho! Yeh kya hai?"</p>

<p>Zameen par ek purana, toota-phoota pathar ka raasta tha — jaise kisi ne bahut saalon pehle banaya ho. Raasta jungle ke andar ja raha tha.</p>

<p>"Yeh raasta kahiin toh jayega!" Kabir excited tha.</p>

<p>Teeno us raaste par chalne lage.</p>

<h2>Khoyi Hui Jagah</h2>

<p>Aadhe ghante baad raasta ek clearing mein aakar ruka. Aur wahan — teeno ka muh khula ka khula reh gaya.</p>

<p>Saamne ek sundar sa <strong>jharna</strong> tha! Paani chamak raha tha jaise heere gir rahe hon. Jharne ke paas rang-birangi phool the jo teeno ne kabhi nahi dekhe the. Titliyan ud rahi thin. Ek chhota sa talaab tha jismein machhliyaan tairti dikh rahi thin.</p>

<p>Aur jharne ke paas — ek purana pathar tha jispar kuch likha hua tha.</p>

<img src="<?php echo SITE_URL; ?>img/jungle-rahasya-waterfall.webp" alt="Khoyi hui jagah - sundar jharna aur phool - cartoon" style="border-radius:8px; margin: 2em auto;">

<p>Sanya ne padha: <strong>"Jo dhundhe, usse milta hai. Jo dare, woh yahan tak aata hi nahi."</strong></p>

<p>"Yeh toh wahi khoyi hui jagah hai!" Rohan chillaya. "Lekin sona kahan hai? Jaadu kahan hai?"</p>

<p>Teeno ne poori jagah dhundhi. Har pathar ulta diya. Har ped ke peeche dekha. Lekin na sona mila, na jadui cheez.</p>

<p>"Bakwaas hai. Kuch nahi hai yahan!" Kabir haar maan kar baith gaya.</p>

<h2>Asli Khazaana</h2>

<p>Tab Sanya ne kuch alag kiya. Woh jharne ke paas gayi aur paani mein haath daala. "Kitna thanda hai! Kitna accha lag raha hai!"</p>

<p>Phir usne charon taraf dekha — phool, titliyaan, saaf hawa, panchhi — aur boli:</p>

<p><strong>"Yaar... yeh jagah hi toh khazaana hai."</strong></p>

<p>Kabir aur Rohan ne usse dekha.</p>

<p>"Socho — poore jungle mein sirf yeh jagah aisi hai. Itni sundar, itni shaant. Aur hum teen yahan aa gaye. Kya yeh sone se kam hai?"</p>

<p>Kabir sochne laga. Sach mein — woh is jagah par baithkar jo sukoon mehsoos kar raha tha, woh kisi sone se nahi milta.</p>

<p>Rohan ne machhliyaan dekhin, phoolon ki khushbu li, jharne ki awaaz suni. <strong>"Sanya sahi keh rahi hai. Yeh jagah hi asli khazaana hai. Aur hum isse dhundh liye!"</strong></p>

<p>Teeno dost wahan ghanton baithe rahe. Baatein kin. Hansi-mazaak kiya. Paani mein pair daale. Woh din unki zindagi ka <strong>sabse accha din</strong> tha.</p>

<p>Ghar wapas aake Kabir ne apni diary mein likha: <em>"Aaj pata chala — asli khazaana sone-chaandi mein nahi hota. Asli khazaana woh pal hote hain jo hum apne doston ke saath jeete hain."</em></p>

<div class="moral-box">
    <h3>Kahani Ki Seekh</h3>
    <p><strong>Duniya ka sabse bada khazaana cheezein nahi, anubhav hain.</strong> Acche dost, sundar yaadein, aur naye anubhav — yeh sone se bhi zyada keemti hain. Dar ke maare peeche mat hato — aage badho, kyunki zindagi ke sabse sundar pal unhe milte hain jo dhundhne ki himmat rakhte hain!</p>
</div>

<?php
$story_content = ob_get_clean();
require __DIR__ . '/../includes/story-layout.php';
