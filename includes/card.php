<article class="card">
    <a href="<?php echo story_url($story['slug']); ?>" class="card-img">
        <img src="<?php echo e($story['image']); ?>" alt="<?php echo e($story['title']); ?>" loading="lazy">
        <span class="card-age"><?php echo e($story['ageLabel']); ?></span>
    </a>
    <div class="card-body">
        <span class="card-cat"><?php echo e($story['category']); ?></span>
        <h3><a href="<?php echo story_url($story['slug']); ?>"><?php echo e($story['title']); ?></a></h3>
        <p class="card-excerpt"><?php echo e($story['excerpt']); ?></p>
        <div class="card-foot">
            <span><?php echo format_date($story['date']); ?></span>
            <span><?php echo $story['readTime']; ?> min read</span>
        </div>
    </div>
</article>
