<?php

/**
 * F1 World thema instellen.
 */
function f1_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    register_nav_menus(array(
        'primary' => __('Hoofdmenu', 'f1-theme')
    ));
}

add_action('after_setup_theme', 'f1_theme_setup');


/**
 * CSS en JavaScript laden.
 */
function f1_theme_scripts() {

    $theme_version = wp_get_theme()->get('Version');

    if (empty($theme_version)) {
        $theme_version = '1.0.0';
    }

    wp_enqueue_style(
        'f1-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    wp_enqueue_script(
        'f1-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        $theme_version,
        true
    );
}

add_action('wp_enqueue_scripts', 'f1_theme_scripts');