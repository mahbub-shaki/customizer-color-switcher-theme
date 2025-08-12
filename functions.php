<?php

function customizer_color_switcher_enqueue_scripts() {
    wp_enqueue_style(
        'customizer-color-switcher-style',
        get_template_directory_uri() . '/dist/output.css',
        array(),
        filemtime(get_template_directory() . '/dist/output.css')
    );
}
add_action('wp_enqueue_scripts', 'customizer_color_switcher_enqueue_scripts');

function ccs_customizer_live_preview() {
    wp_enqueue_script(
        'ccs-customizer',
        get_template_directory_uri() . '/assets/js/customizer.js',
        ['jquery', 'customize-preview'],
        '',
        true
    );
}
add_action('customize_preview_init', 'ccs_customizer_live_preview');


function ccs_customize_register( $wp_customize ) {
    // Section for Color Switcher
    $wp_customize->add_section('ccs_color_section', [
        'title'    => __('Theme Color Switcher', 'customizer-color-switcher'),
        'priority' => 30,
    ]);

    // Primary Color setting and control
    $wp_customize->add_setting('ccs_primary_color', [
        'default'           => '#3490dc',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ccs_primary_color', [
        'label'    => __('Primary Color', 'customizer-color-switcher'),
        'section'  => 'ccs_color_section',
        'settings' => 'ccs_primary_color',
    ]));

    // Secondary Color setting and control
    $wp_customize->add_setting('ccs_secondary_color', [
        'default'           => '#ff6363',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ccs_secondary_color', [
        'label'    => __('Secondary Color', 'customizer-color-switcher'),
        'section'  => 'ccs_color_section',
        'settings' => 'ccs_secondary_color',
    ]));
}
add_action('customize_register', 'ccs_customize_register');


function ccs_color_switcher_customize_register( $wp_customize ) {
    // Hero Section সেটআপের জন্য সেকশন
    $wp_customize->add_section('ccs_hero_section', [
        'title'    => __('Hero Section', 'customizer-color-switcher'),
        'priority' => 20,
    ]);

    // Hero Title
    $wp_customize->add_setting('ccs_hero_title', [
        'default'           => 'Welcome to Customizer Color Switcher Theme',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ]);
    $wp_customize->add_control('ccs_hero_title', [
        'label'    => __('Hero Title', 'customizer-color-switcher'),
        'section'  => 'ccs_hero_section',
        'type'     => 'text',
    ]);

    // Hero Subtitle
    $wp_customize->add_setting('ccs_hero_subtitle', [
        'default'           => 'Change the theme colors live from WordPress Customizer!',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'postMessage',
    ]);
    $wp_customize->add_control('ccs_hero_subtitle', [
        'label'    => __('Hero Subtitle', 'customizer-color-switcher'),
        'section'  => 'ccs_hero_section',
        'type'     => 'textarea',
    ]);

    // Hero Button Text
    $wp_customize->add_setting('ccs_hero_button_text', [
        'default'           => 'Get Started',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ]);
    $wp_customize->add_control('ccs_hero_button_text', [
        'label'    => __('Hero Button Text', 'customizer-color-switcher'),
        'section'  => 'ccs_hero_section',
        'type'     => 'text',
    ]);

    // Hero Button URL
    $wp_customize->add_setting('ccs_hero_button_url', [
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage',
    ]);
    $wp_customize->add_control('ccs_hero_button_url', [
        'label'    => __('Hero Button URL', 'customizer-color-switcher'),
        'section'  => 'ccs_hero_section',
        'type'     => 'url',
    ]);
}
add_action('customize_register', 'ccs_color_switcher_customize_register');

function ccs_custom_colors_css() {
    $primary_color = get_theme_mod('ccs_primary_color', '#3490dc');
    $secondary_color = get_theme_mod('ccs_secondary_color', '#ff6363');
    ?>
    <style>
        :root {
            --primary-color: <?php echo esc_attr($primary_color); ?>;
            --secondary-color: <?php echo esc_attr($secondary_color); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'ccs_custom_colors_css');





