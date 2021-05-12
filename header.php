<?php
/**
 * Them Main Header Template File
 * 
 * @package Marthem
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class('bg-light'); ?>>
        <?php
        wp_body_open();
        get_template_part('template-parts/navigation');


?>