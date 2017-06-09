<?php /* Template Name: Bike forum Template */ get_header(); ?>
<main role="main" class="bikeForum">
  <section class="welcome-bikeForum container" id="bikeForum">
    <div class="top marb20">
        <div class="flex-item">
            <div class="bgImage">
                <div class="font120">
                    BIKE<br>
                    FORUM
                </div>
            </div>
        </div>
        <div class="hidden-xs flex-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/road-safety-revolution-forum.png" class="img-responsive" alt="Road Safety Revolution Forum"/>
        </div>
        <a href="#" class="scrollDown hidden-xs">
            <i class="fa fa-arrow-down animated bounce"></i>
        </a>
    </div>
    <div class="cf"></div>
  </section>
  <section class="share-your-story">
    <div class="container">
      <div class="col-xs-12 col-md-8">
        <p class="bigFont">
          SHARE YOUR STORY
        </p>
        <p class="giftcard">
          For a chance to win a $50 Gears gift card
        </p>
        <div class="col-xs-3 nopadl">
          <img src="<?php echo get_template_directory_uri(); ?>/img/share-your-story-with-us.png" alt="GEARS" />
        </div>
        <div class="col-xs-9 medFont">
          Share a story where you’ve had a near miss,<br>
          an accident or a moment of appreciation for a<br>
          motorist and be entered for a chance to win a $50<br>
          gift card to Gears Bike Shop. We will be rewarding<br>
          1 story per month from June – November.
        </div>
        <div class="cf"></div>
        <?php echo do_shortcode('[contact-form-7 id="747" title="Win A Bike"]'); ?>
      </div>
      <div class="col-xs-12 col-md-4">

      </div>
    </div>
  </section>
</main>
<!--</?php get_sidebar(); ?>-->
<?php get_footer(); ?>
