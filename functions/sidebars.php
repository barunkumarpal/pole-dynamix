<?php
/**
 * Add a Widget sidebar.
 */
function poly_sidebars() {
    register_sidebar( array(
        'name'          => 'Email Subscription',
        'id'            => 'email_subs',
        'description'   => 'Widgets in this area will be shown on footer e-mail subscription area',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
