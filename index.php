<?php get_header(); ?>

<div class="custom-slider">
  <div class="slide active">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.jpg" alt="Slide 1">
  </div>
  <div class="slide">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide2.jpg" alt="Slide 2">
  </div>
  <div class="slide">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide3.jpg" alt="Slide 3">
  </div>
</div>


<div class="about-container">
  <div class="about-left">
    <h2 class="section-title">Himalayan Seeds</h2>
    <div class="underline"></div>
    <p>
      Himalayan Seeds was formally registered under the Company Act of 1996 at the Company Registrar Office on 15 June 1999 (1st Asar 2056 BS). The company was established and become operated as a result of the investment in shares by more than 55 shareholders. The formation of Himalayan Seeds is a central part of the seed marketing strategy that aims to promote the seed industry in Nepal. It is based on a concept of strengthening the foundations of the Nepal seed trade by establishing a quality product based on a firm foundation of high-quality Breeder’s and subsequent generation seeds.
    </p>
    <a href="<?php echo home_url('/about'); ?>" class="about-btn">More…</a>
  </div>

  <div class="about-right">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.jpg" alt="Company Building">
  </div>
</div>




<!-- <section class="hero">
  <div class="container">
    <div class="main-content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post-card">
          <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumb"><?php the_post_thumbnail(); ?></div>
          <?php endif; ?>
          <span class="category">
            <?php the_category(', '); ?>
          </span>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_excerpt(); ?></p>
          <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
        </div>
      <?php endwhile; else : ?>
        <p>No posts found.</p>
      <?php endif; ?>
    </div>

    <aside class="sidebar">
        <?php wp_nav_menu(); ?>
      <?php get_search_form(); ?>
      <div class="widget">
        <h3>Recent Posts</h3>
        <ul>
          <?php
          $recent_posts = wp_get_recent_posts(['numberposts' => 5]);
          foreach ($recent_posts as $post) :
            echo '<li><a href="' . get_permalink($post['ID']) . '">' . $post['post_title'] . '</a></li>';
          endforeach;
          ?>
        </ul>
      </div>
      <div class="widget">
        <h3>Recent Comments</h3>
        <?php
        $comments = get_comments(['number' => 3, 'status' => 'approve']);
        if ($comments) :
          foreach ($comments as $comment) :
            echo '<p>' . $comment->comment_author . ': ' . wp_trim_words($comment->comment_content, 10) . '</p>';
          endforeach;
        else :
          echo '<p>No comments to show</p>';
        endif;
        ?>
      </div>
    </aside>
  </div>
</section> -->


<script>
let slides = document.querySelectorAll('.custom-slider .slide');
let index = 0;

function showSlide() {
  slides.forEach(slide => slide.classList.remove('active'));
  slides[index].classList.add('active');
  index = (index + 1) % slides.length;
}

setInterval(showSlide, 4000);
</script>

<?php get_footer(); ?>
