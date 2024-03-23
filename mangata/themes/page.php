<?php get_header(); ?>
<div class="body-container">
       <!-- Video embed -->
        <div class="video-container">
            <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1680770725755304%2F&show_text=false&width=317&t=0" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
    <h1 class="wp-block-heading">
        <?php echo get_the_title(); ?>
    </h1>
    <div class="content">
       
<?php
    echo get_the_content();
?>
</div>
<?php get_footer(); ?>
