<footer class="footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a href="<?php echo SITE_URL; ?>" class="logo">Toon<span>Mela</span></a>
            <p class="footer-about">ToonMela - Kahaniyon Ka Mela. Moral stories jo har umar ke readers ke liye likhi gayi hain. Panchtantra se lekar modern life lessons tak.</p>
            <div class="footer-social">
                <a href="https://facebook.com/toonmela" target="_blank" rel="noopener" aria-label="Facebook"><i data-lucide="facebook"></i></a>
                <a href="https://instagram.com/toonmelatv" target="_blank" rel="noopener" aria-label="Instagram"><i data-lucide="instagram"></i></a>
                <a href="https://x.com/toonmelatv" target="_blank" rel="noopener" aria-label="Twitter"><i data-lucide="twitter"></i></a>
                <a href="https://youtube.com/@toonmela" target="_blank" rel="noopener" aria-label="YouTube"><i data-lucide="youtube"></i></a>
            </div>
        </div>
        <div class="footer-col">
            <h4>Age Groups</h4>
            <?php foreach (get_age_groups() as $slug => $info) : ?>
                <a href="<?php echo SITE_URL . 'age/' . $slug . '.php'; ?>"><?php echo e($info['label'] . ' (' . $info['range'] . ')'); ?></a>
            <?php endforeach; ?>
        </div>
        <div class="footer-col">
            <h4>Categories</h4>
            <a href="<?php echo SITE_URL; ?>stories.php?cat=Panchtantra">Panchtantra</a>
            <a href="<?php echo SITE_URL; ?>stories.php?cat=Fairy+Tales">Fairy Tales</a>
            <a href="<?php echo SITE_URL; ?>stories.php?cat=Life+Lessons">Life Lessons</a>
            <a href="<?php echo SITE_URL; ?>stories.php?cat=Bedtime+Stories">Bedtime Stories</a>
            <a href="<?php echo SITE_URL; ?>stories.php?cat=Friendship">Friendship</a>
        </div>
        <div class="footer-col">
            <h4>Quick Links</h4>
            <a href="<?php echo SITE_URL; ?>">Home</a>
            <a href="<?php echo SITE_URL; ?>about.php">About Us</a>
            <a href="<?php echo SITE_URL; ?>contact.php">Contact Us</a>
            <a href="<?php echo SITE_URL; ?>editorial-policy.php">Editorial Policy</a>
            <a href="<?php echo SITE_URL; ?>privacy-policy.php">Privacy Policy</a>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; <?php echo date('Y'); ?> ToonMela. All Rights Reserved. Kahaniyon Ka Mela.
    </div>
</footer>

<script>
lucide.createIcons();
document.addEventListener('keydown',function(e){if(e.key==='Escape'){var o=document.querySelector('.search-overlay');if(o)o.classList.remove('active');}});
document.addEventListener('click',function(e){if(e.target.matches('.nav a')){var n=document.querySelector('.nav');if(n)n.classList.remove('active');}});
</script>
</body>
</html>
