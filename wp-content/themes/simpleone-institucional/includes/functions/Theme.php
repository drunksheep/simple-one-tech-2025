<?php

class Theme
{
    function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'theme_enqueues'], 20);
        add_action('after_setup_theme', [$this, 'register_menus']);
        add_action('init', [$this, 'clean_head']);
        add_action('wp_footer', [$this, 'remove_admin_bar_bump']);
        add_filter('show_admin_bar', '__return_false');
        add_action('init', [$this, 'disable_emojis']);
        add_action('init', [$this, 'disable_xmlrpc']);
    }

    public function theme_enqueues(): void
    {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('global-styles');
        wp_deregister_script('wp-embed');

        wp_enqueue_style('theme', get_template_directory_uri() . '/dist/assets/main.css', [], null, 'all');
        wp_enqueue_script('theme', get_template_directory_uri() . '/dist/assets/main.js', [], null, true);
    }

    public function register_menus(): void
    {
        register_nav_menu('Header', 'Menu do Header');
        register_nav_menu('Footer', 'Menu do Footer');
    }

    public function clean_head(): void
    {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'feed_links', 2);
        remove_action('wp_head', 'feed_links_extra', 3);
        remove_action('wp_head', 'index_rel_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'start_post_rel_link', 10);
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
        remove_action('wp_head', 'wp_shortlink_wp_head', 10);
        remove_action('wp_head', 'rest_output_link_wp_head', 10);
        remove_action('wp_oembed_add_discovery_links', 10);
        remove_action('template_redirect', 'rest_output_link_header', 11);
    }

    public function disable_emojis(): void
    {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        add_filter('emoji_svg_url', '__return_false');
    }

    public function disable_xmlrpc(): void
    {
        add_filter('xmlrpc_enabled', '__return_false');
    }

    public function remove_admin_bar_bump(): void
    {
        echo '<style>html { margin-top: 0 !important; }</style>';
    }
}

$theme = new Theme();
