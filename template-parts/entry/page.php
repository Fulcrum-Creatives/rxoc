<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $rxoc_page_intro_heading    = dfw_get_field( 'rxoc_page_intro_heading' );
    $rxoc_page_intro_text       = dfw_get_field( 'rxoc_page_intro_text' );
    $the_content                = get_the_content();
    $rxoc_content_heading       = dfw_get_field( 'rxoc_content_heading' );
  endwhile;  
endif;
wp_reset_postdata();
?>
<div class="content__wrapper body-text">
  <section class="content">
    <?php if( $rxoc_content_heading ) : ?>
      <h2 class="content__heading">
        <?php echo $rxoc_content_heading; ?>
      </h2>
    <?php
    endif;
    the_content(); 
    ?>
  </section>
</div>