<?php

// header menu
register_nav_menus(array('primary-menu' => 'header-menu'));





function pomerol_home_enqueue_scripts()
{

  if (is_front_page()) {
    wp_register_style('pom_carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1');
    wp_enqueue_style('pom_carousel');
    wp_register_style('pom_home_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_home_css');
  }  else if (is_page('about-us') ) {
    wp_register_style('pom_home_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_home_css');    
    wp_register_style('about-inner_min', get_stylesheet_directory_uri() . '/assets/css/about-inner.min.css', array(), '1');
    wp_enqueue_style('about-inner_min');
  }else if (is_page('services') ) {
    wp_register_style('pom_home_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_home_css');    
    wp_register_style('service-inner_min', get_stylesheet_directory_uri() . '/assets/css/service-inner.min.css', array(), '1');
    wp_enqueue_style('service-inner_min');
  }else if (is_page('contact-us') ) {
    wp_register_style('pom_home_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_home_css');    
    wp_register_style('contact.min', get_stylesheet_directory_uri() . '/assets/css/contact.min.css', array(), '1');
    wp_enqueue_style('contact.min');
  }else if (is_page('why-us') ) {
    wp_register_style('pom_home_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_home_css');    
    wp_register_style('whyus.min', get_stylesheet_directory_uri() . '/assets/css/whyus.min.css', array(), '1');
    wp_enqueue_style('whyus.min');
  } else {
    wp_register_style('pom_home_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_home_css');    
  }
}
add_action('wp_enqueue_scripts', 'pomerol_home_enqueue_scripts');


function pp_scripts()
{
 
  wp_enqueue_style( 'scripts', get_stylesheet_directory_uri().'/assets/js/jquery-3.6.1.min.js' );
  wp_enqueue_style( 'scripts', get_stylesheet_directory_uri().'/assets/js/jquery-3.6.1.min.js' );
  wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() .'/assets/js/script.js', array(), '', true );
}
add_action('wp_enqueue_scripts', 'pp_scripts');







function unhook_parent_style()
{
  wp_dequeue_style('twenty-twenty-one-style');
  wp_deregister_style('twenty-twenty-one-style');

  wp_dequeue_style('twenty-twenty-one-print-style');
  wp_deregister_style('twenty-twenty-one-print-style');
  wp_dequeue_style('parent-style');
  wp_deregister_style('parent-style');
}
add_action('wp_enqueue_scripts', 'unhook_parent_style', 20);

function project_dequeue_unnecessary_scripts()
{
  wp_dequeue_script('twenty-twenty-one-primary-navigation-script');
  wp_deregister_script('twenty-twenty-one-primary-navigation-script');

  wp_dequeue_script('twenty-twenty-one-responsive-embeds-script');
  wp_deregister_script('twenty-twenty-one-responsive-embeds-script');
}
add_action('wp_print_scripts', 'project_dequeue_unnecessary_scripts');

// add_action('wp_enqueue_scripts', 'adt_home_enqueue_scripts');

//remove srcset
function remove_max_srcset_image_width($max_width)
{
  return false;
}
add_filter('max_srcset_image_width', 'remove_max_srcset_image_width');



//footer menu
register_nav_menus(array('primary-menu' => 'footer-menu'));





?>