<?php 
function taxonomies_news()  {

$labels = array(  'name'          => _x( 'Category', 'News Category' ),
      'singular_name'              => _x( 'Category', 'Category' ),
      'menu_name'                  => __( 'Category'),
      'all_items'                  => __( 'All Categories'),
      'parent_item'                => __( 'Parent Category' ),
      'parent_item_colon'          => __( 'Parent Category:'),
      'new_item_name'              => __( 'New Category Name' ),
      'add_new_item'               => __( 'Add New Category' ),
      'edit_item'                  => __( 'Edit Category' ),
      'update_item'                => __( 'Update Category' ),
      'separate_items_with_commas' => __( 'Separate Categories with commas' ),
      'search_items'               => __( 'Search Categories' ),
      'add_or_remove_items'        => __( 'Add or remove Categories'),
      'choose_from_most_used'      => __( 'Choose from the most used Categories' ),
    );

    $rewrite = array(
      'slug'                       => 'news-cat',
      'with_front'                 => true,
      'hierarchical'               => true,

    );$args = array(
      'labels'                     => 'Category',
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'rewrite'                    => 'Category',
    );
    register_taxonomy( 'taxonomies_news' , 'news' , $args );
  }
add_action( 'init', 'taxonomies_news', 0 );