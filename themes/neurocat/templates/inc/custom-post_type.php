<?php
/**
 * Register  post type.
 */ 


// post type team
function team_init() {
    $args = array(
      'label' => 'Our Team',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'team'),
        'query_var' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'team', $args );
}
add_action( 'init', 'team_init' );

// post type job
function jobs_init() {
    $args = array(
      'label' => 'Jobs',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'jobs'),
        'query_var' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'jobs', $args );
}
add_action( 'init', 'jobs_init' );
