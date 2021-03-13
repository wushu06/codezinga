<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    function understrap_scripts() {
        // Get the theme data.
        $the_theme     = wp_get_theme();
        $theme_version = $the_theme->get( 'Version' );

        $css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/main.css' );
        wp_enqueue_style( 'jquery.fancybox.min.css', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array(), $css_version );
        wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/main.css', array(), $css_version );

        $js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
        wp_deregister_script('jquery');
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), $js_version, true );
        wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
        wp_enqueue_script( 'slick-scripts', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), $js_version, true );
        wp_enqueue_script( 'viewport-scripts', get_template_directory_uri() . '/js/jquery.viewportchecker.min.js', array('jquery'), $js_version, true );
        wp_enqueue_script( 'isotope.pkgd.min.js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), $js_version, true );
        wp_enqueue_script( 'imagesloaded.pkgd.js', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', array('jquery'), $js_version, true );
        wp_enqueue_script( 'jquery.fancybox.pack.js', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), $js_version, true );
        wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/app.js', array(), $js_version, true );
    }
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
