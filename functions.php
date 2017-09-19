<?php
function divi_child_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'divi_child_theme_enqueue_styles' );


function divi_child_theme_enqueue_scripts() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/js/scripts.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'divi_child_theme_enqueue_scripts' );
?>