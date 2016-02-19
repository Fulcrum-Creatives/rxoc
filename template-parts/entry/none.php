<div class="content__wrapper small__wrapper error">
  <article id="entry-<?php get_the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="entry__header" role="article">
    <?php if( function_exists( 'fcwp_page_title' ) ) : fcwp_page_title( 'Nothing Found!' ); endif; ?>
    <section class="entry__content">
      <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
        <p><?php printf( _e( '<h2 class="error__heading"><p>Ready to publish your first post?</h2> <a href="%1$s">Get started here</a>.</p>', 'fcwp' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
      <?php elseif ( is_search() ) : ?>
        <p><?php _e( '<h2 class="error__heading">Sorry, but nothing matched your search terms.</h2> <p>Please try again with some different keywords.</p>', 'fcwp' ); ?></p>
      <?php else : ?>
        <p><?php _e( '<h2 class="error__heading">It seems we can\'t find what you&rsquo;re looking for.</h2><p>Perhaps searching can help.</p>', 'fcwp' ); ?></p>
      <?php endif; ?>
    </section>
  </article>
</div>