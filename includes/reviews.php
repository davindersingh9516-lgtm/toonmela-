<?php
// Expects $review_slug to already be set by the includer (not $slug - header.php
// and footer.php reuse $slug as a loop variable for the age-group nav links,
// so it can no longer be trusted by the time this file runs).
$__reviews = get_reviews($review_slug);
$__stats = get_rating_stats($review_slug);
?>
<section class="reviews-section" id="reviews">
    <h2>Reader Reviews</h2>

    <?php if ($__stats['count'] > 0) : ?>
        <div class="rating-summary">
            <span class="rating-summary-number"><?php echo number_format($__stats['average'], 1); ?></span>
            <span class="star-display" aria-hidden="true"><?php
                $rounded = round($__stats['average']);
                for ($i = 1; $i <= 5; $i++) echo $i <= $rounded ? '<span class="star filled">&#9733;</span>' : '<span class="star">&#9733;</span>';
            ?></span>
            <span class="rating-summary-count"><?php echo $__stats['count']; ?> review<?php echo $__stats['count'] > 1 ? 's' : ''; ?></span>
        </div>
    <?php else : ?>
        <p class="reviews-empty">Is kahani ka sabse pehla review aap likhein!</p>
    <?php endif; ?>

    <div class="review-list" id="reviewList">
        <?php foreach ($__reviews as $r) : ?>
            <div class="review-card">
                <div class="review-card-head">
                    <span class="review-name"><?php echo e($r['name']); ?></span>
                    <span class="star-display" aria-hidden="true"><?php
                        for ($i = 1; $i <= 5; $i++) echo $i <= $r['rating'] ? '<span class="star filled">&#9733;</span>' : '<span class="star">&#9733;</span>';
                    ?></span>
                </div>
                <p class="review-comment"><?php echo nl2br(e($r['comment'])); ?></p>
                <span class="review-date"><?php echo e(time_ago($r['date'])); ?></span>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="review-form-wrap">
        <h3>Apna Review Likhein</h3>
        <form id="reviewForm" class="review-form" novalidate>
            <input type="hidden" name="slug" value="<?php echo e($review_slug); ?>">
            <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">

            <div class="form-group">
                <label>Rating</label>
                <div class="star-picker" id="starPicker">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <span class="star-pick" data-value="<?php echo $i; ?>" role="button" tabindex="0" aria-label="<?php echo $i; ?> star">&#9733;</span>
                    <?php endfor; ?>
                </div>
                <input type="hidden" name="rating" id="ratingInput" value="">
            </div>

            <div class="form-group">
                <label for="reviewName">Aapka Naam</label>
                <input type="text" id="reviewName" name="name" maxlength="60" required>
            </div>

            <div class="form-group">
                <label for="reviewComment">Comment</label>
                <textarea id="reviewComment" name="comment" maxlength="1000" required></textarea>
            </div>

            <button type="submit" class="btn">Submit Review</button>
            <div class="review-msg" id="reviewMsg" role="status" aria-live="polite"></div>
        </form>
    </div>
</section>

<script>
(function () {
    var form = document.getElementById('reviewForm');
    if (!form) return;
    var starPicker = document.getElementById('starPicker');
    var ratingInput = document.getElementById('ratingInput');
    var msgEl = document.getElementById('reviewMsg');
    var list = document.getElementById('reviewList');

    function paintStars(value) {
        starPicker.querySelectorAll('.star-pick').forEach(function (s) {
            s.classList.toggle('active', parseInt(s.dataset.value, 10) <= value);
        });
    }

    starPicker.addEventListener('click', function (e) {
        var star = e.target.closest('.star-pick');
        if (!star) return;
        var value = star.dataset.value;
        ratingInput.value = value;
        paintStars(parseInt(value, 10));
    });
    starPicker.addEventListener('keydown', function (e) {
        var star = e.target.closest('.star-pick');
        if (!star || (e.key !== 'Enter' && e.key !== ' ')) return;
        e.preventDefault();
        var value = star.dataset.value;
        ratingInput.value = value;
        paintStars(parseInt(value, 10));
    });

    function starsHtml(rating) {
        var html = '';
        for (var i = 1; i <= 5; i++) {
            html += '<span class="star' + (i <= rating ? ' filled' : '') + '">&#9733;</span>';
        }
        return html;
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        msgEl.textContent = '';
        msgEl.className = 'review-msg';

        if (!ratingInput.value) {
            msgEl.textContent = 'Please ek star rating select karein.';
            msgEl.classList.add('error');
            return;
        }

        var submitBtn = form.querySelector('button[type="submit"]');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Submitting...';

        fetch('<?php echo SITE_URL; ?>submit-review.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams(new FormData(form)).toString()
        })
        .then(function (res) { return res.json(); })
        .then(function (data) {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Submit Review';
            if (!data.success) {
                msgEl.textContent = data.error || 'Kuch galat ho gaya.';
                msgEl.classList.add('error');
                return;
            }
            if (data.review) {
                var card = document.createElement('div');
                card.className = 'review-card';
                var head = document.createElement('div');
                head.className = 'review-card-head';
                var nameEl = document.createElement('span');
                nameEl.className = 'review-name';
                nameEl.textContent = data.review.name;
                var starsEl = document.createElement('span');
                starsEl.className = 'star-display';
                starsEl.innerHTML = starsHtml(data.review.rating);
                head.appendChild(nameEl);
                head.appendChild(starsEl);
                var commentEl = document.createElement('p');
                commentEl.className = 'review-comment';
                commentEl.textContent = data.review.comment;
                var dateEl = document.createElement('span');
                dateEl.className = 'review-date';
                dateEl.textContent = data.review.date;
                card.appendChild(head);
                card.appendChild(commentEl);
                card.appendChild(dateEl);
                list.insertBefore(card, list.firstChild);

                var emptyMsg = document.querySelector('.reviews-empty');
                if (emptyMsg) emptyMsg.remove();
            }
            msgEl.textContent = 'Dhanyawad! Aapka review add ho gaya.';
            msgEl.classList.add('success');
            form.reset();
            ratingInput.value = '';
            paintStars(0);
        })
        .catch(function () {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Submit Review';
            msgEl.textContent = 'Network error. Dobara try karein.';
            msgEl.classList.add('error');
        });
    });
})();
</script>
