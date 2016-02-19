<?php
$rxoc_footer_btn_text = dfw_get_field( 'rxoc_footer_btn_text', true );
$rxoc_footer_btn_url  = dfw_get_field( 'rxoc_footer_btn_url', true );
?>
<div class="footer__button">
  <div class="footer__button-text">
    <?php echo $rxoc_footer_btn_text; ?>
  </div>
  <a href="<?php echo $rxoc_footer_btn_url; ?>"></a>
</div>