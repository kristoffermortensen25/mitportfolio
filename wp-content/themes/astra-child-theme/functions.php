<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'astra-style' for the Astra theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . 'https://kristoffermortensen.dk/wp-content/themes/astra/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}