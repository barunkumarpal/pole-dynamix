<?php
function poly_theme_support(){
    // Menus
    add_theme_support('menus');
    register_nav_menus( 
        [
            'main_menu' => 'Main Menu',
            'footer_list' => 'Footer List Menu',
            'quick_links' => 'Quick Links'
        ]
    );

    // Custom Logo
    add_theme_support('custom-logo');
        
    // Title Tag on head
    add_theme_support('title-tag');


    // Woocommerce
    add_theme_support('woocommerce');
    add_theme_support( 'wc-product-gallery-zoom' );
    // add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    // Hide Admin Bar
    // global $current_user; // Use global
    // get_currentuserinfo(); // Make sure global is set, if not set it.
    // if ( ! user_can( $current_user, "subscriber" ) ){
    //     show_admin_bar(false);
    // }

    if ( ! current_user_can( 'manage_options' ) ) {
        add_filter('show_admin_bar', '__return_false');
       }

    
}



