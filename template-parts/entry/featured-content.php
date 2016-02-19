<?php if( have_rows( 'rxoc_featured_content' ) ): ?>
  <section class="featured-content">
    <div class="row">
    <?php
    while( have_rows( 'rxoc_featured_content' ) ) : the_row();
      $fxoc_fc_image     = dfw_get_sub_field( 'rxoc_featured_content', 'fxoc_fc_image' );
      $rxoc_fc_heading   = dfw_get_sub_field( 'rxoc_featured_content', 'rxoc_fc_heading' );
      $rxoc_fc_text      = dfw_get_sub_field( 'rxoc_featured_content', 'rxoc_fc_text' );
      $rxoc_fc_page_link = dfw_get_sub_field( 'rxoc_featured_content', 'rxoc_fc_page_link' );
    ?>
      <div class="col__1-2 featured-content__block">
        <a href="<?php echo $rxoc_fc_page_link; ?>">
          <img src="<?php echo $fxoc_fc_image['url']; ?>" alt="<?php echo $fxoc_fc_image['alt']; ?>" class="block__image"/>
        </a>
        <h4 class="featured-content__heading heading__blocks">
          <a href="<?php echo $rxoc_fc_page_link; ?>">
            <?php echo $rxoc_fc_heading; ?>
          </a>
        </h4>
        <div class="block__text">
          <?php echo $rxoc_fc_text; ?>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </section>
<?php 
endif;