<?php get_header(); ?>
<body class="home">
<p>index</p>
<?php

$menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['main-menu']);

if($menu_items) {
    ?>
    <?php
    foreach($menu_items as $item) {
        if($item->menu_item_parent == 0) { ?>
        <a href="<?php echo get_page_link(get_page_by_path($item->title)->ID); ?>"><?php echo $item->title ?></a>
        <?php
        }
    }
    ?>
    <?php
}

?>
<?php get_footer(); ?>
