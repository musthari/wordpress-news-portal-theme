<?php
/**
 * Theme setup and bootstrap.
 */

function news_portal_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'custom-spacing' );
    add_theme_support( 'custom-line-height' );
    add_theme_support( 'appearance-tools' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 48,
        'width'       => 180,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Navigation', 'news-portal' ),
            'footer'  => __( 'Footer Navigation', 'news-portal' ),
        )
    );
}
add_action( 'after_setup_theme', 'news_portal_setup' );

function news_portal_enqueue_assets() {
    wp_enqueue_style(
        'news-portal-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'news_portal_enqueue_assets' );

function news_portal_register_pattern_category() {
    register_block_pattern_category(
        'news-portal',
        array( 'label' => __( 'News Portal', 'news-portal' ) )
    );
}
add_action( 'init', 'news_portal_register_pattern_category' );

function news_portal_register_patterns() {
    $pattern_dir = get_theme_file_path( '/patterns' );

    if ( ! is_dir( $pattern_dir ) ) {
        return;
    }

    $pattern_files = glob( $pattern_dir . '/*.php' );

    if ( ! $pattern_files ) {
        return;
    }

    foreach ( $pattern_files as $pattern_file ) {
        register_block_pattern_from_file( $pattern_file );
    }
}
add_action( 'init', 'news_portal_register_patterns' );
