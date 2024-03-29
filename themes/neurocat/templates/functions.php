<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

// custom post type
require get_template_directory() . '/inc/custom-post_type.php';

// custom function
require get_template_directory() . '/inc/custom-function.php';

// contact form 7 hidden fields
require get_template_directory() . '/inc/contactform-hidden-field.php';




function get_banner_class() {
    if ( is_front_page() && is_home() ) {
        $banner_class = 'home';
    } elseif ( is_front_page()){
        $banner_class = 'front-page';
    } elseif ( is_home()){
        $banner_class = 'home';

    } else{
        $banner_class = 'not-home';
    }
    return $banner_class;
}


add_image_size( 'news-thumbnail', 932, 487 ,true );

add_image_size( 'thumb-image', 230, 120 ,true );









