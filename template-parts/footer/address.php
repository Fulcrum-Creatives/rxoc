<?php
$rxoc_address      = dfw_get_field( 'rxoc_address', true );
$rxoc_suite        = dfw_get_field( 'rxoc_suite', true );
$rxoc_city         = dfw_get_field( 'rxoc_city', true );
$rxoc_state        = dfw_get_field( 'rxoc_state', true );
$rxoc_zip_code     = dfw_get_field( 'rxoc_zip_code', true );
$rxoc_phone_number = dfw_get_field( 'rxoc_phone_number', true );
?>
<address class="company__address" itemscope itemtype="http://schema.org/PostalAddress">
  <span itemprop="streetAddress">
    <?php echo $rxoc_address . ', ' . $rxoc_suite; ?>
  </span>
  <span style="white-space: nowrap;">
    <span itemprop="addressLocality" class="inline"><?php echo $rxoc_city; ?>, </span>
    <span itemprop="addressRegion" class="inline"><?php echo $rxoc_state; ?></span> 
    <span itemprop="postalCode" class="inline"><?php echo $rxoc_zip_code; ?></span>
  </span>
  <br />
  <a href="tel:<?php echo $rxoc_phone_number; ?>" aria-lable="Phone Number" itemprop="telephone">
    <?php echo _e( 'Phone: ', 'fcwp' ) . $rxoc_phone_number; ?>
  </a>
</address>