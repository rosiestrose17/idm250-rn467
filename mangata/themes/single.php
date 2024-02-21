<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <div class="content">
                <?php the_content(); ?>
            </div>
            <p>Date: <?php the_date(); ?></p>
            <p>Categories: <?php the_category(', '); ?></p>
            <p>Tags: <?php the_tags('', ', '); ?></p>
            <?php if (has_post_thumbnail()) : ?>
                <div class="featured-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <p>No content found</p>
<?php endif; ?>

<?php get_footer(); ?>
