<?php
/**
 * The header.

 * @package WordPress
 * @subpackage Cloudlifts
 * @since Cloudlifts 1.0
 */


?>


    <!-- Footer start -->
    <footer class="c-footer">
      <div class="container">
        <div class="c-footer-link">
          <h5>Quick Links</h5>
          <?php
              wp_nav_menu( array('menu'=>'footer-menu'));
                // wp_nav_menu(array(
                //   'theme_location'=>'Secondary menu',
                //   'menu_class'=>'', 'container' => 'ul')
                // );
              ?>
          <!-- <ul>
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="#">About us</a>
            </li>
            <li>
              <a href="#">Services</a>
            </li>
            <li>
              <a href="#">Contact us</a>
            </li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
            <li>
              <a href="#">Terms & Conditions</a>
            </li>
          </ul> -->
        </div>
        <div class="c-copyright">
          <p>© 2022 <a href="index.html">Cloudlifts</a> All right Reserved</p>
          <p>Design & Developed by <a href="https://www.igexsolutions.com/" target="_blank">iGex Solutions</a></p>
        </div>
      </div>
    </footer>

    <!-- Footer End -->





    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js" type="text/javascript">
    </script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js" type="text/javascript"></script>



    <?php wp_footer(); ?>



