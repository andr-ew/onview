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

}

function post_remove ()      //creating functions post_remove for removing menu item
{
   remove_menu_page('edit.php');
   remove_menu_page('edit-comments.php');
//   remove_menu_page( 'themes.php' );
//   remove_menu_page( 'index.php' );
}

add_action('admin_menu', 'post_remove');   //adding action for triggering function call

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

function enque() {
    wp_enqueue_style( 'pl-eot', get_template_directory_uri() . '/fonts/Pilowlava-Regular.eot' );
    wp_enqueue_style( 'pl-woff', get_template_directory_uri() . '/fonts/Pilowlava-Regular.woff' );
    wp_enqueue_style( 'pl-woff2', get_template_directory_uri() . '/fonts/Pilowlava-Regular.woff2' );

    wp_enqueue_style( 'cg-eot', get_template_directory_uri() . '/fonts/Compagnon-Italic.eot' );
    wp_enqueue_style( 'cg-woff', get_template_directory_uri() . '/fonts/Compagnon-Italic.woff' );
    wp_enqueue_style( 'cg-woff2', get_template_directory_uri() . '/fonts/Compagnon-Italic.woff2' );

    wp_enqueue_style( 'style', get_stylesheet_uri() );

    if ( basename(get_page_template()) == 'gallery-3d.php') {
        wp_enqueue_style( 'gallery-3d', get_template_directory_uri() . '/gallery-3d.css' );
    } else if ( basename(get_page_template()) == 'gallery-2d.php') {
        wp_enqueue_style( 'gallery-3d', get_template_directory_uri() . '/gallery-2d.css' );
    }

    wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/jquery-3.5.1.js', false, '3.5.1', true);
	wp_enqueue_script('jquery');

    wp_enqueue_script( 'tween', get_template_directory_uri() . '/tween.umd.js', array ( 'jquery' ), '0.0.0', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array( 'tween', 'jquery' ), '0.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'enque' );

function replace_rel($html, $type) {
    return str_replace("rel='stylesheet'", "rel='preload' as='font'  type='font/" . $type . "' crossorigin='ananymous'", $html);
}

function slt_filter($html, $handle) {
    if(strpos($handle, 'woff2') !== false) {
        return replace_rel($html, 'woff2');
    } else if(strpos($handle, 'woff') !== false) {
        return replace_rel($html, 'woff');
    } else if(strpos($handle, 'eot') !== false) {
        return replace_rel($html, 'eot');
    } else {
        return $html;
    }
}

add_filter('style_loader_tag', 'slt_filter', 10, 2);

?>
