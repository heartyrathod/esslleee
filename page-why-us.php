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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/banner/banner.png" class="img-fluid" alt="banner">
          <div class="c-breadcrumbs-text">
            <h1>Why Us Candidate</h1>
            <div class="c-subline">
              <a href="index.html">Home</a><b>/</b>
              <p>Why Us</p>
            </div>
          </div>
        </div>
      </section>
      <!-- breadcrumbs end-->

      <!-- why us start -->
      <section class="c-why-us">
        <div class="container">
          <div class="c-heading">
            <h2>So why choose <span>Cloudlifts?</span></h2>
          </div>
          <div class="row">
          <?php
              $args = array(
                  'numberposts' => -1,
                  'post_type'   => 'why_us',
                  'order' => 'ASC',
                );

                $latest_why_us = get_posts( $args );
                foreach($latest_why_us as $key=>$why_us){
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $why_us->ID ), 'single-post-thumbnail' );
                  if($key%2) {

             ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-flex align-items-center justify-content-center reveal fade-left">
              <div class="c-why-us-img">
                <img src="<?php  echo $image[0]; ?>" width="347" height="229" class="img-fluid" alt="We are Boutique owner-operator business">
              </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center reveal fade-right">
              <div class="c-why-us-text">
                <h3><?php echo $why_us->post_title; ?></h3>
                <p><?php echo $why_us->post_content; ?> </p>
              </div>
            </div>
            <?php } else {?>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center reveal fade-left column-3">
              <div class="c-why-us-text">
                <h3><?php echo $why_us->post_title; ?></h3>
                <?php echo $why_us->post_content; ?>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-flex align-items-center justify-content-center reveal fade-right column-4">
              <div class="c-why-us-img">
                <img src="<?php  echo $image[0]; ?>" width="347" height="229" class="img-fluid" alt="100 % Transparent and Flat fee structure">
              </div>
            </div>
            <?php } } ?>
            <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-flex align-items-center justify-content-center reveal fade-left column-5">
              <div class="c-why-us-img">
                <img src="assets/image/whyus/w3.png" width="347" height="229" class="img-fluid" alt="1Our career advice and Mentoring services are free">
              </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center reveal fade-right column-6">
              <div class="c-why-us-text">
                <h3>Our career advice and Mentoring services are free
                </h3>
                <p>It does not matter to us whether you’re starting out fresh from college, looking for work after prolonged break or you are seasoned professional. We try to understand and assess candidate’s profile and provide fit gap analysis against roles.</p>
                <p><b>We focus on building long term relationships</b> and we seek to act as trusted advisors over the lifetime of your career. Many of our best placements come from repeat candidates, with many talented candidates returning to us because we add value to their career choices over time.
                  If needed, we also provide resume help and mentoring service.
                </p>
                <p>Our services are free. Our candidate does not pay for a consultation or advice. We don’t charge to help you develop your resume or interview skills.</p>
              </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center reveal fade-left column-7">
              <div class="c-why-us-text">
                <h3>Locally owned.
                </h3>
                <p>If you want to work in <b>ACT</b>, you will benefit from our physical presence and expertise. If you wish to work outside of the ACT, you’ll benefit from our extensive professional networks in other major cities.</p>

              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-flex align-items-center justify-content-center reveal fade-right column-8">
              <div class="c-why-us-img">
                <img src="assets/image/whyus/w4.png" width="347" height="229" class="img-fluid" alt="Locally owned.">
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-flex align-items-center justify-content-center reveal fade-left column-9">
              <div class="c-why-us-img">
                <img src="assets/image/whyus/w2.png" width="347" height="229" class="img-fluid" alt="Ongoing relationship – we don’t disappear after placing candidate ">
              </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center reveal fade-right column-10">
              <div class="c-why-us-text">
                <h3>Ongoing relationship – we don’t disappear after placing candidate
                </h3>
                <p>Cloudlift our services continue after you start work, this is to ensure that you are settled and satisfied. To do this we maintain ongoing connections for up to 4 months for permanent roles and every 12 weeks throughout contracts.</p>

              </div> -->
            </div>
          </div>
      </section>
      <!-- why us end -->


























<?php
 get_footer();
?>