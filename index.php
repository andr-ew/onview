<?php get_header(); ?>
<body class="home" style="background-image: url('<?php echo get_template_directory_uri() . "/img/bg.svg"; ?>')">

<header>
    <h1></h1>
    <h1></h1>
    <h1 class="title main">SAIC On View</h1>
</header>
<main>
<?php

$menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['main-menu']);

if($menu_items) {
    ?>
    <ul class="nav main">
    <?php
    foreach($menu_items as $item) {
        if($item->menu_item_parent == 0) { ?>
        <li><a href="<?php echo $item->url ?>"><?php echo $item->title ?></a></li>
        <?php
        }
    }
    ?>
    </ul>
    <?php
}
?>
</main>
<?php get_footer(); ?>
