<?php
 function ajax_login(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );
    
    // Nonce is checked, get the POST data and sign user on
    $info = array();
    $info['user_login'] = esc_html($_POST['username']);
    $info['user_password'] = $_POST['password'];
    $info['remember'] = true;
    
    $user_signon = wp_signon( $info, false );
    if ( is_wp_error($user_signon) ){
    echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
    } else {
    echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
    }
    
    die();
    }

    function ajax_signup(){

        // First check the nonce, if it fails the function will break
        check_ajax_referer( 'ajax-nonce', 'security' );
        
        // Nonce is checked, get the POST data and sign user on
        
        $uname = esc_html($_POST['username']);
        $pswrd = esc_html($_POST['password']);
        $email = esc_html($_POST['email']);
        
    
        $user_signup = wp_create_user( $uname, $pswrd ,$email );
        if ( is_wp_error($user_signup) ){
            echo json_encode(array('signup'=>false, 'message'=>__('Sign up failed!')));
        } else {
            echo json_encode(array('signup'=>true, 'message'=>__('Signup successful, redirecting to login page')));
        }
        
        die();
    }