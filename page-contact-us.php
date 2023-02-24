<?php
/**

 * @package WordPress
 * @subpackage Cloudlifts
 * @since Cloudlifts 1.0
 */

get_header();

?>
 
   <!-- breadcrumbs start-->
   <section class="c-breadcrumbs">
        <div class="c-breadcrumbs-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/banner/banner.png" class="img-fluid" alt="banner">
          <div class="c-breadcrumbs-text">
            <h1>Contact us</h1>
            <div class="c-subline">
              <a href="index.html">Home</a><b>/</b>
              <p>Contact us</p>
            </div>
          </div>
        </div>
      </section>
      <!-- breadcrumbs end-->

      <!-- contact content start -->
      <section class="c-contact">
        <div class="container">
          <div class="c-heading">
            <h2>Register with us so we can help you find a job</h2>
          </div>
          <div class="c-register-content">
          <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]'); ?>
      
            <!-- <form>
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
      <!-- contact content end -->


















<?php
 get_footer();
?>