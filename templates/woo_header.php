<!-- sub banner section -->
 <div class="banner-container sub-banner-section position-relative shop_banner" style="background: url(<?php echo get_template_directory_uri(); ?>/img/subscribe-bg.png)">
    <div class="banner-content sub-banner-content container">    
        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
            <p class="sub-banner-heading"><?php woocommerce_page_title(); ?></p>
        <?php endif; ?>
    </div> 
    <div class="banner-overlay"></div>
    <br>
    <div class="container mt-4 woo_breadcrumb text-secondary">
        <?php
            /**
             * Hook: woocommerce_before_main_content.
             *
             * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
             * @hooked woocommerce_breadcrumb - 20
             * @hooked WC_Structured_Data::generate_website_data() - 30
             */
            do_action( 'woocommerce_before_main_content' );
            ?> 
    </div>
</div>	     
    </div>
    <!-- End of sub banner section -->