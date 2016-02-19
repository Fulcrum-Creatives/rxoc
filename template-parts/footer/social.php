<?php
$rxoc_facebook = dfw_get_field( 'rxoc_facebook', true );
$rxoc_linkedin = dfw_get_field( 'rxoc_linkedin', true );
?>
<div class="social-links">
  <div class="facebook">
    <a href="<?php echo $rxoc_facebook; ?>">
      <i class="fa fa-facebook-square"></i>
    </a>
  </div>
  <div class="linkedin">
    <a href="<?php echo $rxoc_linkedin; ?>">
      <i class="fa fa-linkedin-square"></i>
    </a>
  </div>
</div>