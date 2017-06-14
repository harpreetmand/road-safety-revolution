<?php /* Template Name: Bike forum Template */ get_header(); ?>
<?php
  $id = get_the_ID();
  $bikeforum = 725;
  $forumTopic = 810;
  $forumPost = 817;
  if ($id == $bikeforum) {
    get_template_part( 'templates/bike-forum', 'page' );
  } else if ($id == $forumTopic){
    get_template_part( 'templates/forum-topic', 'page' );
  } else if (strpos($_SERVER['REQUEST_URI'], "topic") !== false){
    get_template_part( 'templates/forum-post', 'page' );
  } else {
    get_template_part( 'otherPage', 'page' );
  }
?>
<!--</?php get_sidebar(); ?>-->
<?php get_footer(); ?>
