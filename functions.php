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

function enque() {
    // wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Libre+Baskerville&family=Source+Code+Pro:wght@300&family=Space+Mono:ital@0;1&display=swap');
    // wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@0;1&family=Source+Code+Pro&family=Space+Mono:ital@0;1&display=swap');
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    //wp_enqueue_script( 'jq', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');

    wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, '1.3.2', true);
	wp_enqueue_script('jquery');

    wp_enqueue_script( 'tween', get_template_directory_uri() . '/tween.umd.js', array ( 'jquery' ), '0.0.0', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array( 'tween', 'jquery' ), '0.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'enque' );
//add_action('wp_print_scripts', 'add_theme_js');

?>
