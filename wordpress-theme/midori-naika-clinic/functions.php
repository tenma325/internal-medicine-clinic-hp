<?php
/**
 * Theme setup and assets.
 *
 * @package Midori_Naika_Clinic
 */

if (! defined('ABSPATH')) {
    exit;
}

function midori_naika_clinic_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => 'Primary navigation',
        'footer' => 'Footer navigation',
    ]);
}
add_action('after_setup_theme', 'midori_naika_clinic_setup');

function midori_naika_clinic_assets(): void
{
    wp_enqueue_style('midori-naika-clinic-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_script(
        'midori-naika-clinic-main',
        get_template_directory_uri() . '/assets/main.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'midori_naika_clinic_assets');

