<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $rxoc_feat_btn_text         = dfw_get_field( 'rxoc_feat_btn_text' );
    $rxoc_fea_btn_link_type     = dfw_get_field( 'rxoc_fea_btn_link_type' );
    $rxoc_feat_btn_page_link    = dfw_get_field( 'rxoc_feat_btn_page_link' );
    $rxoc_feat_btn_external_url = dfw_get_field( 'rxoc_feat_btn_external_url' );
    $featured_link              = ( $rxoc_fea_btn_link_type == 'page' ? $rxoc_feat_btn_page_link : $rxoc_feat_btn_external_url );
  endwhile;  
endif;
wp_reset_postdata();
if( $rxoc_feat_btn_text ) :
?>
<section class="featured-block">
  <div class="featured-block__button">
    <div class="featured-block__button-text proxima--semibold">
      <?php echo $rxoc_feat_btn_text; ?>
    </div>
    <a href="<?php echo $featured_link; ?>" class="featured-block__button-link"></a>
  </div>
</section>
<?php endif; ?>