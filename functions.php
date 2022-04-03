<?php
/* 
* Define me some sidebars
*********************************/
if (function_exists('register_sidebar')) {
    register_sidebar (array ('name'=>'Left Sidebar',
    'id'=>'sidebar-left',
    'description'=> 'Left sidebar for use on content pages',
    'before_widget'=>'<section class="widget-container">',
    'after_widget'=>'</section> <!-- widget-container end -->',
    'before_title'=>'<div class="widget-title"><h3>',
    'after_title'=>'</h3> </div> <!-- widget-title end -->'
));
    register_sidebar (array ('name'=>'Right Sidebar',
    'id'=>'sidebar-right',
    'description'=> 'Right sidebar for use on content pages',
    'before_widget'=>'<section class="widget-container">',
    'after_widget'=>'</section> <!-- widget-container end -->',
    'before_title'=>'<div class="widget-title"><h3>',
    'after_title'=>'</h3> </div> <!-- widget-title end -->'
));
    register_sidebar (array ('name'=>'Footer Left ',
    'id'=>'footer-left',
    'description'=> 'Footer widget to the left',
    'before_widget'=>'<section class="footer-container">',
    'after_widget'=>'</section> <!-- footer-container end -->',
    'before_title'=>'<div class="footer-title"><h3>',
    'after_title'=>'</h3> </div> <!-- footer-title end -->'
));
    register_sidebar (array ('name'=>'Footer Middle',
    'id'=>'footer-middle',
    'description'=> 'Footer widget in the middle',
    'before_widget'=>'<section class="footer-container">',
    'after_widget'=>'</section> <!-- footer-container end -->',
    'before_title'=>'<div class="footer-title"><h3>',
    'after_title'=>'</h3> </div> <!-- footer-title end -->'
));
    register_sidebar (array ('name'=>'Footer Right ',
    'id'=>'footer-right',
    'description'=> 'Footer widget to the right',
    'before_widget'=>'<section class="footer-container">',
    'after_widget'=>'</section> <!-- footer-container end -->',
    'before_title'=>'<div class="footer-title"><h3>',
    'after_title'=>'</h3> </div> <!-- footer-title end -->'
));
}
/* 
* Give the theme support for changing Header
====================================================================*/
add_theme_support ('custom-header', array (
    'width' => "1400",
    'height' => 500,
    'flex-height' => true,
    'flex-width' => true,
    'default-image' => get_template_directory_uri() . '/images/default_header.png',
    'uploads' => true
));

/* 
* Give the theme support for changing Logo
====================================================================*/
add_theme_support ('custom-logo', array (
    'height' => 60,
    'width' => 280,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array( 'site-title', 'site-description' ),
));

/* 
* Give the theme support for changing background
====================================================================*/
add_theme_support ('custom-background', array (
    'default-color' => 'FFFFFF',
    
));

/* 
* Give the theme support for the menu
====================================================================*/
register_nav_menu ('primary', 'Menu in header');

?>