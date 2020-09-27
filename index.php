<?php get_header(); ?>

<?php
	if (have_posts()) : while (have_posts()) : the_post();
		get_template_part('content', get_post_format());
	endwhile; endif;
?>

<?php next_posts_link( 'Older posts' ); ?>
<?php previous_posts_link( 'Newer posts' ); ?>

<?php get_footer(); ?>