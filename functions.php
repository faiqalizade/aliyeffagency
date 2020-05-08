<?php 
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'fullpage', get_template_directory_uri().'/assets/css/fullpage.css' );
    wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css' );
    wp_enqueue_script( 'fullpage', get_template_directory_uri().'/assets/js/fullpage.js');
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js');
}
add_shortcode( 'test', function(){
    return 'this is shortcode';
});
?>