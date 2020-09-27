<div class="blog-post blog-post-single">
	<div class="text-extra blog-post-meta"><?php the_date("l, j F Y"); ?></a></div>
	<h2 class="blog-post-title"><?php the_title(); ?></h2>

	<?php
		if (get_the_tag_list()) {
			echo get_the_tag_list('<div class="blog-post-tags"><span class="blog-post-tag">','</span><span class="blog-post-tag">','</span></div>');
		}
	?>

	<div class="blog-post-content">
		<?php the_content(); ?>
	</div>
</div>