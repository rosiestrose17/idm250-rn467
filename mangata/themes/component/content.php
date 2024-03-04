<?php if (have_posts()) : ?>
    <div class="content">
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
<?php else : ?>
    <p>No posts found.</p>
<?php endif; ?>
