<?php
/*
Template Name: Custom Template
*/
?>

<?php get_header(); ?>

<div class="container">
  <?php
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
  ?>

</div>
</div>

<?php get_footer(); ?>