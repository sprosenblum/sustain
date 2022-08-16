<?php

function sustain_register_styles() {

    wp_register_style(
        'Bootstrap_5',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'
    );

    wp_enqueue_style('Bootstrap_5');

    wp_enqueue_style('Theme_Styles', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('Bootstrap_with_Popper','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);

}

add_action('wp_enqueue_scripts', 'sustain_register_styles');

// allows setting featured image/thumbnail on backend
function sustain_setup_theme() {

    add_theme_support('post-thumbnails');
    add_image_size('homepage-thumb', 200, 200);
}

add_action('after_setup_theme', 'sustain_setup_theme');