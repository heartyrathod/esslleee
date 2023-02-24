<?php
/**
 * .
 * @link http://192.168.1.2/wordpress/cloudlifts-html/
 * @package WordPress
 * @subpackage Cloudlifts
 * @since Cloudlifts 1.0
 */

get_header();

?>

    <!-- Main start -->
    <main class="c-main">

      <!-- Banner start -->
      <section class="c-banner">
        <div class="container">
          <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="c-banner-text">
                <h1>We are specialised<span> ICT development </span>and recruitment Company since 2018</h1>
                <p>Cloudlift has specialised in providing business and information technology solutions to Federal Government since 2018.</p>
                <a href="<?php echo site_url(); ?>" class="c-btn">Read More</a>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- Banner End -->



      <!-- About start -->
      <?php $about_image =get_field( "image", 16 ); ?>
      <section class="c-about">
        <div class="container">
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center reveal fade-left">
              <div class="c-about-img">
                <img src="<?php echo $about_image['url']; ?>" width="100%" height="580" alt="About">
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center reveal fade-right">
              <div class="c-about-text">
                <div class="c-heading">
                  <p class="subtitle">About us</p>
                     <h2><?php echo get_field( "title", 16 ); ?></h2> 
                </div>
                <?php echo get_field( "text", 16 ); ?>                
                <a href="#" class="c-btn"> Read More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About End -->



      <!-- our service start-->
      
      <section class="c-service">
        <div class="container">
          <div class="c-heading">
            <p>What we do</p>
            <h2>Our Services</h2>
          </div>
          <div class="row">
          <?php
              $args = array(
                  'numberposts' => -1,
                  'post_type'   => 'service',
                  'order' => 'ASC', 
                );

                $latest_service = get_posts( $args );
                foreach($latest_service as $service){
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $service->ID ), 'single-post-thumbnail' );                   
                
              ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
              <a href="<?php echo get_permalink($service->ID); ?>" class="c-service-content">
                <div class="c-service-content-img">
                <img src="<?php  echo $image[0]; ?>" alt="">
                  <div class="number">
                    1
                  </div>
                </div>
                <div class="c-service-content-text">
                  <div class="box-title"><?php echo $service->post_title; ?></div>
                  <p><?php echo $service->post_content; ?></p>
                </div>
              </a>
            </div>
            <?php } ?>
            <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
              <a href="service.html" class="c-service-content">
                <div class="c-service-content-img">
                  <img src="assets/image/service/process-2.png" width="100" height="86" class="img-fluid" alt="Payroll Processing">
                  <div class="number">
                    2
                  </div>
                </div>
                <div class="c-service-content-text">
                  <div class="box-title">Payroll Processing</div>
                  <p>Our payroll service, offered exclusively to our contractors, provides a full range of features and insurances</p>
                </div>
              </a>
            </div> 
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
              <a href="service.html" class="c-service-content">
                <div class="c-service-content-img">
                  <img src="assets/image/service/process-3.png" width="72" height="100" class="img-fluid" alt="ICT Application Development & Cloud Development and Enablement">
                  <div class="number">
                    3
                  </div>
                </div>
                <div class="c-service-content-text">
                  <div class="box-title">ICT Application Development & Cloud Development and Enablement</div>
                  <p>Our development team love working with the latest and greatest development frameworks to solve complex business problems.</p>
                </div>
              </a>
            </div>
          </div>-->
        </div> 
      </section>
      <!-- our service End -->





      <!-- why us candidate start -->


      <section class="c-why-us">
        <div class="container">
          <div class="c-heading">
            <p>Why Us Candidate</p>
            <h2>So why choose <span>Cloudlifts?</span></h2>
            <h3>It is important to choose the recruitment partner you feel most comfortable and assured will always do the right thing, whether it’s your first job, a new job, a career change, a promotion or re-entering the workforce after a break.</h3>
          </div>
          <div class="row">
          <?php
              $args = array(
                  'numberposts' => -1,
                  'post_type'   => 'why_us',
                  'order' => 'ASC', 
                );

                $latest_why_us = get_posts( $args );
                foreach($latest_why_us as $why_us){
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $why_us->ID ), 'single-post-thumbnail' );                                    
              ?>
            <div class="col-xxl-3 col-xl-3  col-lg-3 col-md-6 col-sm-6 col-12 reveal fade-left">
              <div class="c-card">
                <div class="c-card-body">
                  <div class="c-card-img">
                    <img src="<?php  echo $image[0]; ?>" width="347" height="229" class="img-fluid" alt="We are Boutique owner-operator business">
                  </div>
                  <div class="c-card-text">
                    <a href="<?php echo get_permalink($why_us->ID); ?>"><?php echo $why_us->post_title; ?>
                    </a>
                    <p><?php echo $why_us->post_content; ?></p>
                  </div>
                </div>
                <a href="<?php echo get_permalink($why_us->ID); ?>" class="c-card-link">Read more...</a>
              </div>
            </div>
            <?php } ?>

            <!-- <div class="col-xxl-3 col-xl-3  col-lg-3 col-md-6 col-sm-6 col-12 reveal fade-right">
              <div class="c-card">
                <div class="c-card-body">
                  <div class="c-card-img">
                    <img src="assets/image/whyus/w2.png" width="347" height="229" class="img-fluid" alt="100 % Transparent and Flat fee structure">
                  </div>
                  <div class="c-card-text">
                    <a href="whyus.html">100 % Transparent and Flat fee structure
                    </a>
                    <p>We have open and transparent fee structure. Along with role submission we always share two figures to our candidate. What per...</p>
                  </div>
                </div>
                <a href="whyus.html" class="c-card-link">Read more...</a>
              </div>
            </div> -->
            <!-- <div class="col-xxl-3 col-xl-3  col-lg-3 col-md-6 col-sm-6 col-12 reveal fade-left">
              <div class="c-card">
                <div class="c-card-body">
                  <div class="c-card-img">
                    <img src="assets/image/whyus/w3.png" width="347" height="229" class="img-fluid" alt="1Our career advice and Mentoring services are free">
                  </div>
                  <div class="c-card-text">
                    <a href="whyus.html">Our career advice and Mentoring services are free
                    </a>
                    <p>It does not matter to us whether you’re starting out fresh from college, looking for work after prolonged break or you are se...</p>
                  </div>
                </div>
                <a href="whyus.html" class="c-card-link">Read more...</a>
              </div>
            </div> -->
            <!-- <div class="col-xxl-3 col-xl-3  col-lg-3 col-md-6 col-sm-6 col-12 reveal fade-right">
              <div class="c-card">
                <div class="c-card-body">
                  <div class="c-card-img">
                    <img src="assets/image/whyus/w4.png" width="347" height="229" class="img-fluid" alt="Locally owned.">
                  </div>
                  <div class="c-card-text">
                    <a href="whyus.html">Locally owned.
                    </a>
                    <p>If you want to work in ACT, you will benefit from our physical presence and expertise. If you wish to work outside...</p>
                  </div>
                </div>
                <a href="whyus.html" class="c-card-link">Read more...</a>
              </div> -->
            </div>
          </div>
          <div class="c-why-us-btn">
            <a href="<?php echo site_url('why-us'); ?>" class="c-btn">View all</a>
          </div>
        </div>
      </section>
      <!-- why us candidate end -->

      
      
      
      
      
       <!-- register start-->
       <section class="c-register">
        <div class="container">
          <div class="c-register-content">
            <div class="c-heading">
              <h2>Register with us so we can help you find a job</h2>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]'); ?>
            <!-- <form name="reg_form">
              <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-input">
                    <label for="f_name">First Name</label>
                    <input type="text" class="f_name" id="f_name" placeholder="First Name" required>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-input">
                    <label for="l_name">Last Name</label>
                    <input type="text" class="l_name" id="l_name" placeholder="Last Name" required>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-input">
                    <label for="email">E-mail</label>
                    <input type="email" class="email" id="email" placeholder="enter your mail" required>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-input">
                    <label for="phone">Phone</label>
                    <input type="text" class="phone" id="phone" placeholder="+91 123 456 7897" required>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-input">
                    <label for="town">Town / City</label>
                    <input type="text" class="twon" id="twon" placeholder="enter your city name" required>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-input">
                    <label for="country">Country</label>
                    <input type="text" class="country" id="country" placeholder="enter your country name" required>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-input">
                    <label for="linkedin">Linkedin profile url</label>
                    <input type="text" class="linkedin" id="linkedin" placeholder="http.igexsolutions.in" required>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-input">
                    <label for="resume">resume</label>
                    <input type="file" class="resume" id="resume" placeholder="doc, docx, pdf, ppt, pptx" required>

                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-input">
                    <label for="skills">Your Key skills</label>
                    <input type="text" class="skills" id="skills" placeholder="enter your key skills" required>
                  </div>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-input">
                    <label>About Your Self</label>
                    <textarea placeholder="Tell us about your self" rows="4"></textarea>
                    <div class="c-form-btn">
                      <button type="submit" class="c-btn">Send</button>
                    </div>
                  </div>
                </div>
              </div>
            </form> -->
          </div>

        </div>
      </section>
      <!-- register end -->
    </main>
    <!-- Main End -->


    <?php
 get_footer();
?>
