
<?php
/*
Template Name: Single Blog Template
*/
get_header(); ?>
<style>
.content {
    width: 75%;
    margin: 0 auto;
}
</style>
 <div class="content">
<h1 class="wp-block-heading">
  <?php echo get_the_title(); ?>
</h1>
<?php
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
echo '<img class="single-blog-img" src="' . esc_url($featured_image_url) . '" alt="' . get_the_title() . '">';

echo '<p class="post-excerpt">' . get_the_excerpt() . '</p>';
?>

  <?php
    echo get_the_content();
  ?>
  <p class="link">This is a <a href="https://rosiestrose.com/idm250">link</a>.</p>
<p class="bold">This text is <strong>bold</strong>.</p>
<p class="italic">This text is italic.</p>
<p class="underline">This text is <u>underlined</u>.</p>
</div>
<?php get_footer(); ?>
