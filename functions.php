<?php

// Registrando Features do Tema
function custom_theme_features()  {

    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support( 'html5', array(  ) );

    function register_my_menus()
    {
        register_nav_menus(
            array(
                'header-menu-left' => __('NavBar à Esquerda'),
                'header-menu-right' => __('NavBar à Direita'),
            )
        );
    }
    add_action('init', 'register_my_menus');

    function primary_menu_fallback()
    {
        get_template_part( 'template-parts/default-menu.php' );
    }
}
    add_action( 'after_setup_theme', 'custom_theme_features' );