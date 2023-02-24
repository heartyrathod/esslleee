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
            <h1>Services</h1>
            <div class="c-subline">
              <a href="index.html">Home</a><b>/</b>
              <p>Our Service</p>
            </div>
          </div>
        </div>
      </section>
      <!-- breadcrumbs end-->

      <!-- service content start -->
      <section class="c-service">
        <div class="container">     
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
          <div class="c-service-contents">                   
            <div class="c-service-content">                        
              <div class="c-service-content-img">
                <img src="<?php  echo $image[0]; ?>" width="100" height="100" class="img-fluid" alt="Recruitment">
                <div class="number">
                  1
                </div>
              </div>
              <div class="c-service-content-text">
                <div class="box-title"><?php echo $service->post_title; ?></div>
                <p><?php echo $service->post_content; ?> </p>
              </div>
            </div>
                    <?php } ?>
            <!-- <div class="c-service-content">
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
            </div> -->
            <!-- <div class="c-service-content">
              <div class="c-service-content-img">
                <img src="assets/image/service/process-3.png" width="72" height="100" class="img-fluid" alt="ICT Application Development & Cloud Development and Enablement">
                <div class="number">
                  3
                </div>
              </div> -->
              <!-- <div class="c-service-content-text">
                <div class="box-title">ICT Application Development & Cloud Development and Enablement</div>
                <p>Our development team love working with the latest and greatest development frameworks to solve complex business problems.
                  By harnessing the power of the cloud, our team can help design and build scalable enterprise solutions in Azure, AWS and Office365.
                  We have successfully delivered bespoke small and enterprise scale applications using a range of popular technologies – including Angular, React, Vue, .NET and Java.
                </p>
              </div> -->
            </div>
          </div>
        </div>
      </section>
      <!-- service content end -->


<?php
 get_footer();
?>