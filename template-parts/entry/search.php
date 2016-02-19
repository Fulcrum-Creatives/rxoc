<div class="content__wrapper small__wrapper search-result">
  <article id="entry-<?php get_the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="entry__header" role="article">
    <header id="entry__header" class="entry-header">
      <h2 class="heading__blocks">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <?php dfw_custom_excerpt(); ?>
    </header>
  </article>
</div>