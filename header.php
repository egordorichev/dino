<?php $_SERVER['HTTPS'] = 1; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/monokai.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
	<script charset="UTF-8"	src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/languages/csharp.min.js"></script>
	<?php 
		wp_head(); 
	?>
</head>
<body>
	<style>
		* {
			<?php 
				$c = (date('z') / 366 * 360 - 260) % 360;	
			?>
			--highlight-color: hsl(<?php echo $c; ?> 49% 55% / 1);
			--highlight-color-light: hsl(<?php echo $c; ?> 49% 65% / 1);
		}
	</style>
	<div id="content">
		<div id="header">
			<a href="<?php echo get_site_url(); ?>"><div id="logo" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/logo.png);"></div></a>
			<h1 id="header-title"><a href="<?php echo get_site_url(); ?>">Rexcellent Games</a></h1>
			<h3 id="header-subtitle">
				<?php 
					$titles = Array(
						"Making games",
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
						"Eügor",
						"Do not referesh the page",
						"Please, do not the cat",
						"<a href='https://store.steampowered.com/app/851150/Burning_Knight/'>Burning Knight</a>",
						"Test successful",
						"undefined",
						"Tell your friends!",
						"We've been preparing for this"
					);

					echo $titles[array_rand($titles)];
				?>
			</h3>
		</div>

		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>

		<div id="posts">