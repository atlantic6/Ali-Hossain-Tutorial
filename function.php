<?php 
/**
 * my theme function
 */

 // Theme Title
add_theme_support('title-tag');

// Theme CSS and JQuery File calling
function ruby_css_js_calling(){
wp_enqueue_style('ruby-style', get_stylesheet_uri());
wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.3', 'all');
wp_enqueue_style('bootstrap');
wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
wp_enqueue_style('custom');

// JQuery loading 
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(),'5.3.3', 'true');
wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(),'1.0.0', 'true');


}

add_action('wp_enqueue_scripts', 'ruby_css_js_calling');


// Google Font API calling 
function ruby_google_fonts(){
  wp_enqueue_style('ruby_google_fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet', false);
}
add_action('wp_enqueue_scripts', 'ruby_google_fonts');



// Theme Function 
function ruby_customizer_register($wp_customize){ //$wp_customize -- it's a wordpress function and need to write accurately.
  $wp_customize->add_section('ruby_header_area', array(
    'title' =>__('Header Area', 'rubymarche'), // here rubymarche is a text domain from style.css for translate header area name.
    'description'=> 'if you intersted to update your header area, you can do it' // here add a discription in the setting area.
));

  $wp_customize->add_setting('ruby_logo', array(
    'default' => get_bloginfo('template_directory') .'/img/logo.png',

  ));
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'ruby_logo', array(
    'label' => 'logo Upload', 
    'description'=> 'if you intersted to update your logo you can do it',
    'setting' => 'ruby_logo', 
    'section'=> 'ruby_header_area'
  )));

}

add_action('customize_register','ruby_customizer_register');


// Nav Menu Register 
register_nav_menu('main_menu', __('Main Menu', 'rubymarche'));
