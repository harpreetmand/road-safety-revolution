<?php /* Template Name: home Page Template */ get_header(); ?>
<main role="main">
  <section class="welcome-main" id="main-bg">
    <div class="container">
      <a href="#" class="scroll-down">
        <i class="fa fa-arrow-down"></i>
      </a>
      <div class="win-a-bike whitebg">
        <p>
          YOU COULD WIN<br>
          A BIKE HELMET
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/win-a-bike-helmet.png" alt="Win a Bike Helmet" />
        <img id="join-the-rsr" src="<?php echo get_template_directory_uri(); ?>/img/join-the-road-safety-revolution.png" alt="Join The Road Safety Revolution" />
      </div>
    </div>
  </section>
  <section class="enter-to-win">
    <div class="container">
      <div class="col-xs-12 col-md-6 left blackbg">
        <h2>ENTER FOR A CHANCE<br>TO WIN A BIKE HELMET</h2>
        <?php echo do_shortcode('[contact-form-7 id="741" title="Win A Bike"]'); ?>
        <div class="cf"></div>
        <p id="terms">
          Prizes are drawn on June 30, 2017, July 31, 2017, August 31, 2017,
          September 30, 2017, October 31, 2017 and November 30, 2017.
          Must be a Canadian resident. One entry per person. Odds of winning
          depend on eligible entries received. Each prize has an approximate
          retail value of up to $200.00. Prize has no cash value. Once a winner
          is drawn, they will be contacted by Thomson, Rogers, and their name
          will be posted on the contest website (www.roadsafetyrevolution.ca).
          Winners will also be announced via contest social media accounts.
          A certificate will be presented to each winner, which can then be
          redeemed at any Gears location. Must be at least 18 years old to
          enter. This contest is not open to residents of Quebec. If you require
          more information about this prize draw, please contact Joseph Pileggi<br>
          - Thomson, Rogers at 416-868-3190.
        </p>
        <img id="sponsors" src="<?php echo get_template_directory_uri(); ?>/img/road-safety-revolution-sponsors.png" alt="Road Safety Revolution Sponsors" />
      </div>
      <div class="col-xs-12 col-md-6 right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/win-a-bike-helmet-today.png" alt="Win A Bike Helmet Today" />
      </div>
      <div class="cf"></div>
    </div>
  </section>
  <section class="home-roadsigns">
    <div class="container">
      <div class="col-xs-12 col-sm-6">
        <img class="roadsign left" src="<?php echo get_template_directory_uri(); ?>/img/dooring-incidents.png" alt="Dooring Incidents" />
      </div>
      <div class="col-xs-12 col-sm-6">
        <h3>DOORING</h3>
        <p>
          Dooring incidents are on the rise in Toronto with
          a 58.3% increase between 2014 and 2016, and
          209 reported dooring incidents in 2016 alone.
          Dooring can lead to serious injuries and even death.
          Governments are taking too long to address road
          safety issues, so it’s up to us to be safer.
        </p>
      </div>
      <div class="cf"></div>
      <div class="blackbg slogan">
        <div class="col-xs-12 col-sm-6">
          &nbsp;
        </div>
        <div class="col-xs-12 col-sm-6">
          Road Safety Starts By Seeing The Signs
        </div>
        <div class="cf"></div>
      </div>
    </div>
  </section>
  <section class="home-roadbg">
    <div class="roadsign-bg">
      <div class="container">
        <div class="roadsign-text type-1">
          JARVIS ST. BIKE LANES SAW A<br>
          <span>3x</span><br>
          TRAFFIC INCREASE PRIOR TO REMOVAL
        </div>
        <a href="#" class="scroll-down">
          <i class="fa fa-arrow-down"></i>
        </a>
      </div>
    </div>
  </section>
  <section class="home-roadsigns">
    <div class="container">
      <div class="col-xs-12 col-sm-6">
        <img class="roadsign left" src="<?php echo get_template_directory_uri(); ?>/img/collision-incidents.png" alt="Collision Incidents" />
      </div>
      <div class="col-xs-12 col-sm-6">
        <h3>POTHOLES</h3>
        <p>
          Dooring incidents are on the rise in Toronto with
          a 58.3% increase between 2014 and 2016, and
          209 reported dooring incidents in 2016 alone.
          Dooring can lead to serious injuries and even death.
          Governments are taking too long to address road
          safety issues, so it’s up to us to be safer.
        </p>
      </div>
      <div class="cf"></div>
      <div class="blackbg slogan">
        <div class="col-xs-12 col-sm-6">
          &nbsp;
        </div>
        <div class="col-xs-12 col-sm-6">
          Road Safety Starts By Seeing The Signs
        </div>
        <div class="cf"></div>
      </div>
    </div>
  </section>
  <section class="home-roadbg">
    <div class="roadsign-bg">
      <div class="container">
        <div class="roadsign-text type-1">
          JARVIS ST. BIKE LANES SAW A<br>
          <span>3x</span><br>
          TRAFFIC INCREASE PRIOR TO REMOVAL
        </div>
        <a href="#" class="scroll-down">
          <i class="fa fa-arrow-down"></i>
        </a>
      </div>
    </div>
  </section>
</main>
<div class="cf"></div>
<!--</?php get_sidebar(); ?>-->
<?php get_footer(); ?>
