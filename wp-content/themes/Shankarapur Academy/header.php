<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php wp_head(); ?>
</head>

<body <?php body_class('index-page'); ?>>

<?php wp_body_open(); ?>

<header id="header" class="header fixed-top">



  <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a
              href="mailto:contact@example.com"><?php echo esc_html(get_theme_mod('topbar_email')); ?></a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span> <?php echo esc_html(get_theme_mod('topbar_phone')); ?></span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#!" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#!" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#!" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo d-flex align-items-center me-auto">
        <?php if (has_custom_logo()) :
          the_custom_logo();
        else : ?>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/image/logo.png"
               alt="<?php bloginfo('name'); ?>">
        <?php endif; ?>
      </a>

        </a>

        <!-- Navigation -->
      <nav id="navmenu" class="navmenu">
        <?php
          wp_nav_menu([
            'theme_location' => 'primary_menu',
            'container'      => false,
            'items_wrap'     => '<ul>%3$s</ul>',
            'walker'         => new shankarapur_Walker_Nav_Menu,
          ]);
        ?>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      </div>

    </div>

</header><!-- End Header -->




