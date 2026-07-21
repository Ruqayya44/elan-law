<?php
/**
 * Theme Setup — add_theme_support, register_nav_menus, register_sidebar
 *
 * @package elan-law
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ─────────────────────────────────────────────
// Theme Setup
// ─────────────────────────────────────────────
function elan_law_setup() {

    // Make theme available for translation.
    load_theme_textdomain( 'elan-law', get_template_directory() . '/languages' );

    // Title tag handled by WordPress.
    add_theme_support( 'title-tag' );

    // Post thumbnail / featured image support.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 800, true );
    add_image_size( 'elan-card', 600, 400, true );
    add_image_size( 'elan-hero', 1200, 700, true );

    // Custom logo.
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // HTML5 markup.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Responsive embeds.
    add_theme_support( 'responsive-embeds' );

    // Align wide / full.
    add_theme_support( 'align-wide' );

    // Editor colour palette matching brand.
    add_theme_support( 'editor-color-palette', array(
        array( 'name' => __( 'Navy',         'elan-law' ), 'slug' => 'navy',        'color' => '#09304F' ),
        array( 'name' => __( 'Accent Blue',  'elan-law' ), 'slug' => 'accent',      'color' => '#1BA4EA' ),
        array( 'name' => __( 'White',        'elan-law' ), 'slug' => 'white',       'color' => '#ffffff' ),
        array( 'name' => __( 'Off White',    'elan-law' ), 'slug' => 'off-white',   'color' => '#f6f8fa' ),
        array( 'name' => __( 'Gray',         'elan-law' ), 'slug' => 'gray',        'color' => '#57626f' ),
    ) );

    // Register navigation menus.
    register_nav_menus( array(
        'primary'  => __( 'Primary Navigation', 'elan-law' ),
        'footer'   => __( 'Footer Navigation',  'elan-law' ),
    ) );

    // Automatic feed links.
    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'elan_law_setup' );


// ─────────────────────────────────────────────
// Widget / Sidebar Areas
// ─────────────────────────────────────────────
function elan_law_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'elan-law' ),
        'id'            => 'blog-sidebar',
        'description'   => __( 'Widgets displayed in the blog / news sidebar.', 'elan-law' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget Area', 'elan-law' ),
        'id'            => 'footer-widgets',
        'description'   => __( 'Widgets displayed in the footer.', 'elan-law' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'elan_law_widgets_init' );


// ─────────────────────────────────────────────
// Content width
// ─────────────────────────────────────────────
function elan_law_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'elan_law_content_width', 1240 );
}
add_action( 'after_setup_theme', 'elan_law_content_width', 0 );


// ─────────────────────────────────────────────
// Excerpt length
// ─────────────────────────────────────────────
function elan_law_excerpt_length( $length ) {
    return 22;
}
add_filter( 'excerpt_length', 'elan_law_excerpt_length' );

function elan_law_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'elan_law_excerpt_more' );


// ─────────────────────────────────────────────
// Body Classes
// ─────────────────────────────────────────────
function elan_law_body_classes( $classes ) {
    if ( is_singular() && ! is_front_page() ) {
        $classes[] = 'inner-page';
    }
    if ( is_front_page() ) {
        $classes[] = 'is-front-page';
    }
    return $classes;
}
add_filter( 'body_class', 'elan_law_body_classes' );
