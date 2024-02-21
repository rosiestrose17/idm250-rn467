<?php get_header(); ?>
<style>
  h1 {
    /* Your CSS styles for the h1 element */
    color: #333;
    font-size: 36px;
    font-weight: bold;
    /* Add more styles as needed */
  }
</style>
<div class="body-container">
<h1 class="">
  <?php echo get_the_title(); ?>
</h1>
<div class="content">
  <?php
    echo get_the_content();
  ?>
</div>
<p>This is a front-page.php template</p>
</div>
<?php get_footer(); ?>