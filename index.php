<?php 
	get_header();

	if (have_posts()) { 
		while (have_posts()) {
			the_post();
			get_template_part('content', get_post_format());
		}
	} else {
		echo 'Found nothing';
	}

	if ($l = get_next_posts_link('<div class="older-posts"><span class="arrow">&#8592;</span> Older</div>')) {
		echo $l;
	}
	
	$r = get_previous_posts_link('<div class="newer-posts">Newer <span class="arrow">&#8594;</span></div>');

	if ($l || $r) {
		echo '...';
	}

	if ($r) {
		echo $r;
	}

	get_footer();
?>