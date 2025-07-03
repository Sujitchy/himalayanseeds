<?php get_header(); ?>

<div class="page-wrapper">
  <div class="page-header">
    <h1><?php the_title(); ?></h1>
    <?php if (has_post_thumbnail()) : ?>
      <div class="page-thumbnail">
        <?php the_post_thumbnail('large'); ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="page-content">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    else :
      echo '<p>No content found.</p>';
    endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>
