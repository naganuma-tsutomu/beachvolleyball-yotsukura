<?php
/*
Template Name: Custom Template
*/
?>

<?php get_header(); ?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php
      while (have_posts()) :
        the_post();
        the_content();
      endwhile;
      ?>

    </main><!-- #main -->
<?php get_footer(); ?>
    