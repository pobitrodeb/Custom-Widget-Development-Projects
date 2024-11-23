<?php

function blogthemye_setup(){
        // Make theme available for translation
        load_theme_textdomain('blogthemye', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head
        add_theme_support('automatic-feed-links');
    
        // Let WordPress manage the document title
        add_theme_support('title-tag');
    
        // Enable support for Post Thumbnails on posts and pages
        add_theme_support('post-thumbnails');
    
        // Register a primary menu
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'blogthemye'),
        ));
}

add_action('after_theme_setup', 'blogthemye_setup');

function blogthemye_enqueue_scripts() {
    // Stylesheets
    wp_enqueue_style('blogthemye-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
    wp_enqueue_style('blogthemye-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0');
    wp_enqueue_style('blogthemye-owl-carousel', get_template_directory_uri() . '/css/owl.css', array(), '2.3.4');
    wp_enqueue_style('blogthemye-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_style('blogthemye-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0');

    // Favicon
    wp_enqueue_style('blogthemye-favicon', get_template_directory_uri() . '/images/favicon.ico', array(), null);

    // Scripts
    wp_enqueue_script('blogthemye-jquery', get_template_directory_uri() . '/js/jquery-2.1.4.js', array(), '2.1.4', true);
    wp_enqueue_script('blogthemye-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('blogthemye-jquery'), '4.0.0', true);
    wp_enqueue_script('blogthemye-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('blogthemye-jquery'), '2.3.4', true);
    wp_enqueue_script('blogthemye-wow', get_template_directory_uri() . '/js/wow.js', array('blogthemye-jquery'), '1.1.2', true);
    wp_enqueue_script('blogthemye-script', get_template_directory_uri() . '/js/script.js', array('blogthemye-jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'blogthemye_enqueue_scripts');



//Register Sidebar 
function blogthemye_sidebar_register(){
        register_sidebar(array(
                'id'                => 'main_sidebar', 
                'name'              => __('Main Sidebar', 'blogthemye'), 
                'before_widget'     => '<div>', 
                'after_widget'      => '</div>', 
                'before_title'      => '<h3>', 
                'after_title'       => '</h3>'
        ));

        register_sidebar(array(
                'id'                => 'footer-sidebar', 
                'name'              => __('Footer Sidebar'), 
                'before_widget'     => '<div>', 
                'after_widget'      => '</div>', 
                'before_title'      => '<h2>', 
                'after_title'       => '</h2>',
        )); 
}
add_action('widgets_init', 'blogthemye_sidebar_register'); 


//Custom Widget Development 

class my_widget extends WP_Widget{
        public function __construct(){
                parent:: __construct(
                        'my_widget', 
                        __('My Widget')
                ); 
               add_action('widgets_init', function(){
                        register_widget('my_widget');
               }); 
        }
        public function widget($args, $instant){
                echo 'This is custom Widget Data'; 
        }
        // public function form(){}
        // public function update(){}
}
$my_widget = new my_widget(); 