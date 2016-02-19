<?php
  $rxoc_footer_link_one_text = dfw_get_field( 'rxoc_footer_link_one_text', true );
  $rxoc_footer_link_one_page_link = dfw_get_field( 'rxoc_footer_link_one_page_link', true );
  $rxoc_footer_link_two_text = dfw_get_field( 'rxoc_footer_link_two_text', true );
  $rxoc_footer_link_two_page_link = dfw_get_field( 'rxoc_footer_link_two_page_link', true );
  $rxoc_copyright = dfw_get_field( 'rxoc_copyright', true );
?>
<div class="bottom-bar">
  <div class="content__wrapper row">
    <div class="col__1-2 bottom-bar__left">
      <a href="<?php echo $rxoc_footer_link_one_page_link; ?>">
        <?php echo $rxoc_footer_link_one_text; ?>
      </a> | 
      <a href="<?php echo $rxoc_footer_link_two_page_link; ?>">
        <?php echo $rxoc_footer_link_two_text; ?>
      </a>
    </div>
    <div class="col__1-2 bottom-bar__right">
      <?php echo $rxoc_copyright; ?>
    </div>
  </div>
</div>