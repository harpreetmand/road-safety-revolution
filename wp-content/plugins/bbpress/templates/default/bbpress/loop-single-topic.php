<?php

/**
 * Topics Loop - Single
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<ul id="bbp-topic-<?php bbp_topic_id(); ?>" <?php bbp_topic_class(); ?>>

	<li class="bbp-topic-title">

		<a class="bbp-topic-permalink" href="<?php bbp_topic_permalink(); ?>"><?php bbp_topic_title(); ?></a>

		<?php do_action( 'bbp_theme_after_topic_title' ); ?>

		<p class="bbp-topic-meta">

			<?php do_action( 'bbp_theme_before_topic_started_by' ); ?>

			<span class="bbp-topic-started-by"><?php printf( __( 'By%1$s.', 'bbpress' ), bbp_get_topic_author_link( array( 'size' => '14' ) ) ); ?></span>

			<?php do_action( 'bbp_theme_before_topic_freshness_link' ); ?>

			<?php bbp_topic_freshness_link(); ?>
		</p>

		<?php do_action( 'bbp_theme_after_topic_meta' ); ?>

		<?php bbp_topic_row_actions(); ?>

	</li>
	<li class="count hidden-xs">
		<?php bbp_topic_reply_count(); ?> replies
		<?php do_action( 'bbp_theme_after_topic_started_by' ); ?>
	</li>
	<li class="author-details">
		<span class="bbp-topic-started-by"><?php printf( __( '%1$s', 'bbpress' ), bbp_get_topic_author_link( array( 'size' => '140' ) ) ); ?></span>
		<?php do_action( 'bbp_theme_before_topic_freshness_link' ); ?>
		<div class="author">
			<?php echo get_the_author_meta('display_name'); ?><br>
			<span><?php bbp_topic_freshness_link(); ?></span>
		</div>
	</li>
	<div class="cf">&nbsp;</div>
	<div class="col-xs-12 visible-xs nopadlr">
		<li class="count">
			<?php bbp_topic_reply_count(); ?> replies
			<?php do_action( 'bbp_theme_after_topic_started_by' ); ?>
		</li>
	</div>

</ul><!-- #bbp-topic-<?php bbp_topic_id(); ?> -->
