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

function html5_search_form($form) { 
	$form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
	<input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Search" />
	</form></section>';
	return $form;
}

add_filter( 'get_search_form', 'html5_search_form' );

?>