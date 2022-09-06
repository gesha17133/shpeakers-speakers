<?php
/**
 * Main functions file
 *
 * @package My Pack
 */

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support(
	'custom-logo',
	array(
		'height' => 46,
		'width'  => 100,
	)
);


/**
* Just in case, addind text domain and translation posibility
*/
load_theme_textdomain( 'twenty-twenty-child' );


/**
 * Theme scripts, js libraries, fonts and styles
 */
function theme_scripts() {
	// Theme scripts and styles.
	wp_enqueue_style( 'twentytwentytwo-clild-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0' );
	wp_enqueue_script( 'archive-filter', get_stylesheet_directory_uri() . '/assets/js/filters.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'menu', get_stylesheet_directory_uri() . '/assets/js/menu.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_style( 'select2-css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', array(), '1.0' );
	wp_enqueue_script( 'selct2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array( 'jquery' ), '1.0', true );

	// Send secusrity nonce and ajax-url.
	wp_localize_script(
		'archive-filter',
		'ajax_var',
		array(
			'url'   => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'ajax-nonce' ),
		)
	);

	// Web Fonts.
	wp_enqueue_style( 'google-font-api', 'https://fonts.googleapis.com', array(), '9.1.0', true );
	wp_enqueue_style( 'montserrat-webfont', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,500;0,600;0,700;0,900;1,400&display=swap', array(), '6.0.1' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


/**
 * Add Navigation
 */
function theme_register_nav_menu() {
	register_nav_menus(
		array(
			'header' => __( 'Header Menu', 'twenty-twenty-child' ),
			'footer' => __( 'Footer Menu', 'twenty-twenty-child' ),
		)
	);
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );


/**
 * Query loop with filtering by taxonomies
 */
function query_speakers() {
	if ( ! wp_verify_nonce( $_POST['nonce'], 'ajax-nonce' ) ) {
		die( 'Security check' );
	}

	$args = array(
		'post_type'      => 'speakers',
		'posts_per_page' => 10, // I like -1 :).
	);

	$args['tax_query'] = array();

	if ( isset( $_POST['countries'] ) ) {
		array_push(
			$args['tax_query'],
			array(
				'taxonomy' => 'country',
				'field'    => 'slug',
				'terms'    => $_POST['countries'],
			)
		);
	}

	if ( isset( $_POST['positions'] ) ) {
		array_push(
			$args['tax_query'],
			array(
				'taxonomy' => 'position',
				'field'    => 'slug',
				'terms'    => $_POST['positions'],
			)
		);
	}

	$data = new WP_Query( $args );

	get_template_part(
		'template-parts/posts-loop',
		null,
		array(
			'data'        => $data,
			'template-id' => 'speakers-loop-section',
		)
	);
	wp_die();
}
add_action( 'wp_ajax_speakers-filter', 'query_speakers' );
add_action( 'wp_ajax_nopriv_speakers-filter', 'query_speakers' );


/**
 * Create Widget Sidebar
 */
function speakers_archive_sidebar() {

	register_sidebar(
		array(
			'name'          => __( 'Archive Sidebar', 'twenty-twenty-child' ),
			'id'            => 'archive-sidebar',
			'description'   => __( 'The main sidebar appears on the right on each page except the front page template', 'twenty-twenty-child' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_widget( 'Archive_Widget' );

}
add_action( 'widgets_init', 'speakers_archive_sidebar' );

require_once get_stylesheet_directory() . '/widgets/class-archive-widget.php';


/**
 * Remove annoyig admin bar
 */
function remove_admin_bar() {
	show_admin_bar( false );
}
add_action( 'init', 'remove_admin_bar' );
