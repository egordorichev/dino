<?php

function new_excerpt_more($more) {
	global $post;
	return '<br/><div class="mr"><a class="moretag" href="'. get_permalink($post->ID) . '">Continue reading</a>...</div>';
}

add_filter('excerpt_more', 'new_excerpt_more');

function shapeSpace_include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

?>