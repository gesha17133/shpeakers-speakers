<?php
/**
 * This is File
 *
 * @package MyPack
 */

if ( ! function_exists( 'position' ) ) {
	/**
	 * Register Doctor Positions
	 */
	function position() {

		$labels = array(
			'name'                       => _x( 'Position', 'Position General Name', 'my-plugin-domain' ),
			'singular_name'              => _x( 'Positions', 'Position Singular Name', 'my-plugin-domain' ),
			'menu_name'                  => __( 'Position', 'my-plugin-domain' ),
			'all_items'                  => __( 'All Items', 'my-plugin-domain' ),
			'parent_item'                => __( 'Parent Item', 'my-plugin-domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'my-plugin-domain' ),
			'new_item_name'              => __( 'New Item Name', 'my-plugin-domain' ),
			'add_new_item'               => __( 'Add New Item', 'my-plugin-domain' ),
			'edit_item'                  => __( 'Edit Item', 'my-plugin-domain' ),
			'update_item'                => __( 'Update Item', 'my-plugin-domain' ),
			'view_item'                  => __( 'View Item', 'my-plugin-domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'my-plugin-domain' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'my-plugin-domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'my-plugin-domain' ),
			'popular_items'              => __( 'Popular Items', 'my-plugin-domain' ),
			'search_items'               => __( 'Search Items', 'my-plugin-domain' ),
			'not_found'                  => __( 'Not Found', 'my-plugin-domain' ),
			'no_terms'                   => __( 'No items', 'my-plugin-domain' ),
			'items_list'                 => __( 'Items list', 'my-plugin-domain' ),
			'items_list_navigation'      => __( 'Items list navigation', 'my-plugin-domain' ),
		);
		$args   = array(
			'labels'            => $labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
		);
		register_taxonomy( 'position', array( 'speakers' ), $args );

	}
	add_action( 'init', 'position', 0 );

}

if ( ! function_exists( 'country' ) ) {

	/**
	 * Register Country Taxonomy
	 */
	function country() {

		$labels = array(
			'name'                       => _x( 'Country', 'Country General Name', 'my-plugin-domain' ),
			'singular_name'              => _x( 'Countries', 'Country Singular Name', 'my-plugin-domain' ),
			'menu_name'                  => __( 'Country', 'my-plugin-domain' ),
			'all_items'                  => __( 'All Items', 'my-plugin-domain' ),
			'parent_item'                => __( 'Parent Item', 'my-plugin-domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'my-plugin-domain' ),
			'new_item_name'              => __( 'New Item Name', 'my-plugin-domain' ),
			'add_new_item'               => __( 'Add New Item', 'my-plugin-domain' ),
			'edit_item'                  => __( 'Edit Item', 'my-plugin-domain' ),
			'update_item'                => __( 'Update Item', 'my-plugin-domain' ),
			'view_item'                  => __( 'View Item', 'my-plugin-domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'my-plugin-domain' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'my-plugin-domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'my-plugin-domain' ),
			'popular_items'              => __( 'Popular Items', 'my-plugin-domain' ),
			'search_items'               => __( 'Search Items', 'my-plugin-domain' ),
			'not_found'                  => __( 'Not Found', 'my-plugin-domain' ),
			'no_terms'                   => __( 'No items', 'my-plugin-domain' ),
			'items_list'                 => __( 'Items list', 'my-plugin-domain' ),
			'items_list_navigation'      => __( 'Items list navigation', 'my-plugin-domain' ),
		);
		$args   = array(
			'labels'            => $labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
		);
		register_taxonomy( 'country', array( 'speakers' ), $args );

	}
	add_action( 'init', 'country', 0 );

}
