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

add_filter('get_search_form', 'html5_search_form');

function gb_comment_form_tweaks($fields) {
	$fields['author'] = '<input id="author" name="author" value="" placeholder="Name*" size="30" maxlength="245" required="required" type="text">';
	$fields['email'] = '<input id="email" name="email" type="email" value="" placeholder="Email*" size="30" maxlength="100" aria-describedby="email-notes" required="required">';	

	unset($fields['comment']);

	$fields['comment'] = '<textarea id="comment" name="comment" cols="45" rows="1" maxlength="65525" placeholder="Share your thoughts" required="required"></textarea>';

	unset($fields['url']);
	return $fields;
}

add_filter('comment_form_fields', 'gb_comment_form_tweaks');

function mytheme_enqueue_comment_reply() {
	wp_enqueue_script('comment-reply'); 
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_comment_reply');

function my_remove_comment_reply_link($link) {
	return '';
}

add_filter('cancel_comment_reply_link', 'ndic_remove_comment_reply_link', 10);

function my_after_comment_form($post_id) {
	remove_filter('cancel_comment_reply_link', 'ndic_remove_comment_reply_link', 10);
	cancel_comment_reply_link('Cancel');
}

add_action('comment_form', 'my_after_comment_form', 99);
?>