

		<?php wp_footer(); ?>
        <div class="container">
         <div class="mar25">
         <?php 
         if(get_the_ID() !== 83) {
             ?>
             
             <center>
							If you have any questions or would like more information, please contact Terry Bartol, Member, Donor
	& Special Events Coordinator at <a href="mailto:tbartol@obia.on.ca">tbartol@obia.on.ca</a> or <strong><a href="tel:9056418877" style="color: #000 !important;">(905) 641-8877</a> ext. 234</strong>.
						</center>
                        <?php
         }
         ?>
</div>
</div>
<div class="jumbotron">
    <div class="container">
        <footer>
            <div class="col-sm-2"></div>
<div class="col-sm-2"><span><a href="<?php echo get_site_url(); ?>/">HOME</a></span><br/></div>
 <!--<div class="col-sm-3"><span>NOMINEES</span><br/>
Case Manager of the Year
Health Care Provider of the Year
Community Brain Injury Association of the Year
Rehabilitation Company of the Year
Hospital Social Worker of the Year
</div>-->
<div class="col-sm-3">
<span>AWARD RECIPIENTS</span><br/>
 <a href="<?php echo get_site_url(); ?>/award-recipients/2016-award-recipients/">2016 Award Recipients</a><br/>
 <a href="<?php echo get_site_url(); ?>/award-recipients/2015-award-recipients/">2015 Award Recipients</a><br/>
 <a href="<?php echo get_site_url(); ?>/award-recipients/2014-award-recipients/">2014 Award Recipients</a><br/>
</div>
<div class="col-sm-3">
<a href="<?php echo get_site_url(); ?>/rules-and-regulations/"><span>RULES AND REGULATIONS</span></a><br/>
<a href="<?php echo get_site_url(); ?>/contact-us"><span>CONTACT US</span></a><br/>
<a href="http://obia.ca"><span>OBIA WEBSITE</span></a><br/>
</div>
<div class="cf"></div>
<center>© 2017 Thomson, Rogers. All Rights Reserved.</center>
</footer>
</div>
</div>
<div class="container">
    <div class="col-sm-3 col-xs-4">
        <img src="<?php echo get_site_url(); ?>/img/obia-footer.png" alt="Past award recipients" class="img-responsive"/>

    </div>
    <div class="col-sm-6 col-xs-4">

    </div>
    <div class="col-sm-3 col-xs-4">
        <img src="<?php echo get_site_url(); ?>/img/pia-footer.png" alt="Past award recipients" class="img-responsive"/>

    </div>
        <div class="cf"></div>
        <br/>
            <!--</?php
                for ($i=1;$i<6;$i++){
                ?>
                <img src="</?php echo get_field('mainpage_mainimage'.$i)['url']; ?>" alt="" style="width: 150px; margin-right: 15px;" />
                </?php
                }
            ?>
                    </?php if (have_posts()): while (have_posts()) : the_post(); ?>

                    <article id="post-</?php the_ID(); ?>" </?php post_class(); ?>>
                        </?php the_content(); ?>
                        </?php comments_template( '', true ); // Remove if you don't want comments ?>
                        <br class="clear">
                        </?php edit_post_link(); ?>
                    </article>

                    </?php endwhile; ?>
                    </?php else: ?>

                    <article>
                        <h2>
                            </?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
                        </h2>
                    </article>

                    </?php endif; ?>
        </div>-->
         </div>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
