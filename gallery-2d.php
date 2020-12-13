<?php /* Template Name: Gallery 2D */

$overview = true;
$parent = $post;
$location = $post->ID;

if($post->post_parent) {
    $parent = get_post($post->post_parent);
    $overview = false;
}

$children = get_posts(array(
    'post_type' => 'page',
    'post_parent'=> $parent->ID
));

?>

<?php get_header(); ?>
<body class="gallery-2d" style="background-image: url('<?php echo get_template_directory_uri() . "/img/bg.svg"; ?>')">
	<header>
		<div>
			<a href="<?php echo get_home_url(); ?>" class="button back" id="back"><span class="left">→</span> HOME</a>
		</div>
		<div>
			<h1 class="title" id="title"><?php echo get_the_title($parent); ?></h1>
		</div>
		<div class="title main">
	    	<h1>SAIC On View</h1>
	    </div>
	</header>
    <?php
        if($children) {
            ?>
            <nav class="pages">
                <ul>
                    <li><a class="<?php if($parent->ID == $location) { echo 'active'; } ?>" href="<?php echo get_page_link($parent); ?>">overview</a></li>
                </ul>
                <ul>
                    <?php
                    foreach($children as $p) {
                        ?>
                        <li><a class="<?php if($p->ID == $location) { echo 'active'; } ?>" href="<?php echo get_page_link($p); ?>"><?php echo get_the_title($p->ID); ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </nav>
            <?php
        } else {}
    ?>
    <main>
        <section class="artworks">
            <?php
                function artwork($w, $page = false) {
                    global $post;
                    global $parent;

                    $type = $w['type'];
                	$title = $w['title'];

                    if($page) {
                        ?>
                        <a class="artwork thumbnail" href="<?php echo get_page_link($page); ?>"><img src="<?php echo $w['image']['sizes']['thumbnail']; ?>"></a>
                        <?php
                    } else {
                        $slug = strtolower(preg_replace("/(?![.=$'€%-])\p{P}/u", "", preg_replace('/\s+/', '', $title)));

                        //thumnails here plz, not full-size
                        ?>
                        <div id="<?php echo $slug ?>" class="artwork overlay" style="background-image: url('<?php echo get_template_directory_uri() . "/img/bg.svg"; ?>')">
                            <!-- <a href="<?php // echo get_page_link($post); ?>" class="close">x</a> -->
                            <header>
                        		<div>
                        			<a  onclick="window.history.back();" class="button back" id="back"><span class="left">→</span> back</a>
                        		</div>
                        		<div>
                        			<h1 class="title" id="title"><?php echo get_the_title($parent); ?></h1>
                        		</div>
                        		<div class="title main">
                        	    	<h1>SAIC On View</h1>
                        	    </div>
                        	</header>
                            <!-- <a href="<?php// echo get_page_link($post); ?>" class="button back" id="back"><span class="left">→</span> back</a> -->
                            <div class="fullsize" style="background-image: url('<?php echo $w['image']['url']; ?>');">
                            </div>
                        </div>
                        <a class="artwork thumbnail" href="<?php echo get_page_link($post) . '#' . $slug ?>"><img src="<?php echo $w['image']['sizes']['thumbnail']; ?>"></a>
                        <?php
                    }
                }

                if($overview) {
                    foreach($children as $p) {
                        $artworks = get_field('artwork', $p);

                        foreach($artworks as $w) {
            				if($w['cover'] == true) {
            					artwork($w, $p);
            					break;
            				}
            			}
                    }
                } else {
                    $artworks = get_field('artwork', $post);

                    foreach($artworks as $w) {
                        artwork($w);
                    }
                }
            ?>
        </section>
    </main>
<?php get_footer(); ?>
