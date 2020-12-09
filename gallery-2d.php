<?php /* Template Name: Gallery 2D */ ?>

<?php get_header(); ?>
<body class="gallery-2d" style="background-image: url('<?php echo get_template_directory_uri() . "/img/bg.svg"; ?>')">
	<header>
		<div>
			<p onclick="window.history.back()" class="button back" id="back"><span class="left">→</span> back</p>
		</div>
		<div>
			<h1 class="title" id="title"><?php echo get_the_title(); ?></h1>
		</div>
		<div class="title main">
	    	<h1>SAIC On View</h1>
	    </div>
	</header>
<?php get_footer(); ?>
