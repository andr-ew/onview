<?php /* Template Name: Gallery 3D */ ?>

<?php get_header(); ?>
<body class="gallery-3d" data-url="<?php echo get_template_directory_uri(); ?>">
	<div id="container"></div>
<!--		<div id="blocker"></div>-->
	<header>
		<div>
			<p class="button back" id="back">info</p>
		</div>
		<div>
			<h1 class="title" id="title"><?php echo get_the_title(); ?></h1>
		</div>
		<div>
			<!-- <img class="logos" src="<?php echo get_template_directory_uri(); ?>"> -->
		</div>
		<div>
			 <p class="button artist" id="artist-info">about</p>
		</div>
	</header>
        <div class="overlay" id="overlay">
			<div>
                <h1><?php echo get_the_title(); ?></h1>
                <!-- <img class="logos" src="<?php echo get_template_directory_uri(); ?>\"> -->
                <br>
                <img id="gif" src="<?php echo get_template_directory_uri(); ?>//img/acs_web_transparent.gif">
                <p id="instructions">Move your phone and tap the screen to explore the gallery</p>
				<button class="hidden" id="startButton">ENTER GALLERY</button>
			</div>
		</div>
        <div class="arrows">
            <div id="arrow-left">→</div>
            <div id="arrow-right">→</div>
        </div>
        <div class="work-title">
            <p></p>
        </div>
		<section id="gallery-data" class="gallery-data">

<?php

$subpages = get_posts(array(
	'post_type' => 'page',
	'post_parent'=> $post->ID
));

$size = 0;

function media($w, $class) {
	global $size;

	$type = $w['type'];
	$title = $w['title'];

	if($type == 'YouTube') {
	?>
	<article class="<?php echo $class ?>" data-link="<?php echo $w['link']; ?>" data-type="<?php echo $type; ?>" data-title="<?php echo $title; ?>"></article>
	<?php
	} else {
	?>
	<article class="<?php echo $class ?>" data-file="<?php echo $w['image']; ?>" data-type="<?php echo $type; ?>" data-title="<?php echo $title; ?>"></article>
	<?php
	}

	if($type == 'Image') {
		$size++;
	}
}

function room($p, $class) {
	?>
	<article class="room <?php echo $class; ?>" data-name="<?php echo get_the_title($p->ID) ?>" data-ID="<?php echo $p->ID ?>">
		<?php

		$artworks = get_field('artwork', $p);

		if($artworks) {
			foreach($artworks as $w) {
				if($w['cover'] == true) {
					media($w, 'cover');
					break;
				}
			}
			?>
				<section class="works">
					<?php
					foreach($artworks as $w) {
						media($w, 'work');
					}
					?>
				</section>
			<?php
		}
		?>
	</article>
	<?php
}

if($subpages) {
?>
	<section class="rooms multiple">
<?php
	foreach($subpages as $p) {
		room($p, '');
	}
	?>
	</section>
	<?php
} else {
	room($post, 'single');
}
?>
		</section>
		<section class="meta" data-size="<?php echo $size; ?>"></section>
		<section id="info" class="info">
			<article class="main" id="info-main">
				<?php the_field('info'); ?>
			</article>
			<?php
			if($subpages) {
				foreach($subpages as $p) {
					?>
						<article class="main" id="info-<?php echo $p->ID ?>">
							<?php the_field('info', $p->ID); ?>
						</article>
					<?php
				}
			}
			?>
			<footer>
                <p>Copyright SAIC Photo <?php echo date("Y"); ?></p>
                <p>site by acs <a href="http://andrewcs.info/" target="_blank">andrewcs.info</a></p>
            </footer>
		</section>
<?php get_footer(); ?>
