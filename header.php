<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangata - <?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <!-- Winter sale up to 70% -->
        <div class="winter-sale">
            <p>Winter sale, Up to 70%</p>
        </div>

        <!-- Navigation Menu -->
        <nav class="site-navigation">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Lookbook</a></li>
                <li class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
            </ul>
        </nav>
        <div class="icons">
            <a href="#"><i class="fa fa-search"></i></a>
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
            <a href="#"><i class="fa fa-heart"></i></a>
        </div>
    </header>
