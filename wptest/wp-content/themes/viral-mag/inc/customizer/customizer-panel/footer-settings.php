<?php

/**
 * Viral Mag Theme Customizer
 *
 * @package Viral Mag
 */
$wp_customize->add_section('viral_mag_footer_section', array(
    'title' => esc_html__('Footer Settings', 'viral-mag'),
    'priority' => 50
));

$wp_customize->add_setting('viral_mag_footer_nav', array(
    'transport' => 'postMessage',
    'sanitize_callback' => 'wp_kses_post',
));

$wp_customize->add_control(new Viral_Mag_Control_Tab($wp_customize, 'viral_mag_footer_nav', array(
    'type' => 'tab',
    'section' => 'viral_mag_footer_section',
    'priority' => 1,
    'buttons' => array(
        array(
            'name' => esc_html__('Content', 'viral-mag'),
            'fields' => array(
                'viral_mag_footer_col',
                'viral_mag_footer_copyright'
            ),
            'active' => true,
        ),
        array(
            'name' => esc_html__('Style', 'viral-mag'),
            'fields' => array(
                'viral_mag_footer_bg',
                'viral_mag_footer_primary_color_heading',
                'viral_mag_footer_bg_color',
                'viral_mag_footer_border_color',
                'viral_mag_footer_title_color',
                'viral_mag_footer_text_color',
                'viral_mag_footer_anchor_color'
            ),
        )
    ),
)));

$wp_customize->add_setting('viral_mag_footer_col', array(
    'sanitize_callback' => 'viral_mag_sanitize_text',
    'default' => 'col-3-1-1-1'
));

$wp_customize->add_control(new Viral_Mag_Selector($wp_customize, 'viral_mag_footer_col', array(
    'section' => 'viral_mag_footer_section',
    'label' => esc_html__('Footer Column', 'viral-mag'),
    'class' => 'ht-one-third-width',
    'options' => array(
        'col-1-1' => $imagepath . '/inc/customizer/images/footer-columns/col-1-1.jpg',
        'col-2-1-1' => $imagepath . '/inc/customizer/images/footer-columns/col-2-1-1.jpg',
        'col-3-1-1-1' => $imagepath . '/inc/customizer/images/footer-columns/col-3-1-1-1.jpg',
        'col-4-1-1-1-1' => $imagepath . '/inc/customizer/images/footer-columns/col-4-1-1-1-1.jpg',
        'col-5-1-1-1-1-1' => $imagepath . '/inc/customizer/images/footer-columns/col-5-1-1-1-1-1.jpg',
    )
)));

$wp_customize->add_setting('viral_mag_footer_bg_url', array(
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_mag_footer_bg_id', array(
    'sanitize_callback' => 'absint',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_mag_footer_bg_repeat', array(
    'default' => 'no-repeat',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_mag_footer_bg_size', array(
    'default' => 'cover',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_mag_footer_bg_position', array(
    'default' => 'center-center',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_mag_footer_bg_attach', array(
    'default' => 'scroll',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));

// Registers example_background control
$wp_customize->add_control(new Viral_Mag_Background_Control($wp_customize, 'viral_mag_footer_bg', array(
    'label' => esc_html__('Footer Background', 'viral-mag'),
    'section' => 'viral_mag_footer_section',
    'settings' => array(
        'image_url' => 'viral_mag_footer_bg_url',
        'image_id' => 'viral_mag_footer_bg_id',
        'repeat' => 'viral_mag_footer_bg_repeat', // Use false to hide the field
        'size' => 'viral_mag_footer_bg_size',
        'position' => 'viral_mag_footer_bg_position',
        'attach' => 'viral_mag_footer_bg_attach'
    )
)));

$wp_customize->add_setting('viral_mag_footer_primary_color_heading', array(
    'sanitize_callback' => 'viral_mag_sanitize_text'
));

$wp_customize->add_control(new Viral_Mag_Customize_Heading($wp_customize, 'viral_mag_footer_primary_color_heading', array(
    'section' => 'viral_mag_footer_section',
    'label' => esc_html__('Primary Color', 'viral-mag')
)));

$wp_customize->add_setting('viral_mag_footer_bg_color', array(
    'default' => '#333333',
    'sanitize_callback' => 'viral_mag_sanitize_color_alpha',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Mag_Alpha_Color_Control($wp_customize, 'viral_mag_footer_bg_color', array(
    'label' => esc_html__('Footer Background/Overlay Color', 'viral-mag'),
    'description' => esc_html__('To use background image, set the opacity of background color to 0', 'viral-mag'),
    'section' => 'viral_mag_footer_section'
)));

$wp_customize->add_setting('viral_mag_footer_title_color', array(
    'default' => '#EEEEEE',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_mag_footer_border_color', array(
    'default' => '#444444',
    'sanitize_callback' => 'viral_mag_sanitize_color_alpha',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Mag_Alpha_Color_Control($wp_customize, 'viral_mag_footer_border_color', array(
    'label' => esc_html__('Footer Border Color', 'viral-mag'),
    'section' => 'viral_mag_footer_section'
)));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_mag_footer_title_color', array(
    'section' => 'viral_mag_footer_section',
    'label' => esc_html__('Footer Title Color', 'viral-mag')
)));

$wp_customize->add_setting('viral_mag_footer_text_color', array(
    'default' => '#EEEEEE',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_mag_footer_text_color', array(
    'section' => 'viral_mag_footer_section',
    'label' => esc_html__('Footer Text Color', 'viral-mag')
)));

$wp_customize->add_setting('viral_mag_footer_anchor_color', array(
    'default' => '#EEEEEE',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_mag_footer_anchor_color', array(
    'section' => 'viral_mag_footer_section',
    'label' => esc_html__('Footer Anchor Color', 'viral-mag')
)));

$wp_customize->add_setting('viral_mag_footer_copyright', array(
    'sanitize_callback' => 'viral_mag_sanitize_text',
    'default' => esc_html__('&copy; 2020 Viral Mag. All Right Reserved.', 'viral-mag'),
    'transport' => 'postMessage'
));

$wp_customize->add_control('viral_mag_footer_copyright', array(
    'section' => 'viral_mag_footer_section',
    'type' => 'textarea',
    'label' => esc_html__('Copyright Text', 'viral-mag'),
    'description' => esc_html__('Custom HTMl and Shortcodes Supported', 'viral-mag')
));
