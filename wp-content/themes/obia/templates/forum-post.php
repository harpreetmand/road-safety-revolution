<main role="main" class="bikeForum">
  <section class="forum-post">
    <div class="container">
      <div class="font70 title mart40 marb20">
          <?php single_post_title(); ?>
      </div>
      <div class="goBack">
            <a href="<?php echo get_site_url(); ?>/bike-forum/"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back to all blog posts</a>
      </div>
      <?php the_content(); ?>
    </div>
  </section>
</main>
