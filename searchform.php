<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="text" class="search-form__field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search...', 'fcwp' ); ?>" />
  <input type="image" src="<?php echo FCWP_URI . '/images/empty.png'; ?>" name="search" alt="Search" class="search-form__button" />
</form>