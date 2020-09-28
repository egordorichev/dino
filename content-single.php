<div class="blog-post blog-post-single">
	<div class="blog-post-heading">
		<div class="text-extra blog-post-meta"><?php the_date("l, j F Y"); ?></a></div>
		<h2 class="blog-post-title"><?php the_title(); ?></h2>

		<?php
			if (has_tag()) {
				echo get_the_tag_list('<div class="blog-post-tags"><span class="blog-post-tag">','</span>, <span class="blog-post-tag">','</span></div>');
			}
		?>
	</div>

	<div class="blog-post-content">
<?php 
	the_content();

	$orig_post = $post;
	global $post;
	$tags = wp_get_post_tags($post->ID);

	if ($tags) {
		$tag_ids = array();
		foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		
		$args = array(
		'tag__in' => $tag_ids,
		'post__not_in' => array($post->ID),
		'posts_per_page' => 5,
		'ignore_sticky_posts' => 1
		);

		$my_query = new wp_query($args);

		/*if ($my_query->have_posts()) {
			echo '<div class="blog-post-related"><h4>Related Posts</h4><ul>';

			while ($my_query->have_posts()) {
				$my_query->the_post(); 
				?>
					<li>
						<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</li>
					<?php 
			}

			echo '</ul></div>';
		}*/
	}
	
	$post = $orig_post;
	wp_reset_query(); 

	if (comments_open()){
  	comments_template();
	}
?>
	</div>
</div>