<?php

/**
 * Forums Loop - Single Forum
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<ul id="bbp-forum-<?php bbp_forum_id(); ?>" <?php bbp_forum_class(); ?>>
	<div class="padlr30">
		<li class="bbp-forum-info">

			<?php if ( bbp_is_user_home() && bbp_is_subscriptions() ) : ?>

				<span class="bbp-row-actions">

					<?php do_action( 'bbp_theme_before_forum_subscription_action' ); ?>

					<?php bbp_forum_subscription_link( array( 'before' => '', 'subscribe' => '+', 'unsubscribe' => '&times;' ) ); ?>

					<?php do_action( 'bbp_theme_after_forum_subscription_action' ); ?>

				</span>

			<?php endif; ?>

			<?php do_action( 'bbp_theme_before_forum_title' ); ?>
			<!-- <a class="bbp-forum-title" href="</?php bbp_forum_permalink(); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;</?php bbp_forum_title(); ?></a> -->
			<a class="bbp-forum-title" href="<?php bbp_forum_permalink(); ?>"><?php bbp_forum_title(); ?></a>

			<?php do_action( 'bbp_theme_after_forum_title' ); ?>

			<?php do_action( 'bbp_theme_before_forum_description' ); ?>

			<?php do_action( 'bbp_theme_after_forum_description' ); ?>

			<?php do_action( 'bbp_theme_before_forum_sub_forums' ); ?>

			<?php bbp_list_forums(); ?>

			<?php do_action( 'bbp_theme_after_forum_sub_forums' ); ?>

			<?php bbp_forum_row_actions(); ?>

		</li>

		<li class="bbp-forum-topic-count">
			<img src="<?php echo get_template_directory_uri(); ?>/img/pencil-icon.png" alt="" /> <?php bbp_forum_topic_count(); ?>
		</li>

		<li class="bbp-forum-reply-count">
			<img src="<?php echo get_template_directory_uri(); ?>/img/chat-icon.png" alt="" /> <?php bbp_show_lead_topic() ? bbp_forum_reply_count() : bbp_forum_post_count(); ?>
		</li>
	</div>

</ul><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->
