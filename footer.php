 <!--footer-->
 <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-5 text-lg-left text-sm-left text-center footer-div">
            <h4>About</h2>
            <p class="footer-abt-content">
              <?php
              if(get_theme_mod('poly_footer_about')){
                echo get_theme_mod('poly_footer_about');
              }
              ?>
            </p>           
          </div>
          <div class="col-lg-4 offset-lg-1 col-sm-6 offset-sm-1 text-lg-left text-sm-left text-center footer-div quick-link">
            <h4>Quick Links</h2>
            <?php 
              wp_nav_menu(
                [
                  'theme_location' => 'quick_links'

                ]
              );
            ?>
          </div>
          <div class="col-lg-4 text-lg-left text-sm-left text-center footer-div get-touch">
            <h4>Get In Touch</h2>
            <?php 
            $address = get_field('address', 'option'); 
            $email = get_field('email_id', 'option'); 
            $phone = get_field('phone_number', 'option'); 
           
            ?>
            <ul>             
              <li><i class="fas fa-map-marker-alt"></i> <?php echo $address; ?></li>
              <?php if($phone): ?>
                  <li><a href="tel: <?php echo $phone; ?>"><i class="fas fa-phone-alt"></i> <?php echo $phone; ?></a></li>
              <?php endif; if($email): ?>
              <li><a href="mailto: <?php echo $email; ?>"><i class="fas fas fa-envelope"></i> <?php echo $email; ?></a></li>
              <?php endif; ?>            
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright-div">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-lg-left text-center">
          <?php
              if(get_theme_mod('poly_footer')){
                echo get_theme_mod('poly_footer');
              }
            ?>
          </div>
          <div class="col-lg-5 text-lg-right text-center">            
            <?php
                if(has_nav_menu( 'footer_list' )){
                    $args = [
                        'theme_location' => 'footer_list',
                        'container'     => '',
                        'menu_class'=> 'footer-list',                        
                        'depth' => 1                        
                    ];

                    wp_nav_menu($args);
                }              
              ?>
          </div>
        </div>
      </div>
    </div>
    <!-- End of footer -->
    <!-- Go to top -->
    <div class="go-top">
      <i class="fas fa-sort-up"></i>
    </div>
    <!-- End of Go to top -->
   
    <?php wp_footer(); ?>
    
  </body>
</html>