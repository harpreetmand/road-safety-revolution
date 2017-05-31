<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
<div class="container profile">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       
<h2><?php echo get_categories()[1]->name;?></h2>
<div class="col-sm-3 row">
    <?php $img = get_field('nominee_picture'); ?>
    <img src="<?php echo $img['url']; ?>" alt="<?php the_title(); ?>" class="img-responsive"/>
</div>
<div class="col-sm-2">
<i class="fa fa-arrow-right" aria-hidden="true"></i><br/>
Learn about
other 2016 award
recipients
</div>
<div class="col-sm-7 row otherNominated">
<div class="people">
<img src="<?php echo $img['url']; ?>" alt="<?php the_title(); ?>" class="img-responsive"/>
<?php the_title(); ?><br/>
READ FULL BIO <i class="fa fa-arrow-right" aria-hidden="true"></i>
</div>
<div class="people">
<img src="<?php echo $img['url']; ?>" alt="<?php the_title(); ?>" class="img-responsive"/>
<?php the_title(); ?><br/>
READ FULL BIO <i class="fa fa-arrow-right" aria-hidden="true"></i>
</div>
<div class="people">
<img src="<?php echo $img['url']; ?>" alt="<?php the_title(); ?>" class="img-responsive"/>
<?php the_title(); ?><br/>
READ FULL BIO <i class="fa fa-arrow-right" aria-hidden="true"></i>
</div>
<div class="people">
<img src="<?php echo $img['url']; ?>" alt="<?php the_title(); ?>" class="img-responsive"/>
<?php the_title(); ?><br/>
READ FULL BIO <i class="fa fa-arrow-right" aria-hidden="true"></i>
</div>
</div>
<div class="cf"></div>

			<!-- post thumbnail -->

			<!-- /post thumbnail -->

			<!-- post title -->
			
				<div class="bigPurple"><?php the_title(); ?></div>
                Nominated for:<br/>
                <u><?php echo get_categories()[1]->name;?></u>
			
			<!-- /post title -->

			<!-- post details -->
			<!--<span class="date"></?php the_time('F j, Y'); ?> </?php the_time('g:i a'); ?></span>-->

			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

		
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
</div>
	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
