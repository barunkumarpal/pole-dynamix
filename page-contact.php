<?php get_header(); ?>
    <!-- sub banner section -->
    <div class="banner-container sub-banner-section position-relative" style="background: url(<?php echo get_template_directory_uri(); ?>/img/subscribe-bg.png)">
      <div class="banner-content sub-banner-content container">
        <p>Get in touch with us for pole fitness</p>
        <p class="sub-banner-heading"><?php echo get_the_title();?></p>
      </div>
      <div class="banner-overlay"></div>
    </div>
    <!-- End of sub banner section -->
    <!-- Contact section -->
    <section class="contact-page-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading-holder"><h1 class="main-heading">Get In Touch</h1></div>
              <?php echo do_shortcode('[contact-form-7 id="195" title="Contact form 1"]'); ?>            
          </div>
          <div class="p-0 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9491.134415511688!2d-2.3301007!3d53.5080609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x46c0f9bd7cc93636!2sPole%20Dynamix!5e0!3m2!1sen!2sin!4v1584624392517!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Contact section -->
<?php get_footer(); ?>