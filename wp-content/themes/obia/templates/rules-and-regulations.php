<?php /* Template Name: rules and regulations Template */ get_header(); ?>
<main role="main">
    <!-- section -->
    <section>
        <div class="container">

            <h2><?php echo $wp_query->post->post_title; ?></h2>
            <?php echo $wp_query->post->post_content; ?>
     
</div>
    </section>

</main>
<!--</?php get_sidebar(); ?>-->
<?php get_footer(); ?>