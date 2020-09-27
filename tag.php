<?php 
	get_header();

	echo '<h2 class="search-results">Posts tagged ';
	echo get_queried_object()->name;

	echo '</h2>';

	if (have_posts()) {
		echo '<ul>';
		
		while (have_posts()) {
			the_post();

			echo '<li><a href="';
			echo get_permalink();
			echo '">';
			the_title();
			echo '</a></li>';
		}

		echo '</ul>';
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