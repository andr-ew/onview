<?php get_header(); ?>
<body class="home" style="background-image: url('<?php echo get_template_directory_uri() . "/img/bg.svg"; ?>')">

<header>
    <div>
    <h1></h1>
    </div>
    <div>
    <h1></h1>
    </div>
    <div class="title main">
    <h1>SAIC On View</h1>
    </div>
</header>
<main>
<?php

$menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['main-menu']);

if($menu_items) {
    ?>
    <nav>
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
    </nav>
    <?php
}
?>
</main>
<?php get_footer(); ?>
