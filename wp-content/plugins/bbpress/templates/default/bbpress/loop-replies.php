<?php

/**
 * Replies Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_replies_loop' ); ?>

<ul id="topic-<?php bbp_topic_id(); ?>-replies" class="forums bbp-replies">

	<li class="bbp-header">
		Story Created:
		<span><?php
			echo get_the_date('F d Y', $post->ID);
		?></span>
		&nbsp;&nbsp;
		Author: <span><?php echo get_the_author_meta('display_name'); ?></span>
	</li><!-- .bbp-header -->

	<li class="bbp-body">

		<?php if ( bbp_thread_replies() ) : ?>

			<?php bbp_list_replies(); ?>

		<?php else : ?>

			<?php while ( bbp_replies() ) : bbp_the_reply(); ?>

				<?php bbp_get_template_part( 'loop', 'single-reply' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</li><!-- .bbp-body -->

	<li class="bbp-footer">

		<!-- <div class="bbp-reply-author"></?php  _e( 'Author',  'bbpress' ); ?></div>

		<div class="bbp-reply-content">

			</?php if ( !bbp_show_lead_topic() ) : ?>

				</?php _e( 'Posts', 'bbpress' ); ?>

			</?php else : ?>

				</?php _e( 'Replies', 'bbpress' ); ?>

			</?php endif; ?>

		</div><!-- .bbp-reply-content -->

	</li><!-- .bbp-footer -->

</ul><!-- #topic-<?php bbp_topic_id(); ?>-replies -->

<?php do_action( 'bbp_template_after_replies_loop' ); ?>
