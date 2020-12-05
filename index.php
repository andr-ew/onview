<?php get_header(); ?>
<body class="home" style="background-image: url('<?php echo get_template_directory_uri() . "/img/bg.svg"; ?>')">
<?php

$menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['main-menu']);

if($menu_items) {
    ?>
    <ul>
    <?php
    foreach($menu_items as $item) {
        if($item->menu_item_parent == 0) { ?>
        <li><a href="<?php echo get_page_link(get_page_by_path($item->title)->ID); ?>"><?php echo $item->title ?></a></li>
        <?php
        }
    }
    ?>
    </ul>
    <?php
}

?>
<?php get_footer(); ?>
