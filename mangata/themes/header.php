<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="sale-banner">Winter sale, Up to 70%, Shop Now >> </div>
        <div class="container">
            <div class="left-section">
                <nav class="menu-container">
                    <ul class="menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'container' => '',
                            'items_wrap' => '%3$s', // Remove <div> wrapper from menu
                            'fallback_cb' => false // Remove default fallback behavior
                        ));
                        ?>
                    </ul>
                </nav>
                <div class="hamburger-menu" onclick="toggleMenu()">☰</div> 
            </div>
            <div class="middle-section">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpeg" alt="Site Logo" />
                </a>
            </div>
            <div class="right-section">
         <form class="search-form" action="/action_page.php" style="max-width:300px;">
    <div class="search-container">
        <input type="text" placeholder="Search.." name="search2">
        <img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="Search">
    </div>
</form>

                <div class="icons">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart.svg" alt="Cart" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/like.svg" alt="Favorites" /></a>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
