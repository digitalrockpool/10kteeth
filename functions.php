<?php

// Enqueue Styles
add_action( 'wp_enqueue_scripts', 'tenkteeth_enqueue_styles' );
function tenkteeth_enqueue_styles() {
	wp_enqueue_style( 'parent-theme', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() .'/style.css', array( 'parent-theme' ) );
}

// Register Custom Post Types
function custom_post_type() {

// Desing Library
	$labels = array(
		'name'                => _x( 'Design Library', 'Post Type General Name', 'hello-elementor' ),
		'singular_name'       => _x( 'Tooth', 'Post Type Singular Name', 'hello-elementor' ),
		'menu_name'           => __( 'Design Library', 'hello-elementor' ),
		'parent_item_colon'   => __( 'Parent Tooth', 'hello-elementor' ),
		'all_items'           => __( 'All Teeth', 'hello-elementor' ),
		'view_item'           => __( 'View Tooth', 'hello-elementor' ),
		'add_new_item'        => __( 'Add New Tooth', 'hello-elementor' ),
		'add_new'             => __( 'Add New', 'hello-elementor' ),
		'edit_item'           => __( 'Edit Tooth', 'hello-elementor' ),
		'update_item'         => __( 'Update Tooth', 'hello-elementor' ),
		'search_items'        => __( 'Search Teeth', 'hello-elementor' ),
		'not_found'           => __( 'Not Found', 'hello-elementor' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'hello-elementor' ),
	);

	$args = array(
		'label'               => __( 'tooth', 'hello-elementor' ),
		'description'         => __( 'tooth entry', 'hello-elementor' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'rewrite' => array( 'slug' => 'design-library', 'with_front' => false ),
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-portfolio',
		'can_export'          => true,
		'has_archive'         => 'design-library',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type( 'design-library', $args );

}
add_action( 'init', 'custom_post_type', 0 ); ?>
