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
        <?php wp_body_open(); ?>

        <!-- navigation -->
        <nav class="navbar" id="navbar">
            <button class="menu-toggler" type="button" onclick="menuToggler()">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="main-menu" id="mainMenu">
                <li>
                    <a href="./" class="menu-item">Home</a>
                </li>
                <li>
                    <a href="./" class="menu-item">Home</a>
                </li>
                <li>
                    <a href="./" class="menu-item">Home</a>
                </li>
                <li>
                    <a href="./" class="menu-item">Home</a>
                </li>

                <?php
#echo $menu;
?>
            </ul>
        </nav>