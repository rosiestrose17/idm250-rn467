<?php
/*
Template Name: Custom Template
*/
get_header(); ?>
  <div class="content">
      <h1 class="wp-block-heading">
  <?php echo get_the_title(); ?>
</h1>
    <?php
    echo get_the_content();
    ?>
      </div>
<?php get_footer(); ?>
