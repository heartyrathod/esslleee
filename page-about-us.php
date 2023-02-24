<?php
/**

 * @package WordPress
 * @subpackage Cloudlifts
 * @since Cloudlifts 1.0
 */

get_header();

?>
 

 <section class="c-breadcrumbs">
        <div class="c-breadcrumbs-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/banner/banner.png" class="img-fluid" alt="banner"width="100%">
          <div class="c-breadcrumbs-text">
            <h1>About us</h1>
            <div class="c-subline">
              <a href="<?php echo site_url(); ?>">Home</a><b>/</b>
              <p>About us</p>
            </div>
          </div>
        </div>
      </section>





      <!-- about content start -->
      <section class="c-about-content">
        <div class="container">
          <div class="c-heading">
            <h2>We are specialised <span>ICT development</span> and recruitment Company</h2>
          </div>
          <div class="row">
          <?php if( have_rows('about_section', 16) ):
                while( have_rows('about_section', 16) ) : the_row();
                $key =get_row_index();
                    $about_section_image = get_sub_field('image');
                    $about_section_title = get_sub_field('title');
                    $about_section_text = get_sub_field('text');
                    if($key%2) {
            ?>  
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center reveal fade-left">            
              <div class="c-about-img">
                <img src="<?php echo $about_section_image['url']; ?>" width="815" height="580" alt="About">
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center reveal fade-right">
              <div class="c-about-text">
                <div class="c-heading"> 
                  <p class="subtitle">About us</p>
                  <h2><?php echo $about_section_title ?></h2>
                </div>
                <?php echo $about_section_text; ?>
              </div>
            </div>
            <?php } else {
                  ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center reveal fade-left column-4">
              <div class="c-about-text">
              <h2><?php echo $about_section_title ?></h2>
              <?php echo $about_section_text; ?>
              </div>
            </div>
             <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center reveal fade-right">
              <div class="c-about-img">
                
              <img src="<?php echo $about_section_image['url']; ?>" width="815" height="580" alt="About">
              </div>
            </div>
            <?php }
                    // End loop.
                      endwhile;
                    endif;
                  ?>
          </div>
        </div>
      </section>
      <!-- about content End -->





<?php
 get_footer();
?>