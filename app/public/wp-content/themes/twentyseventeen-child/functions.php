<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'parent-style'; //This is 'twentyseventeen-style' for the Twentyseventeen Theme

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_queue_style ( 'child-style'
        get_stylesheet_directory_uri() . '/style.css', 
        array( $parent_style ),
        wp_get_theme()->get('Version')
);
}