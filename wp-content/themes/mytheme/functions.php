<?php


function register_styles() {
    wp_register_style('style', get_template_directory_uri() .
        '/style.css');
    wp_enqueue_style('style');

//     wp_register_style('mdb', get_template_directory_uri() .
//         '/mdbootstrap/css/bdm.min.css');
//     wp_enqueue_style('mdb');
    
//     wp_register_style('style-md', get_template_directory_uri() .
//         '/mdbootstrap/css/style.min.css');
//     wp_enqueue_style('style-md');
    
//     wp_register_style('cp', get_template_directory_uri() .
//         '/styles/cp.css');
//     wp_enqueue_style('cp');
    
//     wp_register_style('overhang', get_template_directory_uri() .
//         '/styles/overhang.min.css');
//     wp_enqueue_style('overhang');
    
//     wp_register_style('carousel', get_template_directory_uri() .
//         '/styles/owl.carousel.min.css');
//     wp_enqueue_style('carousel');
    
//     wp_register_style('owl', get_template_directory_uri() .
//         '/styles/owl.theme.default.min.css');
//     wp_enqueue_style('owl');
    
//     wp_register_style('style', get_template_directory_uri() .
//         '/styles/style.css');
//     wp_enqueue_style('style');
    
}

add_action( 'wp_enqueu_scripts', 'register_styles' );


function load_my_script () {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() .
        '/js/jquery-3.3.1.min.js');
    wp_enqueue_script('jquery');

//     wp_register_script('sticky', get_template_directory_uri() .
//         '/js/jquery.sticky');
//     wp_enqueue_script('sticky');
    
    wp_register_script('validate', get_template_directory_uri() .
        '/js/jquery.validate.min.js');
    wp_enqueue_script('validate');
    
    wp_register_script('main', get_template_directory_uri() .
        '/js/main.js');
    wp_enqueue_script('main');
    
//     wp_register_script('overhang', get_template_directory_uri() .
//         '/js/overhang.min');
//     wp_enqueue_script('overhang');
    
//     wp_register_script('owlcarousel', get_template_directory_uri() .
//         '/js/owl.carousel.min');
//     wp_enqueue_script('owlcarousel');
}

add_action( 'wp_enqueu_scripts', 'load_my_script' );
