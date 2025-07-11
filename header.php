<!DOCTYPE html>
<html <?php language_attributes(); ?>>   
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <header class="site-header">
    <div class="top-bar">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Himalayan Seeds Logo">
        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
      </div>
      <div class="contact-info">
        <div class="phone"><span>📞</span> +977-1-00000000</div>
        <div class="email"><span>📧</span> himalayanseeds@gmail.com</div>
      </div>
    </div>

    <nav class="main-nav">
      <ul>
      <?php wp_nav_menu(); ?>
        <!-- <li><a href="<?php echo site_url(); ?>">Home</a></li>
        <li><a href="<?php echo home_url('/about-us'); ?>">About Us</a></li>
        <li><a href="<?php echo home_url('/our-products'); ?>">Our Products</a></li> -->
        <li><a href="#">Information</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <div class="date-time">
        <?php echo do_shortcode('[ndu_today_date]');?>
      </div>
    </nav>
  </header>

</head>
<body >

</body>
</html>