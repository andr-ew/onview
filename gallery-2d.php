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
        <?php if(true) { //if($overview) { ?>
            <div>
    			<a href="<?php echo get_home_url(); ?>" class="button back" id="back">
                    <img class="arrow left" src="<?php echo get_template_directory_uri() . "/img/arrow-left.svg"  ?>" ><p>HOME</p>
                </a>
    		</div>
        <?php } else { ?>
            <div>
    			<a href="<?php echo get_home_url(); ?>" class="button back" id="back"><img class="arrow left" src="<?php echo get_template_directory_uri() . "/img/arrow-left.svg"  ?>" ><p>HOME</p></a>
    		</div>
        <?php } ?>
		</div>
		<div>
			<h1 class="title" id="title"><?php echo get_the_title($parent); ?></h1>
		</div>
		<div class="title main">
	    	<h1>SAIC On View</h1>
	    </div>
	</header>
    <main>
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
        <section class="artworks">
            <?php
                function artwork($w, $page = false) {
                    global $post;
                    global $parent;

                    $type = $w['type'];
                	$title = $w['title'];

                    if($page) {
                        ?>
                        <a class="artwork thumbnail page" href="<?php echo get_page_link($page); ?>">
                            <p class="title"><?php echo get_the_title($page); ?><img class="arrow right" src="<?php echo get_template_directory_uri() . "/img/arrow-right-white.svg"  ?>" ></p>
                            <img class="thumbnail" src="<?php echo $w['image']['sizes']['thumbnail']; ?>"></a>
                        <?php
                    } else {
                        $slug = strtolower(preg_replace("/(?![.=$'€%-])\p{P}/u", "", preg_replace('/\s+/', '', $title)));

                        //thumnails here plz, not full-size
                        ?>
                        <div id="<?php echo $slug ?>" class="artwork overlay" style="background-image: url('<?php echo get_template_directory_uri() . "/img/bg.svg"; ?>')">
                            <!-- <a href="<?php // echo get_page_link($post); ?>" class="close">x</a> -->
                            <header>
                        		<div>
                        			<a  onclick="window.history.back();" class="button back" id="back">
                                        <img class="arrow left" src="<?php echo get_template_directory_uri() . "/img/arrow-left.svg"  ?>" ><p>BACK</p>
                                    </a>
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
                            <p class="title"><?php echo $title; ?></p>
                        </div>
                        <a class="artwork thumbnail" href="<?php echo get_page_link($post) . '#' . $slug ?>"><img class="thumbnail" src="<?php echo $w['image']['sizes']['thumbnail']; ?>"></a>
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
        <section class="info">
            <?php the_field('info'); ?>
            <footer>
                <p>Copyright SAIC Photo <?php echo date("Y"); ?></p>
                <p>site by acs <a href="http://andrewcs.info/" target="_blank">andrewcs.info</a></p>
            </footer>
        </section>

    </main>
<?php get_footer(); ?>
