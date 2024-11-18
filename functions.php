<?php
define('THEME_URL', get_stylesheet_directory());
define('THEME_URI', get_template_directory_uri());
define('CORE', THEME_URL . '/core');

/**
 * Link feature files.
 */
require_once(CORE . '/init.php');


// if (!isset($content_width)) {
//     $content_width = 620;
// }

/*==========================
 *        SETUP THEME
 * 
 ===========================*/
if (!function_exists('theme_setup')) {
    function theme_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('automactic-feed-links');
        add_theme_support('post-thumbnails');

        register_nav_menu('primary-menu', 'Primary Menu');


        $sidebar = [
            'name' => 'Main Sidebar',
            'id' => 'main-sidebar',
            'description' => 'Default sidebar.',
            'class' => 'main-sidebar',
        ];
    }
    add_action('init', 'theme_setup');



    /*-----------------------------
     *      link CSS - JS 
     -----------------------------*/
    function enqueue_scripts()
    {
        //CSS
        wp_enqueue_style('bootstrap-style', THEME_URI . '/assets/vendor/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('fontawesome-style', THEME_URI . '/assets/css/fontawesome.css');
        wp_enqueue_style('templatemo-style', THEME_URI . '/assets/css/templatemo-stand-blog.css');
        wp_enqueue_style('owl-style', THEME_URI . '/assets/css/owl.css');

        //JS
        wp_enqueue_script('jquery-script', THEME_URI . '/assets/vendor/jquery/jquery.min.js', array('jquery'), null, true);
        wp_enqueue_script('bootstrap-script', THEME_URI . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
        //JS: additional
        wp_enqueue_script('owl-script', THEME_URI . '/assets/js/owl.js', array('jquery'), null, true);
        wp_enqueue_script('slick-script', THEME_URI . '/assets/js/slick.js', array('jquery'), null, true);
        wp_enqueue_script('isotope-script', THEME_URI . '/assets/js/isotope.js', array('jquery'), null, true);
        wp_enqueue_script('accordions-script', THEME_URI . '/assets/js/accordions.js', array('jquery'), null, true);
        wp_enqueue_script('custom-script', THEME_URI . '/assets/js/custom.js', array('jquery'), null, true);

    }
    add_action('wp_enqueue_scripts', 'enqueue_scripts');


    
    // function test_theme_function()
    // {
    //     var_dump(THEME_URI . '/assets/js/owl.js');
    // }
    // add_action('wp_footer', 'test_theme_function');

}