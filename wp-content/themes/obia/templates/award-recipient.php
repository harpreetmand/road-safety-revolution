<?php /* Template Name: Award Recipient Single Template */ get_header(); ?>
<main role="main">
    <!-- section -->
    <section>
        <div class="container profile">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <h2 class="recipient-person"><?php echo get_field('award_title') ?></h2>
          <div class="col-sm-5 nopadl">
            <?php $img = get_field('nominee_picture'); ?>
            <img src="<?php echo get_field('main_picture'); ?>" alt="<?php the_title(); ?>" class="img-responsive"/>
            <div class="learn-more">
              <i class="fa fa-arrow-right" aria-hidden="true"></i><br/>
              Learn about
              other 2016 award
              recipients
            </div>
          </div>
          <div class="col-sm-7 otherNominated">
            <?php
            $content = apply_filters('the_content', $post->post_content);
            $year = get_field('the_year');
            $name = get_field('the_year') . "_nominated";
            $parent = get_field('parent_page');
            $parent_name = get_field('parent_name');
            $award_name = get_field('award_name');
            $current_slug = $post->post_name;
            $x = 1;
            $exec_query = new WP_Query( array (
              'post_type' => 'nominees',
              'years_won'  => $year,
              'posts_per_page' => 6
            ) );
            //* The Loop
            if ( $exec_query->have_posts() ) { ?>
              <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
                <?php if( $post->post_name !== $current_slug  ) {?>
                <?php $img = get_field('nominee_picture'); ?>
                <?php echo get_field('parent_page'); ?>
                <?php
                if ($x % 3 == 0) {
                  ?>
                  <div class="people col-xs-4">
                    <a href="<?php echo get_site_url(); ?>/award-recipients/<?php echo $parent; ?>/<?php echo $post->post_name; ?>">
                    <img src="<?php echo $img['url']; ?>" alt="<?php the_title(); ?>" class="img-responsive"/>
                    <span><?php the_title(); ?></span>
                    READ FULL BIO <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                  </div>

                  <div class="cf"></div>
                  <?php
                } else {
                  ?>
                  <div class="people col-xs-4">
                    <a href="<?php echo get_site_url(); ?>/award-recipients/<?php echo $parent; ?>/<?php echo $post->post_name; ?>">
                    <img src="<?php echo $img['url']; ?>" alt="<?php the_title(); ?>" class="img-responsive"/>
                    <span><?php the_title(); ?></span>
                    READ FULL BIO <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <?php
                  $x++;
                }
                ?>
              <?php
                }
                endwhile;
              }
              ?>
          </div>
          <div class="cf"></div>
          <?php endwhile; ?>
          <?php endif; ?>
          <h2 class="recipient-person description">
            <?php echo $parent_name; ?>
          </h2>
          <p style="margin-bottom: 0px;">
            Nominated for:
          </p>
          <p class="nomination-for">
            <?php echo $award_name; ?>
          </p>
          <?php
            echo $content;
          ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
