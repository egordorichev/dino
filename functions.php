<?php

function new_excerpt_more($more) {
	global $post;
	 return '<br/><div class="mr"><a class="moretag" href="'. get_permalink($post->ID) . '">Continue reading</a>...</div>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>