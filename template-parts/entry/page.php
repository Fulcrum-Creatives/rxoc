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
  <section class="intro">
    <?php if( $rxoc_page_intro_heading ) : ?>
      <h2 class="intro__heading">
        <?php echo $rxoc_page_intro_heading; ?>
      </h2>
    <?php endif; ?>
    <?php
    if( $rxoc_page_intro_text ) :
      if ( has_post_thumbnail() ) :
    ?>
      <div class="row">
        <div class="col__2-3 intro__left">
          <?php echo $rxoc_page_intro_text; ?>
        </div>
        <div class="col__1-3 intro__right">
          <?php the_post_thumbnail();?>
        </div>
      </div>
    <?php
      else :
        echo $rxoc_page_intro_text;
      endif;
    endif;
    ?>
  </section>
  <section class="content">
    <?php if( $rxoc_content_heading ) : ?>
      <h3 class="content__heading">
        <?php echo $rxoc_content_heading; ?>
      </h3>
    <?php
    endif;
    the_content(); 
    ?>
  </section>
</div>