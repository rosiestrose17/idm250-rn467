<?php
/**
 * Theme initialization
 */
require get_template_directory() . '/includes/setup.php';
/**
 * Register custom post types
 */
require get_template_directory() . '/includes/post-types.php';
function theme_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => esc_html__( 'Primary Menu', 'theme-text-domain' ),
        )
    );
}
add_action( 'after_setup_theme', 'theme_register_menus' );

<?php

function my_theme_enqueue_scripts() {
    // Enqueue stylesheet
    wp_enqueue_style( 'my-theme-style', get_template_directory_uri() . '/dist/style/theme.css', array(), '1.0' );

    // Enqueue JavaScript file
    wp_enqueue_script( 'my-theme-script', get_template_directory_uri() . '/dist/scripts/main.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );
?>
