<?php

function add_type_attribute($tag, $handle, $src) {
    // if not your script, do nothing and return original $tag
    if ( 'main' !== $handle ) {
        return $tag;
    }
    // change the script tag by adding type="module" and return it.
    $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
    return $tag;
}

add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);

function add_theme_css() { //enqueing css
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Libre+Baskerville&family=Source+Code+Pro:wght@300&family=Space+Mono:ital@0;1&display=swap');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

function add_theme_js() { //enqueing js
     wp_enqueue_script( 'jq', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
     wp_enqueue_script( 'tween', get_template_directory_uri() . '/tween.umd.js', array ( 'jq' ), '0.0.0', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array ( 'tween' ), '0.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_css' );
add_action('wp_print_scripts', 'add_theme_js');

?>
