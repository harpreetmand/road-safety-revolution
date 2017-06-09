<?php /* Template Name: Bike blog Template */ get_header(); ?>
<main role="main">
  <section class="welcome-blog container" id="">
    <div class="top marb20">
        <div class="flex-item">
            <div class="bgImage">
                <div class="font120">
                    BIKE SAFETY BLOG
                </div>
                <p>Keep up-to-date on all the news, events and cycling laws in Ontario.</p>
            </div>
        </div>
        <div class="hidden-xs flex-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bike-blog.jpg" class="img-responsive">
        </div>
        <a href="#" class="scrollDown hidden-xs">
            <i class="fa fa-arrow-down animated bounce"></i>
        </a>
    </div>

    <div class="blogs">
        <?php



            $db = mysqli_connect("192.168.2.54","root","","bikeBlog") or die("Error " . mysqli_error($link));
            $db->set_charset("utf8");
            $result = $db->query("SELECT * FROM `wp_posts` WHERE `post_status` = 'publish' AND `post_type` = 'post' ORDER BY `post_date` DESC");
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {











                    ?>
                    <div class="blogsAll">
                        <!--<a href="</?php echo home_url(); ?>/blog?q=</?php echo $row['post_name'];?>"><img src="</?php echo get_template_directory_uri(); ?>/img/</?php echo $row['post_name']; ?>.jpg" class="img-responsive"></a>-->
                        <a href="<?php echo home_url(); ?>/blog?q=<?php echo $row['post_name'];?>">
                        <?php
                        $file = $_SERVER['DOCUMENT_ROOT']."/obia/wp-content/themes/obia/img/".$row['post_name'].".jpg";
                        if(file_exists($file)){
                            ?>
                             <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $row['post_name']; ?>.jpg" class="img-responsive"/>
                            <?php
                        }else{
                            ?>
                             <img src="<?php echo get_template_directory_uri(); ?>/img/bike-lanes-on-bloor-street-are-they-a-safety-concern.jpg" class="img-responsive"/>
                            <?php
                        }
?>



                        </a>
                        <div class="blogsTitle"><?php echo $row['post_title']; ?></div>
                        <div class="blogsBody"><?php echo implode(' ',array_slice(explode(' ', strip_tags($row['post_content'])), 0, 50)); ?>...</div>
                        <a href="<?php echo home_url(); ?>/blog?q=<?php echo $row['post_name'];?>" class="readMore">
                            <span class="fa fa-arrow-right animated pulse"></span>
                        </a>

                    </div>
                    <?php
                }
            }
        ?>



    </div>

  </section>
</main>
<!--</?php get_sidebar(); ?>-->
<?php get_footer(); ?>
