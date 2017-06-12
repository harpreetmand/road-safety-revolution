<?php /* Template Name: Ask Adam Template */ get_header(); ?>
<main role="main">
  <section class="welcome-askAdam container" id="bikeLaw">
      <div class="askAdamTop">
        <picture>
            <source media="(min-width: 735px)" srcset="<?php echo get_template_directory_uri(); ?>/img/ask-adam-thomson-rogers.jpg" alt="ask adam">

            <img src="<?php echo get_template_directory_uri(); ?>/img/ask-adam-top-thomson-rogers.jpg" alt="ask adam" class="pull-right adamPic">
        </picture>

        <div class="font120">ASK ADAM</div>
        <div class="aboutAdam">
            <p>Adam Tanel of Thomson, Rogers is an avid cyclist who knows the ins and outs of biking in Toronto and the law. Adam and Thomson, Rogers have advocated for the rights of cyclists in and out of the courtroom for years.</p>
            <p>“Cycling should not be dangerous, if everyone paid attention and followed the rules of the road there would be far fewer accidents. Furthermore, the City of Toronto and the Province have tremendous obligations to make sure that cyclists are safe.”</p>
            <p>As a cycling advocate, Adam is adamant about the municipal and provincial responsibility of ensuring a safer cycling infrastructure. His passion for increased cycling safety led him to run for Toronto City Council in 2014. As a candidate, he was a signatory to the CycleTO “Minimum Grid” pledge. His campaign team, working hand-in-hand with local cycling advocates, proposed the most ambitious expansion of Toronto’s bike paths of any candidate in the 2014 election.</p>
            <p>Adam cycles to and from his Bay Street office throughout the year and is a regular participant in the “Bells on Yonge” ride to promote safe cycling.</p>
            <p>Adam’s been a cycling advocate for many years. Check out his website <a class="link" href="http://bikelawyers.ca" target="_blank">here.</a></p>

            <a href="#" class="scrollDown hidden-xs">
                <i class="fa fa-arrow-down animated bounce"></i>
            </a>
            </div>
        </div>
        <div class="cf"></div>
        <div class="askAdamBottom">
            <div class="col-sm-8 full">
                <span class="askAdamFormLine">SUBMIT A CYCLING RELATED LEGAL QUESTION TO ADAM</span>
                <?php echo do_shortcode('[contact-form-7 id="794" title="ask-adam" html_class="pages"]');?>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/join-the-road-safety-revolution.png" alt="Join the road safety revolution" class="img-responsive"/>
            </div>
        </div>
  </section>
</main>
<!--</?php get_sidebar(); ?>-->
<?php get_footer(); ?>
