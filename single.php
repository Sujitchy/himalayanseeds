<?php get_header(); ?>

<main class="single-post-container">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="single-post">
      <header class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="post-meta">
          <span>📅 <?php echo get_the_date(); ?></span> |
          <span>✍️ <?php the_author(); ?></span> |
          <span>📂 <?php the_category(', '); ?></span>
        </div>
      </header>

      <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>

      <div class="post-content">
        <?php the_content(); ?>
      </div>

      <footer class="post-footer">
        <?php the_tags('<div class="post-tags">Tags: ', ', ', '</div>'); ?>
      </footer>
    </article>

    <nav class="post-navigation">
      <div class="prev-post"><?php previous_post_link('%link', '← %title'); ?></div>
      <div class="next-post"><?php next_post_link('%link', '%title →'); ?></div>
    </nav>

    <?php if (comments_open() || get_comments_number()) :
      comments_template();
    endif; ?>

  <?php endwhile; else : ?>
    <p>Sorry, the post you are looking for could not be found.</p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
