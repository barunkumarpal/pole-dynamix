<?php
define('DEV_MODE', true);
$path = get_theme_file_path();

// Enqueue Styles CSS & JS
include( $path.'/functions/enqueue.php');
add_action('wp_enqueue_scripts', 'poly_enqueue_styles');

// Add Theme Support
include( $path.'/functions/support.php');
add_action('after_setup_theme', 'poly_theme_support');

// Nav Walker
// include( $path.'/functions/main_menu_nav_walker.php');
// include( $path.'/functions/bootstrap_nav_walker.php');
// include( $path.'/functions/custom_bootstrap_nav_walker.php');
include( $path.'/functions/wp-bootstrap-navwalker.php');

// Customizer
include( $path.'/functions/customizer/footer_copyright.php');
add_action('customize_register','poly_customize_register');

include( $path.'/functions/customizer/footer_main_settings.php');
include( $path.'/functions/customizer/footer_main.php');
add_action('customize_register','poly_footer_customize_register');

// AJAX
include( $path.'/functions/ajax_functions.php');
 // Execute the action only if the user isn't logged in
 // Main function ajax_login_init writtent in /functions/enqueue.php
 if (!is_user_logged_in()) {
        add_action('init', 'ajax_init');    
    }

// ACF Options Pages
include( $path.'/functions/acf_option_pages.php');

// Woocommerce Remove Actions
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Add to Cart', 'woocommerce' ); 
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Add to Cart', 'woocommerce' );
}


// Sidebars 
include( $path.'/functions/sidebars.php');
add_action( 'widgets_init', 'poly_sidebars' );

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 7 );

    