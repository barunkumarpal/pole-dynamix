<?php
function poly_footer_customize_settings($wp_customize){   

// Setting
$wp_customize->add_setting(
    'poly_footer_about',
    []
);

// Control
$wp_customize->add_control( 
    'poly_footer_about_ctrl', 
    array(
        'label' => __( 'Footer About', 'eshop' ),
        'type' => 'textarea',            
        'section' => 'poly_footer_main_section',          
        'settings' => 'poly_footer_about'
    )
);

 // Setting
 $wp_customize->add_setting(
    'poly_footer_contact',
    []
);
// Control
$wp_customize->add_control( 
    'poly_contact_no_control', 
    array(
        'label' => 'Contact No.',
        'type' => 'text',            
        'section' => 'poly_footer_main_section',          
        'settings' => 'poly_footer_contact'
    )
); 


}