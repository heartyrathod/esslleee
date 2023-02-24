<?php
/**
 * The header.

 * @package WordPress
 * @subpackage Cloudlifts
 * @since Cloudlifts 1.0
 */


?>

<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Cloudlifts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudlifts</title>
    <!--Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- custome css -->
    <!-- <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/home.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet"> -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/favicon/favicon.png" type="image/x-icon">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- menu-drawer start -->
    <div class="c-menu-drawer">
      <div class="c-menu-drawer-wrap">
        <a href="index.html" class="c-menu-drawer-logo">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
       ?>
             <a href="<?php echo site_url(); ?>">
              <img src="<?php echo $image[0]; ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[1]; ?>" class="img-fluid">
            </a>        
        <div class="c-menu-drawer-navbar">
        <?php
               wp_nav_menu(array(
                  'theme_location'=>'primary-menu',
                  'menu_class'=>'', 'container' => 'ul')
                );
              ?>
          <!-- <ul class="c-menu-drawer-navbar-list">
            <li>
              <a href="index.html" class="active">Home</a>
            </li>
            <li>
              <a href="about.html">About us</a>
            </li>
            <li>
              <a href="service.html">Services</a>
            </li>
            <li>
              <a href="contact.html">Contact us</a>
            </li>
          </ul> -->
        </div>
      </div>
    </div>
    <!-- menu-drawer end -->
    <!-- overlay -->
    <div class="c-overlay"></div>
    <!-- Header start -->
    <header class="c-header">
      <div class="container">
        <div class="c-header-wrap">        
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
       ?>
             <a href="<?php echo site_url(); ?>">
              <img src="<?php echo $image[0]; ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[1]; ?>" class="img-fluid">
            </a> 
          <div class="c-header-navbar">
          <?php
                wp_nav_menu(array(
                  'theme_location'=>'primary-menu',
                  'menu_class'=>'', 'container' => 'ul')
                );
              ?>
            <!-- <ul class="c-navbar-list">
              <li>
                <a href="index.html" class="active">Home</a>
              </li>
              <li>
                <a href="about.html">About us</a>
              </li>
              <li>
                <a href="service.html">Services</a>
              </li>
              <li>
                <a href="contact.html">Contact us</a>
              </li>
            </ul> -->
          </div>
          <div class="c-header-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
          </div>
        </div>
      </div>
    </header>
    
    <!-- Header End -->
