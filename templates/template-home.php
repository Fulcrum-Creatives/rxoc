<?php
/*
Template Name: Home
*/
get_header(); ?>
<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    the_content();
  endwhile; 
else:
  get_template_part( 'template-parts/entry', 'none' );
endif; 
?>
<?php get_footer(); ?>