<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <meta content="<?php echo get_bloginfo( 'name' ); ?>" property="og:title">
        <meta content="width=device-width, initial-scale=1" name="viewport">
		<!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
		<!-- <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@0;1&family=Source+Code+Pro&family=Space+Mono:ital@0;1&display=swap" rel="stylesheet"> -->
		<style type="text/css">
			@import url('https://fonts.googleapis.com/css2?family=Space+Mono:ital@0;1&display=swap');

			@font-face {
				font-family: 'Pilowlava';
				src: url("<?php echo get_template_directory_uri() ?>/fonts/Pilowlava-Regular.woff2") format("woff2"),
					 url("<?php echo get_template_directory_uri() ?>/fonts/Pilowlava-Regular.eot") format("eot"),
					 url("<?php echo get_template_directory_uri() ?>/fonts/Pilowlava-Regular.woff") format("woff");
			}

			@font-face {
				font-family: 'Compagnon';
				src: url("<?php echo get_template_directory_uri() ?>/fonts/Compagnon-Light.woff2") format("woff2"),
					 url("<?php echo get_template_directory_uri() ?>/fonts/Compagnon-Light.eot") format("eot"),
					 url("<?php echo get_template_directory_uri() ?>/fonts/Compagnon-Light.woff") format("woff");
					font-weight: normal;
			}

			@font-face {
				font-family: 'Compagnon';
				src: url("<?php echo get_template_directory_uri() ?>/fonts/Compagnon-Italic.woff2") format("woff2"),
					 url("<?php echo get_template_directory_uri() ?>/fonts/Compagnon-Italic.eot") format("eot"),
					 url("<?php echo get_template_directory_uri() ?>/fonts/Compagnon-Italic.woff") format("woff");
				font-style: italic;
				font-weight: normal;
			}

			@font-face {
				font-family: 'Compagnon';
				src: url("<?php echo get_template_directory_uri() ?>/fonts/Compagnon-Bold.woff2") format("woff2"),
					 url("<?php echo get_template_directory_uri() ?>/fonts/Compagnon-Bold.eot") format("eot"),
					 url("<?php echo get_template_directory_uri() ?>/fonts/Compagnon-Bold.woff") format("woff");
				font-weight: bold;
			}
		</style>
        <?php wp_head(); ?>
	</head>
