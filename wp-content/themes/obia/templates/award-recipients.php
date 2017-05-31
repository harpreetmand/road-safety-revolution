<?php /* Template Name: Award Recipients Template */ get_header(); ?>
<main role="main">
    <!-- section -->
    <section>
        <div class="container winners">
          <?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
          <h2>Recipients of the <?php echo get_field('the_year'); ?> Awards of Excellence<br/> in Brain Injury Rehabilitation</h2>
          <?php echo $wp_query->post->post_content; ?>
          <?php
          //* The Query
          $year = get_field('the_year');
          $parent = $year . "-award-recipients";
          $name = get_field('the_year') . "_nominated";
          $exec_query = new WP_Query( array (
            'post_type' => 'nominees',
            'years_won'  => $year,
            'posts_per_page' => 6
          ) );
          $current_page = $post->ID;
          $children = get_pages( array( 'child_of' => $post->ID ) );
          //* The Loop
          if ( $exec_query->have_posts() ) { ?>
            <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
              <?php $img = get_field('nominee_picture'); ?>
              <div class="all mar20">
               <h3> <?php echo get_field($name) ?></h3>
                <div class="row col-sm-3">
                <a href="<?php echo get_site_url(); ?>/award-recipients/<?php echo $parent; ?>/<?php echo $post->post_name; ?>" class="titleLink mar10"><img src="<?php echo $img['url']; ?>" alt="<?php the_title(); ?>" class="img-responsive"/></a>
                </div>
                <div class="col-sm-7">
                <a href="<?php echo get_site_url(); ?>/award-recipients/<?php echo $parent; ?>/<?php echo $post->post_name; ?>" class="titleLink mar10"><?php the_title(); ?></a><br/>
                <?php echo get_field('brief_description'); ?>
                <div class="bottom"> <a href="<?php echo get_site_url(); ?>/award-recipients/<?php echo $parent; ?>/<?php echo $post->post_name; ?>" class="readFull mar10">READ FULL BIO <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>

              </div>
              <div class="col-sm-2 row">
              <img src="<?php echo get_site_url(); ?>/img/obia-winners.png" alt="Awared of excellence in brain inhury rehabilitaion" class="img-responsive obioLogo" />
              </div>
              </div>
              <div class="cf"></div>
            <?php

              if( count( $children ) == 0 ) {
                $new_page = array(
                  'slug' => get_the_title(),
                  'title' => get_the_title() . ", " . get_field($name),
                  'content' => get_the_content()
                );
                $new_page_id = wp_insert_post( array(
                  'post_title' => $new_page['title'],
                  'post_type' 	=> 'page',
                  'post_name'	 => $new_page['slug'],
                  'page_template'  => "templates/award-recipient.php",
                  'post_parent'	 => $current_page,
                  'comment_status' => 'closed',
                  'ping_status' => 'closed',
                  'post_content' => $new_page['content'],
                  'post_status' => 'publish',
                  'post_author' => 1,
                  'menu_order' => 0
                ));
                update_post_meta( $new_page_id, 'award_title', "Recipients of the "." $year "." Awards of Excellence in Brain Injury Rehabilitation" );
                update_post_meta( $new_page_id, 'the_year', $year);
                update_post_meta( $new_page_id, 'main_picture', $img['url'] );
                update_post_meta( $new_page_id, 'parent_page', $parent );
                update_post_meta( $new_page_id, 'parent_name', get_the_title());
                update_post_meta( $new_page_id, 'award_name', get_field($name));
              }
              endwhile;
            ?>
            <?php wp_reset_postdata(); } ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
