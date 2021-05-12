<?php
/**
 * The Function Theme File
 *
 * @package Marthem
 */

function marthem_enqueue_scripts()
{
    // fonts
    wp_enqueue_style(
        'Tajawal-font',
        'https://fonts.googleapis.com/css2?family=Tajawal',
        [],
        null,
        false
    );
    wp_enqueue_script(
        'Font-awesome',
        'https://kit.fontawesome.com/05b9a67422.js',
        [],
        null,
        true
    );

    // style
    wp_enqueue_style(
        'Bootstrap',
        get_template_directory_uri() .
            '/node_modules/bootstrap/dist/css/bootstrap.min.css',
        [],
        '4.6.0',
        'all'
    );
    wp_enqueue_style(
        'MdBoostrap',
        get_template_directory_uri() .
            '/node_modules/mdbootstrap/css/mdb.min.css',
        [],
        null,
        'all'
    );
    wp_enqueue_style('Theme-style', get_stylesheet_uri(), []);

    wp_enqueue_script(
        'Jquery',
        get_template_directory_uri() .
            '/node_modules/jquery/dist/jquery.min.js',
        null,
        true
    );
    wp_enqueue_script(
        'Bootstrap',
        get_template_directory_uri() .
            '/node_modules/bootstrap/dist/js/bootstrap.min.js',
        null,
        true
    );
    wp_enqueue_script(
        'MdBootstrap',
        get_template_directory_uri() .
            '/node_modules/mdbootstrap/js/mdb.min.js',
        null,
        true
    );
    wp_enqueue_script(
        'Navigation',
        get_template_directory_uri() . '/assets/script/navigation.js',
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'marthem_enqueue_scripts');

// mvc implementation
require_once 'app/core/App.php';
require_once 'app/core/Controller.php';
// require_once 'app/core/Database.php';
// require_once 'app/core/Flasher.php';
exit();

// require_once 'app/config/config.php';w34 tgb