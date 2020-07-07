<?php
function poly_enqueue_styles(){
    $ver = DEV_MODE ? time(): false; 
    $src = get_theme_file_uri();

      // CSS
      wp_enqueue_style( 'style', get_stylesheet_uri() );
      wp_enqueue_style( 'style_main', $src.'/css/style.css', [], $ver, $media = 'all' );
      wp_enqueue_style( 'all_min', $src.'/css/all.min.css', [], $ver, $media = 'all' );
      wp_enqueue_style( 'jquery_fancybox', $src.'/css/jquery.fancybox.min.css', [], $ver, $media = 'all' );
      wp_enqueue_style( 'owl_carousel', $src.'/plugin/owlcarousel/dist/assets/owl.carousel.min.css', [], $ver, $media = 'all' );
      wp_enqueue_style( 'owl_theme_default', $src.'/plugin/owlcarousel/dist/assets/owl.theme.default.min.css', [], $ver, $media = 'all' );
      wp_enqueue_style( 'bootstrap_css', $src.'/css/bootstrap.min.css', [], $ver, $media = 'all' );
      // wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900|Roboto:300,400,500,700&display=swap');
      wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900|Roboto:300,400,500,700&display=swap', false ); 
  
        
      wp_enqueue_script( 'main_jquery', $src.'/js/jquery-3.4.1.min.js', array(), $ver, true );
      wp_enqueue_script( 'pooper_min', $src.'/js/popper.min.js', array(), $ver, true );
      wp_enqueue_script( 'bootstrap_min_js', $src.'/js/bootstrap.min.js', array(), $ver, true );
      wp_enqueue_script( 'default_js', $src.'/js/default.js', array(), $ver, true );
      wp_enqueue_script( 'jquery_fancybox_js', $src.'/js/jquery.fancybox.min.js', array(), $ver, true );
      wp_enqueue_script( 'owl_js', $src.'/plugin/owlcarousel/dist/owl.carousel.min.js', array(), $ver, true );

      // Custom JS
      wp_enqueue_script( 'custom_js', $src.'/js/custom.js', array('jquery'), $ver, true );

      // AJAX
      wp_register_script('ajax-login-script', get_template_directory_uri() . '/ajax-login-script.js', array('jquery') );
      wp_enqueue_script('ajax-login-script');
      
      wp_localize_script( 'ajax-login-script', 'ajax_login_object', array(
      'ajaxurl' => admin_url( 'admin-ajax.php' ),
      'redirecturl' => home_url(),
      'loadingmessage' => __('Sending user info, please wait...')
      ));
}

 // AJAX
 function ajax_init(){

  wp_register_script('ajax-script', get_template_directory_uri() . '/js/wp_ajax.js', array('jquery') );
  wp_enqueue_script('ajax-script');
  
  wp_localize_script( 'ajax-script', 'ajax_object', array(
  'ajaxurl' => admin_url( 'admin-ajax.php' ),
  'redirecturl' => home_url(),
  'loadingmessage' => __('Sending user info, please wait...')
  ));
  
  // Enable the user with no privileges to run ajax_login() in AJAX
  add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );

  // AJAX Signup
  add_action( 'wp_ajax_nopriv_ajaxsignup', 'ajax_signup' );
  }
  
 
      
 