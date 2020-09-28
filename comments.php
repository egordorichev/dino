<?php 
function format_comment($comment, $args, $depth) {  
	$time = current_time('timestamp', 1);
	?>
		<div class="blog-post-comment">
			<div class="comment-icon">
				<?php
					echo get_avatar(get_comment_author_email(), 32);
				?>
			</div>
			<div class="comment-meat">
				<div class="comment-header">
					<span class="comment-username">
						<?php echo get_comment_author(); ?>
					</span>
					<span class="comment-date">
					<?php printf( _x( '%s ago', '%s = human-readable time difference', 'your-text-domain' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?>

					</span>
				</div>
				<div class="comment-content">
					<?php echo get_comment_text(); ?>
				</div>				
				<?php
					comment_reply_link(array(
						'add_below'  => 'comment',
						'respond_id' => 'respond',
						'reply_text' => __('Reply'),
						'login_text' => __('Log in to Reply'),
						'depth'      => 1,
						'before'     => '',
						'after'      => '',
						'max_depth'  => get_option('thread_comments_depth')
						), get_comment_ID(), get_the_ID()); 
				?>
			</div>
			<div id="comment-<?php comment_ID(); ?>"></div>
	<?php
} 

comment_form(array(
	'title_reply' => comment_form_title('<h3 id="reply-title">Join the discussion!</h3>', '<h3 id="reply-title">Join the discussion!</h3>'), 
	'comment_notes_before' => '',
	'label_submit' => __('Comment')
));

if (have_comments()) {
?>
	<div class="blog-post-comments">
		<?php
			wp_list_comments(array(
				'style' => 'div',
				'short_ping' => true,
				'callback' => 'format_comment'
			));
		?>
	</div>
<?php
}
?>

<script>
var observe;
if (window.attachEvent) {
	observe = function (element, event, handler) {
		element.attachEvent('on'+event, handler);
	};
} else {
	observe = function (element, event, handler) {
		element.addEventListener(event, handler, false);
	};
}

var text = document.getElementById('comment');

function resize () {
	text.style.height = 'auto';
	text.style.height = text.scrollHeight + 'px';
}

function delayedResize() {
	window.setTimeout(resize, 0);
}

observe(text, 'change', resize);
observe(text, 'cut', delayedResize);
observe(text, 'paste', delayedResize);
observe(text, 'drop', delayedResize);
observe(text, 'keydown', delayedResize);

resize();

function applyToAllReplyLinks(c) {
	Array.prototype.forEach.call(document.getElementsByClassName('comment-reply-link'), c)
}

applyToAllReplyLinks((c) => {
	c.addEventListener('click', () => {
		c.style.display = 'none'
	})
})

document.getElementById('cancel-comment-reply-link').addEventListener('click', () => {
	applyToAllReplyLinks((c) => {
		c.style.display = 'block'
	})
})
</script>