<?php
function poly_footer_customize_register($wp_customize){

    // Panel Theme Options
    $wp_customize->add_panel(
        'footer_main', 
        array(
            'title' => 'Footer',   
            'description' => '<p>Footer Main Panel</p>',         
            'priority' => 160
          )
    );

    // Section
    $wp_customize->add_section( 
        'poly_footer_main_section', 
        array(
            'title' => __( 'Footer Main Section' ),
            'panel' => 'footer_main',
            'priority' => 160       
        ) );
  
    // Settings
    poly_footer_customize_settings($wp_customize);
}