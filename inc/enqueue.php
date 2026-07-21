<?php
/**
 * Enqueue Styles and Scripts
 *
 * @package elan-law
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function elan_law_enqueue_assets() {

    $theme_version = wp_get_theme()->get( 'Version' );
    $theme_uri     = get_template_directory_uri();

    // ── Google Fonts ──────────────────────────────────────────
    wp_enqueue_style(
        'elan-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,500&family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // ── Font Awesome 6 ────────────────────────────────────────
    wp_enqueue_style(
        'elan-font-awesome',
        'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );

    // ── Main Theme CSS ────────────────────────────────────────
    wp_enqueue_style(
        'elan-main',
        $theme_uri . '/assets/css/main.css',
        array( 'elan-google-fonts', 'elan-font-awesome' ),
        $theme_version
    );

    // ── Main Theme JS ─────────────────────────────────────────
    wp_enqueue_script(
        'elan-main',
        $theme_uri . '/assets/js/main.js',
        array(),          // no jQuery dependency
        $theme_version,
        true              // load in footer
    );

    // ── Comment Reply Script (only on single posts with comments open) ──
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'elan_law_enqueue_assets' );


// ─────────────────────────────────────────────
// Block Editor Styles (Gutenberg)
// ─────────────────────────────────────────────
function elan_law_block_editor_styles() {
    wp_enqueue_style(
        'elan-editor',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'enqueue_block_editor_assets', 'elan_law_block_editor_styles' );
