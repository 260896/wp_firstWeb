<?php

namespace HashElements\Modules\NewsModuleTwo\Widgets;

// Elementor Classes
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;
use Elementor\Core\Schemes\Color;
use HashElements\Group_Control_Query;
use HashElements\Group_Control_Header;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class NewsModuleTwo extends Widget_Base {

    /** Widget Name */
    public function get_name() {
        return 'he-news-module-two';
    }

    /** Widget Title */
    public function get_title() {
        return esc_html__('News Module 2', 'hash-elements');
    }

    /** Icon */
    public function get_icon() {
        return 'he-news-module-two he-news-modules';
    }

    /** Category */
    public function get_categories() {
        return ['he-magazine-elements'];
    }

    /** Controls */
    protected function _register_controls() {


        $this->start_controls_section(
                'header', [
            'label' => esc_html__('Header', 'hash-elements'),
                ]
        );

        $this->add_group_control(
                Group_Control_Header::get_type(), [
            'name' => 'header',
            'label' => esc_html__('Header', 'hash-elements'),
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'section_post_query', [
            'label' => esc_html__('Content Filter', 'hash-elements'),
                ]
        );

        $this->add_group_control(
                Group_Control_Query::get_type(), [
            'name' => 'posts',
            'label' => esc_html__('Posts', 'hash-elements'),
                ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
                'section_featured_block', [
            'label' => esc_html__('Featured Block', 'hash-elements'),
                ]
        );

        $this->add_group_control(
                Group_Control_Image_Size::get_type(), [
            'name' => 'featured_post_image',
            'exclude' => ['custom'],
            'include' => [],
            'default' => 'large',
                ]
        );

        $this->add_control(
                'featured_thumb_height', [
            'label' => esc_html__('Image Height(%)', 'hash-elements'),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['%'],
            'range' => [
                '%' => [
                    'min' => 30,
                    'max' => 150,
                    'step' => 1
                ],
            ],
            'default' => [
                'unit' => '%',
                'size' => 80,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two .col1 .he-post-item:nth-child(1) .he-thumb-container' => 'padding-bottom: {{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_control('featured_excerpt_length', [
            'label' => esc_html__('Excerpt Length', 'hash-elements'),
            'description' => esc_html__('Enter 0 to hide excerpt', 'hash-elements'),
            'type' => Controls_Manager::NUMBER,
            'min' => 0,
            'default' => 200
        ]);

        $this->add_control(
                'featured_post_author', [
            'label' => esc_html__('Show Post Author', 'hash-elements'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'hash-elements'),
            'label_off' => esc_html__('No', 'hash-elements'),
            'return_value' => 'yes',
            'separator' => 'before',
            'default' => 'yes'
                ]
        );

        $this->add_control(
                'featured_post_date', [
            'label' => esc_html__('Show Post Date', 'hash-elements'),
            'type' => Controls_Manager::SWITCHER,
            'default' => 'yes',
            'label_on' => esc_html__('Yes', 'hash-elements'),
            'label_off' => esc_html__('No', 'hash-elements'),
            'return_value' => 'yes',
            'default' => 'yes'
                ]
        );

        $this->add_control(
                'featured_post_comment', [
            'label' => esc_html__('Show Post Comments', 'hash-elements'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'hash-elements'),
            'label_off' => esc_html__('No', 'hash-elements'),
            'return_value' => 'yes',
            'default' => 'yes'
                ]
        );

        $this->add_control(
                'featured_post_category', [
            'label' => esc_html__('Show Category', 'hash-elements'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'hash-elements'),
            'label_off' => esc_html__('No', 'hash-elements'),
            'return_value' => 'yes',
            'default' => 'yes'
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'section_side_block', [
            'label' => esc_html__('Side Block', 'hash-elements'),
                ]
        );

        $this->add_group_control(
                Group_Control_Image_Size::get_type(), [
            'name' => 'side_post_image',
            'exclude' => ['custom'],
            'include' => [],
            'default' => 'large',
                ]
        );

        $this->add_control(
                'side_thumb_height', [
            'label' => esc_html__('Image Height(%)', 'hash-elements'),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['%'],
            'range' => [
                '%' => [
                    'min' => 30,
                    'max' => 150,
                    'step' => 1
                ],
            ],
            'default' => [
                'unit' => '%',
                'size' => 86,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two .col2 .he-post-item .he-thumb-container, 
                     {{WRAPPER}} .he-news-module-two .col3 .he-post-item .he-thumb-container' => 'padding-bottom: {{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_control('side_post_excerpt_length', [
            'label' => esc_html__('Excerpt Length', 'hash-elements'),
            'description' => esc_html__('Enter 0 to hide excerpt', 'hash-elements'),
            'type' => Controls_Manager::NUMBER,
            'min' => 0,
            'default' => 0
        ]);

        $this->add_control(
                'side_post_author', [
            'label' => esc_html__('Show Post Author', 'hash-elements'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'hash-elements'),
            'label_off' => esc_html__('No', 'hash-elements'),
            'return_value' => 'yes',
            'separator' => 'before'
                ]
        );

        $this->add_control(
                'side_post_date', [
            'label' => esc_html__('Show Post Date', 'hash-elements'),
            'type' => Controls_Manager::SWITCHER,
            'default' => 'yes',
            'label_on' => esc_html__('Yes', 'hash-elements'),
            'label_off' => esc_html__('No', 'hash-elements'),
            'return_value' => 'yes',
                ]
        );

        $this->add_control(
                'side_post_comment', [
            'label' => esc_html__('Show Post Comments', 'hash-elements'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'hash-elements'),
            'label_off' => esc_html__('No', 'hash-elements'),
            'return_value' => 'yes',
                ]
        );

        $this->add_control(
                'side_post_category', [
            'label' => esc_html__('Show Category', 'hash-elements'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'hash-elements'),
            'label_off' => esc_html__('No', 'hash-elements'),
            'return_value' => 'yes',
            'default' => 'yes'
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'additional_settings', [
            'label' => esc_html__('Additional Settings', 'hash-elements'),
                ]
        );

        $this->add_control(
                'date_format', [
            'label' => esc_html__('Date Format', 'hash-elements'),
            'type' => Controls_Manager::SELECT,
            'options' => [
                'relative_format' => esc_html__('Relative Format (Ago)', 'hash-elements'),
                'default' => esc_html__('WordPress Default Format', 'hash-elements'),
                'custom' => esc_html__('Custom Format', 'hash-elements'),
            ],
            'default' => 'default',
            'separator' => 'before',
            'label_block' => true
                ]
        );

        $this->add_control(
                'custom_date_format', [
            'label' => esc_html__('Custom Date Format', 'hash-elements'),
            'type' => Controls_Manager::TEXT,
            'default' => 'F j, Y',
            'placeholder' => esc_html__('F j, Y', 'hash-elements'),
            'condition' => [
                'date_format' => 'custom'
            ]
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'header_title_style', [
            'label' => esc_html__('Header Title', 'hash-elements'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'header_color', [
            'label' => esc_html__('Color', 'hash-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-block-title' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'header_short_border_color', [
            'label' => esc_html__('Short Border Color', 'hash-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-title-style3.he-block-title' => 'border-color: {{VALUE}}',
                '{{WRAPPER}} .he-title-style2.he-block-title span:before' => 'background-color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'header_long_border_color', [
            'label' => esc_html__('Long Border Color', 'hash-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-title-style3.he-block-title:after, {{WRAPPER}} .he-title-style4.he-block-title:after' => 'background-color: {{VALUE}}',
                '{{WRAPPER}} .he-title-style2.he-block-title' => 'border-color: {{VALUE}}',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'header_typography',
            'label' => esc_html__('Typography', 'hash-elements'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .he-block-title'
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'category_style', [
            'label' => esc_html__('Category', 'hash-elements'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'category_normal_typography',
            'label' => esc_html__('Typography', 'hash-elements'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .he-news-module-two ul.post-categories li a',
                ]
        );

        $this->start_controls_tabs(
                'category_style_tabs'
        );

        $this->start_controls_tab(
                'category_normal_tab', [
            'label' => __('Normal', 'hash-elements'),
                ]
        );

        $this->add_control(
                'category_normal_bg_color', [
            'label' => esc_html__('Background Color', 'hash-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two ul.post-categories li  a' => 'background-color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'category_normal_text_color', [
            'label' => esc_html__('Text Color', 'hash-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two ul.post-categories li  a' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
                'category_hover_tab', [
            'label' => __('Hover', 'hash-elements'),
                ]
        );

        $this->add_control(
                'category_hover_bg_color', [
            'label' => esc_html__('Background Color (Hover)', 'hash-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two ul.post-categories li:hover a' => 'background-color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'category_hover_text_color', [
            'label' => esc_html__('Text Color (Hover)', 'hash-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two ul.post-categories li:hover a' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
                'post_title_style', [
            'label' => esc_html__('Title', 'hash-elements'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'post_title_color', [
            'label' => esc_html__('Title Color', 'hash-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two .he-post-item .he-post-content h3' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'post_title_hover_color', [
            'label' => esc_html__('Title Color (Hover)', 'hash-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two .he-post-item h3 a:hover' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->start_controls_tabs(
                'post_title_style_tabs'
        );

        $this->start_controls_tab(
                'featured_title_tab', [
            'label' => __('Featured', 'hash-elements'),
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'featured_title_typography',
            'label' => esc_html__('Typography', 'hash-elements'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .he-news-module-two .col1 .he-post-item .he-post-content h3',
                ]
        );

        $this->add_control(
                'featured_title_margin', [
            'label' => esc_html__('Margin', 'hash-elements'),
            'type' => Controls_Manager::DIMENSIONS,
            'allowed_dimensions' => 'vertical',
            'size_units' => ['px', '%', 'em'],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two .col1 .he-post-item' => 'margin: {{TOP}}{{UNIT}} 0 {{BOTTOM}}{{UNIT}} 0;',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
                'side_post_title_tab', [
            'label' => __('Side Post', 'hash-elements'),
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'side_post_title_typography',
            'label' => esc_html__('Typography', 'hash-elements'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .he-news-module-two .col2 .he-post-item .he-post-content h3, 
                                       {{WRAPPER}} .he-news-module-two .col3 .he-post-item .he-post-content h3',
                ]
        );

        $this->add_control(
                'side_post_title_margin', [
            'label' => esc_html__('Margin', 'hash-elements'),
            'type' => Controls_Manager::DIMENSIONS,
            'allowed_dimensions' => 'vertical',
            'size_units' => ['px', '%', 'em'],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two .col2 .he-post-item, 
                             {{WRAPPER}} .he-news-module-two .col3 .he-post-item' => 'margin: {{TOP}}{{UNIT}} 0 {{BOTTOM}}{{UNIT}} 0;',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();


        $this->start_controls_section(
                'excerpt_style', [
            'label' => esc_html__('Excerpt', 'hash-elements'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'excerpt_color', [
            'label' => esc_html__('Color', 'hash-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two .he-post-item .he-post-content .he-excerpt' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'excerpt_typography',
            'label' => esc_html__('Typography', 'hash-elements'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .he-news-module-two .he-post-item .he-post-content .he-excerpt',
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'post_metas', [
            'label' => esc_html__('Metas', 'hash-elements'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'post_metas_color', [
            'label' => esc_html__('Color', 'hash-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .he-news-module-two .he-post-item .he-post-content .he-post-meta' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'post_metas_typography',
            'label' => esc_html__('Typography', 'hash-elements'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .he-news-module-two .he-post-item .he-post-content .he-post-meta'
                ]
        );

        $this->end_controls_section();
    }

    /** Render Layout */
    protected function render() {
        $settings = $this->get_settings_for_display();

        $featured_post_image_size = $settings['featured_post_image_size'];
        $side_post_image_size = $settings['side_post_image_size'];
        ?>
        <div class="he-news-module-two">
            <?php $this->render_header(); ?>

            <div class="he-news-module-two-wrap">
                <?php
                $args = $this->query_args();
                $query = new \WP_Query($args);
                while ($query->have_posts()): $query->the_post();
                    $index = $query->current_post + 1;
                    $last = $query->post_count;
                    $title_class = $index == 1 ? 'he-large-title' : '';

                    if ($index == 1) {
                        echo '<div class="col1">';
                    } elseif ($index == 2) {
                        echo '<div class="col2">';
                    } elseif ($index == 4) {
                        echo '<div class="col3">';
                    }
                    ?>
                    <div class="he-post-item">
                        <div class="he-post-thumb">
                            <a href="<?php the_permalink(); ?>">
                                <div class="he-thumb-container">
                                    <?php
                                    $image_size = ($index == 1) ? $featured_post_image_size : $side_post_image_size;
                                    if (has_post_thumbnail()) {
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), $image_size);
                                        ?>
                                        <img alt="<?php echo the_title_attribute() ?>" src="<?php echo esc_url($image[0]) ?>">
                                    <?php }
                                    ?>
                                </div>
                            </a>
                            <?php
                            if ($index == 1) {
                                if ($settings['featured_post_category'] == 'yes')
                                    echo get_the_category_list();
                            } else {
                                if ($settings['side_post_category'] == 'yes')
                                    he_get_the_primary_category();
                            }
                            ?>
                        </div>

                        <div class="he-post-content">
                            <h3 class="he-post-title <?php echo esc_attr($title_class) ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                            <?php $this->get_post_meta($index); ?>

                            <?php $this->get_post_excerpt($index); ?>
                        </div>
                    </div>
                    <?php
                    if ($index == 1 || $index == 3 || $index == $last) {
                        echo '</div>';
                    }
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <?php
    }

    /** Render Header */
    protected function render_header() {
        $settings = $this->get_settings();

        $this->add_render_attribute('header_attr', 'class', [
            'he-block-title',
            $settings['header_style']
                ]
        );

        $link_open = $link_close = "";
        $target = $settings['header_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['header_link']['nofollow'] ? ' rel="nofollow"' : '';

        if ($settings['header_link']['url']) {
            $link_open = '<a href="' . $settings['header_link']['url'] . '"' . $target . $nofollow . '>';
            $link_close = '</a>';
        }

        if ($settings['header_title']) {
            ?>
            <h2 <?php echo $this->get_render_attribute_string('header_attr'); ?>>
                <?php
                echo $link_open;
                echo '<span>';
                echo $settings['header_title'];
                echo '</span>';
                echo $link_close;
                ?>
            </h2>
            <?php
        }
    }

    /** Query Args */
    protected function query_args() {
        $settings = $this->get_settings();

        $post_type = $args['post_type'] = $settings['posts_post_type'];
        $args['orderby'] = $settings['posts_orderby'];
        $args['order'] = $settings['posts_order'];
        $args['ignore_sticky_posts'] = 1;
        $args['post_status'] = 'publish';
        $args['offset'] = $settings['posts_offset'];
        $args['posts_per_page'] = 5;
        $args['post__not_in'] = $post_type == 'post' ? $settings['posts_exclude_posts'] : [];

        $args['tax_query'] = [];

        $taxonomies = get_object_taxonomies($post_type, 'objects');

        foreach ($taxonomies as $object) {
            $setting_key = 'posts_' . $object->name . '_ids';

            if (!empty($settings[$setting_key])) {
                $args['tax_query'][] = [
                    'taxonomy' => $object->name,
                    'field' => 'term_id',
                    'terms' => $settings[$setting_key],
                ];
            }
        }

        return $args;
    }

    /** Get Post Excerpt */
    protected function get_post_excerpt($count) {
        $settings = $this->get_settings_for_display();
        $excerpt_length = $count == 1 ? $settings['featured_excerpt_length'] : $settings['side_post_excerpt_length'];
        if ($excerpt_length) {
            ?>
            <div class="he-excerpt"><?php echo hash_elements_custom_excerpt($excerpt_length); ?></div>
            <?php
        }
    }

    /** Get Post Metas */
    protected function get_post_meta($count) {
        $settings = $this->get_settings_for_display();
        $post_author = $count == 1 ? $settings['featured_post_author'] : $settings['side_post_author'];
        $post_date = $count == 1 ? $settings['featured_post_date'] : $settings['side_post_date'];
        $post_comment = $count == 1 ? $settings['featured_post_comment'] : $settings['side_post_comment'];

        if ($post_author == 'yes' || $post_date == 'yes' || $post_comment == 'yes') {
            ?>
            <div class="he-post-meta">
                <?php
                if ($post_author == 'yes') {
                    hash_elements_author_name();
                }

                if ($post_date == 'yes') {
                    $date_format = $settings['date_format'];

                    if ($date_format == 'relative_format') {
                        hash_elements_time_ago();
                    } else if ($date_format == 'default') {
                        hash_elements_post_date();
                    } else if ($date_format == 'custom') {
                        $format = $settings['custom_date_format'];
                        hash_elements_post_date($format);
                    }
                }

                if ($post_comment == 'yes') {
                    hash_elements_comment_count();
                }
                ?>
            </div>
            <?php
        }
    }

}
