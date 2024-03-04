<?php
/**
 * Theme initialization
 */
require get_template_directory() . '/includes/setup.php';
/**
 * Register custom post types
 */
require get_template_directory() . '/includes/post-types.php';
/**
 * Register custom taxonomies
 */
require get_template_directory() . '/includes/taxonomies.php';
/**
 * Advance Custom Fields (ACF) configuration
 */
require get_template_directory() . '/includes/acf.php';
/**
 * Custom Helper functions
 */
require get_template_directory() . '/includes/helper.php';

function theme_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => esc_html__( 'Primary Menu', 'theme-text-domain' ),
        )
    );
}
add_action( 'after_setup_theme', 'theme_register_menus' );
function custom_wpbutton_shortcode( $atts, $content = null ) {
    // Extract shortcode attributes
    $atts = shortcode_atts(
        array(
            'link' => '#',
            'color' => '#000',
            'text' => 'Button',
        ),
        $atts,
        'wpbutton'
    );

    // Build the button HTML
    $button_html = '<a class="wpbutton" href="' . esc_url( $atts['link'] ) . '" style="background-color: ' . esc_attr( $atts['color'] ) . ';">' . esc_html( $atts['text'] ) . '</a>';

    return $button_html;
}
add_shortcode( 'wpbutton', 'custom_wpbutton_shortcode' );
