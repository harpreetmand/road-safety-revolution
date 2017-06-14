<main role="main" class="bikeForum">
  <section class="welcome-bikeForum container" id="bikeForum">
    <div class="top marb10">
        <div class="flex-item">
            <div class="bgImage">
                <div class="font120">
                    BIKE<br class="hidden-xs">
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
      <div class="col-xs-12 col-md-8 col-lg-7 nopadl">
        <p class="bigFont">
          SHARE YOUR STORY
        </p>
        <p class="giftcard">
          For a chance to win a $50 Gears gift card
        </p>
        <div class="col-xs-12 col-sm-3 nopadlr">
          <img id="gear-forum" src="<?php echo get_template_directory_uri(); ?>/img/share-your-story-with-us.png" alt="GEARS" />
        </div>
        <div class="col-xs-12 col-sm-9 medFont">
          Share a story where you’ve had a near miss,<br class="hidden-xs">
          an accident or a moment of appreciation for a<br class="hidden-xs">
          motorist and be entered for a chance to win a $50<br class="hidden-xs">
          gift card to Gears Bike Shop. We will be rewarding<br class="hidden-xs">
          1 story per month from June – November.
        </div>
        <div class="cf"></div>
        <!-- </?php echo do_shortcode('[contact-form-7 html_class="pages" id="747" title="Win A Bike"]'); ?> -->
        <?php echo do_shortcode('[bbp-topic-form]'); ?>
      </div>
      <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-5 nopadr">
        <img class="hidden-xs hidden-sm" src="<?php echo get_template_directory_uri(); ?>/img/join-the-revolution-today.png" alt="Join The Safety Revolution" />
      </div>
			<div class="cf"></div>
    </div>
  </section>
	<section class="forum">
		<div class="container">
      <div class="font70 title padlr30">
          Accident Stories
      </div>
      <?php echo do_shortcode('[bbp-topic-index]'); ?>
		</div>
	</section>
</main>
