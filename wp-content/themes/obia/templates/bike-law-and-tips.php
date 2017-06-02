<?php /* Template Name: Bike law and tips Template */ get_header(); ?>
<main role="main">
  <section class="welcome-bikeLaw container" id="">
    <div class="top marb20">
        <div class="flex-item">
            <div class="bgImage">
                <div class="font100">
                    BIKE LAW & TIPS
                </div>
                <p>If you find yourself in a serious bicycle accident here are some initial steps you should follow:</p>
            </div>
        </div>
        <div class="hidden-xs flex-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bike-law-girl-on-bike.jpg" class="img-responsive"/>
        </div>
        <a href="#" class="scrollDown hidden-xs">
            <i class="fa fa-arrow-down animated bounce"></i>
        </a>
    </div>
    <div class="cf"></div>


	<div id="myCarousel" class="carousel  slide">
  <!-- Dot Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Items -->
  <div class="outside">
  <div class="carousel-inner">
    <div class="active item"> 1. Call for help<br/> Call 911 </div>
    <div class="item"> asdasdasds lorem 2 </div>
    <div class="item"> asdasdasds lorem 3</div>
  </div>
  </div>
  <!-- Navigation -->
   <a class="carouselLeft carousel-control" href="#myCarousel" data-slide="prev">
            <span class="fa fa-arrow-left animated pulse"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="fa fa-arrow-right animated pulse"></span>
        </a>
</div>



  </section>
</main>
<!--</?php get_sidebar(); ?>-->
<?php get_footer(); ?>
