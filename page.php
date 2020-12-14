<?php get_header(); ?>
<body class="page" style="background-image: url('<?php echo get_template_directory_uri() . "/img/bg.svg"; ?>')">
	<header>
		<div>
			<a href="<?php echo get_home_url(); ?>" class="button back" id="back"><img class="arrow left" src="<?php echo get_template_directory_uri() . "/img/arrow-left.svg"  ?>" >HOME</a>
		</div>
		<div>
		</div>
		<div class="title main">
	    	<h1>SAIC On View</h1>
	    </div>
	</header>
    <main>
        <section class="info"><?php the_field('info'); ?>
            <footer>
                <p>Copyright SAIC Photo <?php echo date("Y"); ?></p>
                <p>site by acs <a href="http://andrewcs.info/" target="_blank">andrewcs.info</a></p>
            </footer>
        </section>
    </main>
<?php get_footer(); ?>
