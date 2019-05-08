<?php




function load_stylesheets()
{

    /* Bootstrap */
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style('bootstrap');
    /* End Bootstrap */

    /* Font Awesome */
    // wp_register_style('fa', get_template_directory_uri() . '/css/fontawesome.min.css', array(), false, 'all');
    //
    // wp_enqueue_style('fa');
    /* End Font Awesome */

    /* StyleSheet */
    wp_register_style('stylesheet', get_template_directory_uri() . '/css/style.css', array(), false, 'all');

    wp_enqueue_style('stylesheet');
    /* End StyleSheet */
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_feathericons()
{
    /* Feather Icons */
    wp_register_script('fi', get_template_directory_uri() . '/js/feather.min.js', '', 1, true);

    wp_enqueue_script('fi');
    /* End Feather Icons */
}
add_action('wp_enqueue_scripts', 'include_feathericons');

function include_jquery()
{
    /* Jquery */
    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', '', 1, true);

    wp_enqueue_script('jquery');
    /* End Jquery */
}
add_action('wp_enqueue_scripts', 'include_jquery');



function load_js()
{

    /* Custom JS */
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);

    wp_enqueue_script('customjs');
    /* End Custom JS */
}

add_action('wp_enqueue_scripts', 'load_js');
