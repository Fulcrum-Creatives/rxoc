<?php
$rxoc_logo        = dfw_get_field( 'rxoc_logo', true );
$rxoc_logo_retina = dfw_get_field( 'rxoc_logo_retina', true );
$rxoc_logo_svg    = dfw_get_field( 'rxoc_logo_svg', true );
?>
<h1>
  <a href="<?php echo home_url(); ?>">
    <?php
      $logo_paths = array(
        'image'  => $rxoc_logo['url'],
        'retina' => $rxoc_logo_retina['url'],
        'svg'    => $rxoc_logo_svg['url']
      ); 
      dfw_svg_fallback( $logo_paths, $rxoc_logo['alt'], 'logo', 'svg logo__svg' );
    ?>
  </a>
  <span class="ir">
    <?php echo bloginfo('name'); ?>
  </span>
</h1>