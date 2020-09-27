<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<style>
		* {
			--highlight-color: hsl(<?php echo date('z') / 366 * 360; ?> 49% 65% / 1);
			--highlight-color-light: hsl(<?php echo date('z') / 366 * 360; ?> 49% 75% / 1);
		}
	</style>
	<div id="content">
		<div id="header">
			<a href="<?php echo get_site_url(); ?>"><div id="logo" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/logo.png);"></div></a>
			<h1 id="header-title"><a href="<?php echo get_site_url(); ?>">Rexcellent Games</a></h1>
			<h3 id="header-subtitle"><a target="_blank" href="https://www.random.org/">
				<?php 
					$titles = Array("Making games",
					"Math.random()",
					"Dev chronicles",
					"A blog",
					"Thanks.",
					"Letters from the past",
					"The future calls for something new",
					"Egor lurks here",
					"Code & co",
					"It takes what it takes",
					"@egordorichev",
					"Eügor");

					echo $titles[array_rand($titles)];
				?>
			</a></h3>
		</div>

		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>

		<div id="posts">