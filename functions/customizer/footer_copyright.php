<?php
function poly_customize_register($wp_customize){
   // Section
   $wp_customize->add_section( 
    'poly_copyright_section', 
    array(
        'title' => __( 'Footer Copyright' ),    
        'panel' => 'footer_main',
        'priority' => 160       
    ) );

    // Setting
    $wp_customize->add_setting(
        'poly_footer',
        []
    );
    // Control
    $wp_customize->add_control( 
        'poly_copyright_control', 
        array(
            'label' => 'Footer Copyright',
            'type' => 'text',            
            'section' => 'poly_copyright_section',          
            'settings' => 'poly_footer'
        )
    ); 

   
    
}