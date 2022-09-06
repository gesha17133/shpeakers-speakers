<?php
/**
 * Description: This is custom Speaker bu i have to write comments for wpcs
 *
 * @package Package for wpcs :)
 */

if ( ! function_exists( 'speakers' ) ) {

	/**
	 * Function to Register CPT
	 * Sorry for wrong naming used tool Generate WP
	 */
	function speakers() {

		$labels = array(
			'name'                  => _x( 'Speakers', 'Speaker General Name', 'my-plugin-domain' ),
			'singular_name'         => _x( 'Speaker', 'Speaker Singular Name', 'my-plugin-domain' ),
			'menu_name'             => __( 'Speakers', 'my-plugin-domain' ),
			'name_admin_bar'        => __( 'Speaker', 'my-plugin-domain' ),
			'archives'              => __( 'Item Archives', 'my-plugin-domain' ),
			'attributes'            => __( 'Item Attributes', 'my-plugin-domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'my-plugin-domain' ),
			'all_items'             => __( 'All Items', 'my-plugin-domain' ),
			'add_new_item'          => __( 'Add New Item', 'my-plugin-domain' ),
			'add_new'               => __( 'Add New', 'my-plugin-domain' ),
			'new_item'              => __( 'New Item', 'my-plugin-domain' ),
			'edit_item'             => __( 'Edit Item', 'my-plugin-domain' ),
			'update_item'           => __( 'Update Item', 'my-plugin-domain' ),
			'view_item'             => __( 'View Item', 'my-plugin-domain' ),
			'view_items'            => __( 'View Items', 'my-plugin-domain' ),
			'search_items'          => __( 'Search Item', 'my-plugin-domain' ),
			'not_found'             => __( 'Not found', 'my-plugin-domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'my-plugin-domain' ),
			'featured_image'        => __( 'Featured Image', 'my-plugin-domain' ),
			'set_featured_image'    => __( 'Set featured image', 'my-plugin-domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'my-plugin-domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'my-plugin-domain' ),
			'insert_into_item'      => __( 'Insert into item', 'my-plugin-domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'my-plugin-domain' ),
			'items_list'            => __( 'Items list', 'my-plugin-domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'my-plugin-domain' ),
			'filter_items_list'     => __( 'Filter items list', 'my-plugin-domain' ),
		);
		$args   = array(
			'label'               => __( 'Speaker', 'my-plugin-domain' ),
			'description'         => __( 'Speaker Description', 'my-plugin-domain' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
			'taxonomies'          => array( 'post_tag', 'country', 'position' ),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
		);
		register_post_type( 'speakers', $args );

	}
	add_action( 'init', 'speakers', 0 );

}
