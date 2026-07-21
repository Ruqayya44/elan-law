<?php
/**
 * Functions.php — Main theme entry point
 *
 * @package elan-law
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load modular includes
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/custom-post-types.php';


// ─────────────────────────────────────────────
// Helper: Render Practice Area Icon
// Maps a service slug/keyword to a FA icon class
// ─────────────────────────────────────────────
function elan_law_get_service_icon( $post_id = null ) {
    if ( $post_id ) {
        $icon = get_post_meta( $post_id, '_service_icon', true );
        if ( $icon ) return esc_attr( $icon );
    }
    return 'fa-solid fa-gavel';
}


// ─────────────────────────────────────────────
// Helper: Pagination
// ─────────────────────────────────────────────
function elan_law_pagination( $query = null ) {
    if ( null === $query ) {
        global $wp_query;
        $query = $wp_query;
    }

    $total = $query->max_num_pages;
    if ( $total <= 1 ) return;

    $current = max( 1, get_query_var( 'paged' ) );

    $links = paginate_links( array(
        'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'format'    => '?paged=%#%',
        'current'   => $current,
        'total'     => $total,
        'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
        'next_text' => '<i class="fa-solid fa-chevron-right"></i>',
        'type'      => 'array',
    ) );

    if ( $links ) {
        echo '<nav class="elan-pagination" aria-label="' . esc_attr__( 'Pagination', 'elan-law' ) . '">';
        echo '<ul class="pagination-list">';
        foreach ( $links as $link ) {
            echo '<li>' . $link . '</li>';
        }
        echo '</ul>';
        echo '</nav>';
    }
}


// ─────────────────────────────────────────────
// Helper: Inner page hero banner
// ─────────────────────────────────────────────
function elan_law_page_hero( $title = '', $subtitle = '' ) {
    if ( empty( $title ) ) $title = get_the_title();
    echo '<section class="inner-hero">';
    echo '<div class="inner-hero-bg-shapes" aria-hidden="true">';
    echo '<span class="blur-shape shape-1"></span>';
    echo '<span class="blur-shape shape-2"></span>';
    echo '</div>';
    echo '<div class="container inner-hero-content">';
    // Subtitle intentionally removed per design requirement — title only
    echo '<h1>' . esc_html( $title ) . '</h1>';
    // Breadcrumb
    echo '<nav class="breadcrumb" aria-label="Breadcrumb">';
    echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'elan-law' ) . '</a>';
    echo '<span aria-hidden="true">/</span>';
    echo '<span>' . esc_html( $title ) . '</span>';
    echo '</nav>';
    echo '</div>';
    echo '</section>';
}


// ─────────────────────────────────────────────
// Custom Excerpt with Read More
// ─────────────────────────────────────────────
function elan_law_excerpt( $length = 20, $post_id = null ) {
    if ( $post_id ) {
        $post = get_post( $post_id );
        setup_postdata( $post );
    }
    $excerpt = get_the_excerpt();
    wp_reset_postdata();
    return wp_trim_words( $excerpt, $length, '&hellip;' );
}


// ─────────────────────────────────────────────
// Remove default wp_head clutter (optional)
// ─────────────────────────────────────────────
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
