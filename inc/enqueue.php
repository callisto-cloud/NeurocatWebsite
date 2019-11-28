<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    function understrap_scripts() {
        // Get the theme data.
        $the_theme = wp_get_theme();
        $theme_version = $the_theme->get( 'Version' );
        
        $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
        wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );
        wp_enqueue_style( 'neurocat-animate', get_stylesheet_directory_uri() . '/css/animate.css', array(), $css_version );

        wp_enqueue_script( 'jquery');
        wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), $theme_version, true);

        wp_enqueue_script( 'owl-scripts', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), $theme_version, true);
        wp_enqueue_script( 'neurocat-wow', get_template_directory_uri() . '/js/wow.min.js', array(), $theme_version, true);
        wp_enqueue_script( 'neurocat-modenizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), $theme_version, true);
        
        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.min.js');
        wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
        wp_enqueue_script( 'neurocat-js', get_template_directory_uri() . '/js/neurocat.js', array('jquery'), 1.0, true );
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
