<?php
/**
 * My Portfolio Theme Functions
 * 
 * @package My_Portfolio
 */

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

define('PORTFOLIO_VERSION', '1.0.0');
define('PORTFOLIO_THEME_DIR', get_template_directory());
define('PORTFOLIO_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function portfolio_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    
    // Register nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-portfolio'),
        'footer' => __('Footer Menu', 'my-portfolio'),
    ));
    
    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'portfolio_setup');

/**
 * Enqueue styles and scripts
 */
function portfolio_enqueue_assets() {
    // Theme identity (required by WordPress)
    wp_enqueue_style(
        'portfolio-style',
        get_stylesheet_uri(),
        array(),
        PORTFOLIO_VERSION
    );
    // Inter + Geist fonts (modern design system)
    wp_enqueue_style(
        'portfolio-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
    // Lucide Icons (lightweight, modern - for UI elements)
    wp_enqueue_script(
        'lucide-icons',
        'https://unpkg.com/lucide@latest/dist/umd/lucide.min.js',
        array(),
        null,
        true
    );
    // Main design system and layout
    wp_enqueue_style(
        'portfolio-main',
        PORTFOLIO_THEME_URI . '/assets/css/styles.css',
        array('portfolio-style', 'portfolio-fonts'),
        PORTFOLIO_VERSION
    );
    
    // Theme custom CSS (for WordPress-specific overrides)
    wp_enqueue_style(
        'portfolio-custom',
        PORTFOLIO_THEME_URI . '/assets/css/custom.css',
        array('portfolio-main'),
        PORTFOLIO_VERSION
    );
    
    // Main theme JS (converted from Next.js client components)
    wp_enqueue_script(
        'portfolio-main',
        PORTFOLIO_THEME_URI . '/assets/js/main.js',
        array(),
        PORTFOLIO_VERSION,
        true
    );
    
    // Localize script for AJAX and theme data
    wp_localize_script('portfolio-main', 'portfolioData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('portfolio-nonce'),
        'themeUrl' => PORTFOLIO_THEME_URI,
    ));
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_assets');

/**
 * Register widget areas
 */
function portfolio_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'my-portfolio'),
        'id'            => 'footer-widgets',
        'description'   => __('Appears in the footer section', 'my-portfolio'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'portfolio_widgets_init');

/**
 * ACF Field Groups Registration (if using ACF Pro)
 * 
 * Install ACF Pro or Free and create these field groups in WP Admin:
 * 
 * 1. Hero Section Fields (applies to Front Page)
 *    - hero_title (Text)
 *    - hero_role (Text)
 *    - hero_subtitle (Textarea)
 *    - hero_description (Textarea)
 *    - hero_image (Image)
 *    - hero_portfolio_link (Text)
 *    - hero_cta_link (Text)
 * 
 * 2. Portfolio Items (Custom Post Type or Repeater)
 *    - portfolio_projects (Repeater)
 *      - project_title (Text)
 *      - project_role (Text)
 *      - project_stats (Repeater with 'stat' text field)
 *      - project_image (Image)
 *      - project_link (URL)
 * 
 * 3. Timeline Events (Repeater)
 *    - timeline_events (Repeater)
 *      - event_title (Text)
 *      - event_role (Text)
 *      - event_impact (Textarea)
 *      - event_image (Image)
 *      - event_year (Text)
 * 
 * 4. Strengths (Repeater)
 *    - strengths (Repeater)
 *      - strength_number (Text)
 *      - strength_title (Text)
 *      - strength_description (Textarea)
 * 
 * 5. Services (Repeater)
 *    - services (Repeater)
 *      - service_title (Text)
 *      - service_description (Textarea)
 *      - service_icon (Text - emoji)
 * 
 * 6. Testimonials (Repeater)
 *    - testimonials (Repeater)
 *      - testimonial_name (Text)
 *      - testimonial_role (Text)
 *      - testimonial_company (Text)
 *      - testimonial_quote (Textarea)
 * 
 * 7. Gallery Images (Gallery Field)
 *    - gallery_images (Gallery)
 * 
 * 8. CTA Section
 *    - cta_headline (Text)
 *    - cta_description (Textarea)
 *    - cta_whatsapp_number (Text)
 *    - cta_email (Email)
 *    - cta_phone (Text)
 * 
 * 9. Social Media Links
 *    - linkedin_url (URL) - Default: https://www.linkedin.com/in/aryan-lohia
 *    - instagram_url (URL)
 *    - twitter_url (URL)
 *    - facebook_url (URL)
 */

/**
 * Get ACF field with fallback
 */
function portfolio_get_field($field_name, $default = '') {
    if (function_exists('get_field')) {
        $value = get_field($field_name);
        return $value ? $value : $default;
    }
    return $default;
}

/**
 * Custom excerpt length
 */
function portfolio_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'portfolio_excerpt_length');

/**
 * Remove admin bar margin
 */
function portfolio_remove_admin_bar_margin() {
    if (is_admin_bar_showing()) {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
}
add_action('get_header', 'portfolio_remove_admin_bar_margin');

/**
 * Add async/defer to scripts
 */
function portfolio_add_async_attribute($tag, $handle) {
    $async_scripts = array('portfolio-main');
    
    if (in_array($handle, $async_scripts)) {
        return str_replace(' src', ' defer src', $tag);
    }
    
    return $tag;
}
add_filter('script_loader_tag', 'portfolio_add_async_attribute', 10, 2);

/**
 * Optimize WordPress
 */
// Remove emoji scripts
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove block library CSS if not using Gutenberg blocks
// add_action('wp_enqueue_scripts', function() {
//     wp_dequeue_style('wp-block-library');
//     wp_dequeue_style('wp-block-library-theme');
// }, 100);

/**
 * Security: Remove WordPress version
 */
remove_action('wp_head', 'wp_generator');

/**
 * Custom post types (optional - if you want portfolio as CPT instead of ACF repeater)
 */
function portfolio_register_post_types() {
    // Uncomment if you want Portfolio Items as a Custom Post Type
    /*
    register_post_type('portfolio_item', array(
        'labels' => array(
            'name' => __('Portfolio Items', 'my-portfolio'),
            'singular_name' => __('Portfolio Item', 'my-portfolio'),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'portfolio'),
    ));
    */
}
add_action('init', 'portfolio_register_post_types');

/**
 * Smooth scroll support
 */
function portfolio_add_smooth_scroll() {
    echo '<style>html { scroll-behavior: smooth; overflow-y: scroll; }</style>';
}
add_action('wp_head', 'portfolio_add_smooth_scroll', 100);

