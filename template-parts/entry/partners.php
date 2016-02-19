<?php if( have_rows( 'rxoc_partners' ) ): ?>
  <section class="partners">
    <?php
    while( have_rows( 'rxoc_partners' ) ) : the_row();
      $rxoc_partner_image   = dfw_get_sub_field( 'rxoc_partners', 'rxoc_partner_image' );
      $rxoc_partner_heading = dfw_get_sub_field( 'rxoc_partners', 'rxoc_partner_heading' );
      $rxoc_partner_text    = dfw_get_sub_field( 'rxoc_partners', 'rxoc_partner_text' );
      $rxoc_partner_url     = dfw_get_sub_field( 'rxoc_partners', 'rxoc_partner_url' );
    ?>
    <div class="row">
      <div class="col__1-3 partners__left">
        <a href="<?php echo $rxoc_partner_url; ?>">
          <img src="<?php echo $rxoc_partner_image['url']; ?>" alt="<?php echo $rxoc_partner_image['alt']; ?>" class="block__image" />
        </a>
      </div>
      <div class="col__2-3 partners__right">
        <h4 class="partners__heading heading__blocks">
          <a href="<?php echo $rxoc_partner_url; ?>">
            <?php echo $rxoc_partner_heading; ?>
          </a>
        </h4>
        <div class="block__text">
          <?php echo $rxoc_partner_text; ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </section>
<?php 
endif;