<div class="blog-post">
	<div class="blog-post-heading">
		<div class="text-extra blog-post-meta"><?php the_date("l, j F Y"); ?></a></div>
		<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<?php
			if (has_tag()) {
				echo get_the_tag_list('<div class="blog-post-tags"><span class="blog-post-tag">','</span><span class="blog-post-tag">','</span></div>');
			}
		?>
	</div>

	<div class="blog-post-content">
		<?php the_content("Continue reading..."); ?>
	</div>
</div>