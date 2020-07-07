<!DOCTYPE html>
<html lang="en">
  <head>   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <?php wp_head();  
    
    global $woocommerce;?>
  </head>
  <body <?php body_class(); ?>>
    <!--header-->
    <header class="">
      <div class="very-top-navbar d-flex">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 d-lg-flex d-none top-left-detail">
              <a href="tel: 0161 727 8789">
                <i class="fas fa-phone-alt"></i>
                For Enquiries contact us on <?php echo get_field('phone_number', 'option'); ?>
              </a>
            </div>
            <div class="col-lg-8 col-12 top-detail">
              <div class="btn-group currency">
                <button type="button" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                £ <span class="c-span">Currency</span>
                </button>
                <div class="dropdown-menu">
                  <!-- <a class="dropdown-item" href="#">£ Currency 1</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">£ Currency 2</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">£ Currency 3</a> -->
                  <?php echo do_shortcode( '[woocs]' ); ?>
                </div>
              </div>
              <?php 
              if(is_user_logged_in()){
                $my_account_page_id  = wc_get_page_id( 'myaccount' );
                $my_account_page_url = $my_account_page_id ? get_permalink( $my_account_page_id ) : '';
              ?>              
                <div class="log-div">
                  <a href="<?php echo $my_account_page_url; ?>">
                    <span class="log-detail">
                      <i class="fas fa-user"></i>
                      <p class="u-name">My Account</p>
                    </span> 
                  </a>                 
                </div>
              <?php } else { ?>
                <div class="log-div" data-toggle="modal" data-target="#modalLRForm">
                  <span class="log-detail">
                    <i class="fas fa-user"></i>
                    <p class="u-name">Log In</p>
                  </span>
                  <span class="log-detail">
                    <i class="fas fa-user-plus"></i>
                    <p class="u-name">Register</p>
                  </span>
                </div>
              <?php } ?>
              <!--Modal: Login / Register Form-->
              <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog cascading-modal" role="document">
                  <!--Content-->
                  <div class="modal-content">

                    <!--Modal cascading tabs-->
                    <div class="modal-c-tabs">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                            Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                            Register</a>
                        </li>
                      </ul>

                      <!-- Tab panels -->
                      <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                          <!--Body-->
                          <div class="modal-body mb-1">
                            <div class="md-form form-sm">
                              <i class="fas fa-envelope prefix"></i>
                              <label>Enter Your Email ID</label>
                              <input type="email" class="form-control" placeholder="Your Username" id="username">
                            </div>

                            <div class="md-form form-sm">
                              <i class="fas fa-lock prefix"></i>
                              <label>Enter Your Password</label>
                              <input type="password" class="form-control" placeholder="Your Password" id="userpwd">
                            </div>
                            <div class="text-center mt-2">
                              <button class="btn green-button" id="login_submit">Log in</button>
                            </div>
                            <div id="status"></div>
                            <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                          </div>
                          <!--Footer-->
                          <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                              <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                              <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                            </div>
                            <button type="button" class="btn green-button ml-auto" data-dismiss="modal">Close</button>
                          </div>

                        </div>
                        <!--/.Panel 7-->

                        <!--Panel 8-->
                        <div class="tab-pane fade" id="panel8" role="tabpanel">

                          <!--Body-->
                          <div class="modal-body" id="signup_modal">
                            <div class="md-form form-sm">
                              <i class="fas fa-envelope prefix"></i>
                              <label>Enter Your Username</label>
                              <input type="email"  class="form-control" placeholder="Your Username" id="uname">
                            </div>

                            <div class="md-form form-sm">
                              <i class="fas fa-envelope prefix"></i>
                              <label>Enter Your Email</label>
                              <input type="email" class="form-control" placeholder="Your Email" id="u_email">
                            </div>

                            <div class="md-form form-sm">
                              <i class="fas fa-lock prefix"></i>
                              <label>Enter Your Password</label>
                              <input type="password" class="form-control" placeholder="Your Password" id="u_pwd">
                            </div>

                            <div class="md-form form-sm">
                              <i class="fas fa-lock prefix"></i>
                              <label>Re-enter Password</label>
                              <input type="password" class="form-control" placeholder="Reset Password" id="conf_pwd">
                            </div>

                            <div class="text-center form-sm">
                              <button class="btn green-button" id="signup">Sign up</button>
                            </div>
                            <div id="status"></div>
                            <?php wp_nonce_field( 'ajax-nonce', 'security' ); ?>

                          </div>
                          <!--Footer-->
                          <div class="modal-footer">
                            <div class="options text-right">
                              <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn green-button" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                        <!--/.Panel 8-->
                      </div>

                    </div>
                  </div>
                  <!--/.Content-->
                </div>
              </div>
              <!--Modal: Login / Register Form-->
              <div class="all-icon-holder">
                <?php if(is_user_logged_in()){
                  $wishlist_count = YITH_WCWL()->count_products();
                ?>
                  <!-- <a href="#"><i class="fas fa-exchange-alt"></i></a> -->
                  <a href="<?php echo esc_url(site_url('/wishlist')); ?>">
                    <i class="fas fa-heart"></i>
                    <span class="count"><?php echo $wishlist_count; ?></span>
                  </a>                
                  <a href="<?php echo $woocommerce->cart->get_cart_url();?>">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="count">
                      <?php 
                        echo $woocommerce->cart->cart_contents_count;
                      ?>
                    </span>
                  </a>
               <?php } else {?>                  
                  <a href="#">
                    <i class="fas fa-heart"></i>
                    <span class="count">0</span>
                  </a>                
                  <a href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="count">0</span>
                  </a>
               <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="search-div">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 offset-lg-8">
              <!-- <form class="input-group md-form form-sm form-2 pl-0">
                <input class="form-control" type="text" placeholder="Search...">
                <div class="input-group-append">
                  <button type="submit" class="input-group-text"><i class="fas fa-search text-grey" aria-hidden="true"></i></button>
                </div>
              </form> -->
              <?php get_search_form(); ?>
              <i class="fas fa-times d-none"></i>
            </div>
          </div>
        </div>        
      </div>
      <div class="search-ico d-none">
        <i class="fas fa-search"></i>
      </div>
      <section class="navbar-menu">
        <div class="container">
          <nav class="navbar navbar-expand-xl navbar-light cstm-navbar">  
          <?php  
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
               
                if ( has_custom_logo() ) { ?>
                    <a class="navbar-brand" href="<?php echo site_url('/');?>">
                    <img class="img-fluid" src="<?php echo $logo[0]; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
                    </a>                       
                <?php } ?>           
            <!-- <a class="navbar-brand" href="index.html">
              <img class="img-fluid" src="img/logo.jpg" alt="logo">
            </a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
                if(has_nav_menu( 'main_menu' )){
                    // $args = [
                    //     'theme_location' => 'main_menu',
                    //     'container'     => '',
                    //     'menu_class'=> 'navbar-nav m-auto',                        
                    //     'depth' => 3,
                    //     'walker' => new primary_nav_walker()
                    //     'walker' => new BootstrapBasicMyWalkerNavMenu()
                    // ];

                    // wp_nav_menu($args);

                    $menu_args = array(
                      'menu'    => 'Main Menu',
                      'theme_location' => 'main_menu',
                      'depth'    => 2,
                      'container'   => false,
                      'menu_class' => 'navbar-nav m-auto',
                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker() 
                     );
                 wp_nav_menu($menu_args);
    
                }
              
              ?>
            </div>
          </nav>
        </div>
      </section>
    </header>
    <!--end of header-->