<?php /* Template Name: Single Blog Template */ get_header(); ?>
<main role="main">
  <section class="welcome-single-blog container" id="">
    <div class="top marb20">

<?php if(isset($_GET['q'])){ ?>
        <div class="blogImage marb20">
            <?php
                        $file = $_SERVER['DOCUMENT_ROOT']."/wp-content/themes/obia/img/".$_GET['q'].".jpg";
                        if(file_exists($file)){
                            ?>
                             <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $_GET['q']; ?>.jpg"  id="paralax"/>
                            <?php
                        }else{
                            ?>
                             <img src="<?php echo get_template_directory_uri(); ?>/img/bike-lanes-on-bloor-street-are-they-a-safety-concern.jpg" id="paralax"/>
                            <?php
                        }
                        ?>

        </div>

        <div class="goBack">
            <a href="javascript:history.go(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back to all blog posts</a>
        </div>

    </div>
<?php } ?>
    <div class="blogs">
        <?php

            if(isset($_GET['q'])){

                $blog =  $_GET['q'];

                            $db = mysqli_connect("localhost","trwebmai_bsr","3nKwwwgbx(4^8-HwT","i2279670_wp2") or die("Error " . mysqli_error($link));
            $db->set_charset("utf8");
            $result = $db->query("SELECT * FROM `wp_posts` WHERE `post_status` = 'publish' AND `post_type` = 'post' AND `post_name` = '$blog'");
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="blogsAll">                        
                        <div class="blogsTitle"><?php echo $row['post_title']; ?></div>
                        <div class="author">
                            By Adam Tanel<br/>
                            <?php echo $row['post_date']; ?><br/><br/>
                        </div>
                        <div class="blogsBody"><?php echo $row['post_content']; ?></div>
                        <a href="<?php echo home_url(); ?>/blog/<?php echo $row['post_name'];?>" class="readMore">
                            <span class="fa fa-arrow-right animated pulse"></span>
                        </a>

                    </div>
                    <?php
                }
            
            }}
        ?>


            

            



    </div>

  </section>
</main>
<!--</?php get_sidebar(); ?>-->
<?php get_footer(); ?>
