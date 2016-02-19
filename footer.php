</main>
<footer id="footer" class="footer" role="contentinfo">
  <?php get_template_part( 'template-parts/footer/footer', 'button' ); ?>
  <div class="content__wrapper">
    <?php 
    get_template_part( 'template-parts/footer/search' );
    get_template_part( 'template-parts/footer/address' );
    get_template_part( 'template-parts/footer/social' );
    get_template_part( 'template-parts/footer/disclaimer' ); 
    ?>
  </div>
  <?php get_template_part( 'template-parts/footer/bottom', 'bar' ); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>