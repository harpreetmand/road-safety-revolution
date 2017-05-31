<?php /* Template Name: Contact Us Template */ get_header(); ?>
<main role="main">
    <!-- section -->
    <section>
        <div class="container contactUs">
            <div class="col-sm-6">
                
                <h2><?php echo get_the_title();?></h2>
<br>
        <p>If you have any questions or would like more information, please contact Terry Bartol, Member, Donor
& Special Events Coordinator at <a href="mailto:tbartol@obia.on.ca">tbartol@obia.on.ca</a> or <a href="tel:9056418877">(905) 641-8877</a> ext. 234.</p>
<br>

<div class="sendMessage">SEND US A MESSAGE</div>
<br/>
<?php echo do_shortcode("[contact-form-7 id=\"136\" title=\"Contact Us\"]"); ?>
</div>
        </div>
    </section>

</main>
<!--</?php get_sidebar(); ?>-->
<?php get_footer(); ?>
