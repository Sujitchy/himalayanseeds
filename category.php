<?php get_header(); ?>

<section class="category-section">
  <div class="container">
    <h2 class="section-title">
      <?php single_cat_title(); ?>
    </h2>
    <div class="underline"></div>

    <?php if (have_posts()) : ?>
      <div class="post-grid">

        <?php while (have_posts()) : the_post(); ?>
          <div class="post-card">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
              </a>
            <?php endif; ?>

            <h3 class="post-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>

            <p class="post-excerpt">
              <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
            </p>

            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
          </div>
        <?php endwhile; ?>

      </div>

      <div class="pagination">
        <?php the_posts_pagination(); ?>
      </div>

    <?php else : ?>
      <p>No posts found in this category.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
