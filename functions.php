<?php

function halim_setup()
	{
	// Title
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails', array( 'post', 'slider', 'teams', 'testimonials' ) );
	// Load Text Domain
	load_theme_textdomain( 'halim', get_template_directory() . '/languages' );
	// Register Nav Menus
	register_nav_menus(
		array(
			'primary_menu' => __( 'Primary Menu', 'halim' ),
		)
	);
	}
add_action( 'after_setup_theme', 'halim_setup' );

// CSS & JS File Calling
function halim_assets()
	{
	wp_enqueue_style( 'fonts-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'style-theme', get_stylesheet_uri() );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'imageloaded', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );
	}
add_action( 'wp_enqueue_scripts', 'halim_assets' );


// Slider Custom Posts

function custom_post_type_sliders()
	{
	$labels = array(
		'name'               => _x( 'Sliders', 'post type general name', 'halim' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'halim' ),
		'menu_name'          => _x( 'Sliders', 'admin menu', 'halim' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'halim' ),
		'add_new'            => _x( 'Add New', 'slider', 'halim' ),
		'add_new_item'       => __( 'Add New Slider', 'halim' ),
		'new_item'           => __( 'New Slider', 'halim' ),
		'edit_item'          => __( 'Edit Slider', 'halim' ),
		'view_item'          => __( 'View Slider', 'halim' ),
		'all_items'          => __( 'All Sliders', 'halim' ),
		'search_items'       => __( 'Search Sliders', 'halim' ),
		'parent_item_colon'  => __( 'Parent Sliders:', 'halim' ),
		'not_found'          => __( 'No sliders found.', 'halim' ),
		'not_found_in_trash' => __( 'No sliders found in Trash.', 'halim' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'sliders' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
	);

	register_post_type( 'slider', $args );
	}
add_action( 'init', 'custom_post_type_sliders' );

// Services Custom Posts

function custom_post_type_services()
	{
	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'halim' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'halim' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'halim' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'halim' ),
		'add_new'            => _x( 'Add New', 'service', 'halim' ),
		'add_new_item'       => __( 'Add New Service', 'halim' ),
		'new_item'           => __( 'New Service', 'halim' ),
		'edit_item'          => __( 'Edit Service', 'halim' ),
		'view_item'          => __( 'View Service', 'halim' ),
		'all_items'          => __( 'All Services', 'halim' ),
		'search_items'       => __( 'Search Services', 'halim' ),
		'parent_item_colon'  => __( 'Parent Services:', 'halim' ),
		'not_found'          => __( 'No services found.', 'halim' ),
		'not_found_in_trash' => __( 'No services found in Trash.', 'halim' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'custom-fields' )
	);

	register_post_type( 'services', $args );
	}
add_action( 'init', 'custom_post_type_services' );



// Counter Custom Posts

function custom_post_type_counters()
	{
	$labels = array(
		'name'               => _x( 'Counters', 'post type general name', 'halim' ),
		'singular_name'      => _x( 'Counter', 'post type singular name', 'halim' ),
		'menu_name'          => _x( 'Counters', 'admin menu', 'halim' ),
		'name_admin_bar'     => _x( 'Counter', 'add new on admin bar', 'halim' ),
		'add_new'            => _x( 'Add New', 'counter', 'halim' ),
		'add_new_item'       => __( 'Add New Counter', 'halim' ),
		'new_item'           => __( 'New Counter', 'halim' ),
		'edit_item'          => __( 'Edit Counter', 'halim' ),
		'view_item'          => __( 'View Counter', 'halim' ),
		'all_items'          => __( 'All Counters', 'halim' ),
		'search_items'       => __( 'Search Counters', 'halim' ),
		'parent_item_colon'  => __( 'Parent Counters:', 'halim' ),
		'not_found'          => __( 'No counters found.', 'halim' ),
		'not_found_in_trash' => __( 'No counters found in Trash.', 'halim' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'counters' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'custom-fields' )
	);

	register_post_type( 'counters', $args );
	}
add_action( 'init', 'custom_post_type_counters' );



// Teams Custom Posts

function custom_post_type_teams()
	{
	$labels = array(
		'name'               => _x( 'Teams', 'post type general name', 'halim' ),
		'singular_name'      => _x( 'Team', 'post type singular name', 'halim' ),
		'menu_name'          => _x( 'Teams', 'admin menu', 'halim' ),
		'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'halim' ),
		'add_new'            => _x( 'Add New', 'team', 'halim' ),
		'add_new_item'       => __( 'Add New Team', 'halim' ),
		'new_item'           => __( 'New Team', 'halim' ),
		'edit_item'          => __( 'Edit Team', 'halim' ),
		'view_item'          => __( 'View Team', 'halim' ),
		'all_items'          => __( 'All Teams', 'halim' ),
		'search_items'       => __( 'Search Teams', 'halim' ),
		'parent_item_colon'  => __( 'Parent Teams:', 'halim' ),
		'not_found'          => __( 'No teams found.', 'halim' ),
		'not_found_in_trash' => __( 'No teams found in Trash.', 'halim' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'teams' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'custom-fields' )
	);

	register_post_type( 'teams', $args );
	}
add_action( 'init', 'custom_post_type_teams' );



// Testimonials Custom Posts

function custom_post_type_testimonials()
	{
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name', 'halim' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name', 'halim' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu', 'halim' ),
		'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'halim' ),
		'add_new'            => _x( 'Add New', 'testimonial', 'halim' ),
		'add_new_item'       => __( 'Add New Testimonial', 'halim' ),
		'new_item'           => __( 'New Testimonial', 'halim' ),
		'edit_item'          => __( 'Edit Testimonial', 'halim' ),
		'view_item'          => __( 'View Testimonial', 'halim' ),
		'all_items'          => __( 'All Testimonials', 'halim' ),
		'search_items'       => __( 'Search Testimonials', 'halim' ),
		'parent_item_colon'  => __( 'Parent Testimonials:', 'halim' ),
		'not_found'          => __( 'No tetimonial found.', 'halim' ),
		'not_found_in_trash' => __( 'No tetimonial found in Trash.', 'halim' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'custom-fields' )
	);

	register_post_type( 'testimonials', $args );
	}
add_action( 'init', 'custom_post_type_testimonials' );

function acf_css()
	{
	?>
	<style>
		.header-top {
			background-color:
				<?php the_field( 'header_background', 'option' ); ?>
			;
		}
	</style>
	<?php
	}
add_action( 'wp_head', 'acf_css' );

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page(
		array(
			'page_title' => 'Halim Options',
			'halim',
			'menu_title' => 'Halim Options',
			'halim',
			'menu_slug'  => 'halim-options',
			'capability' => 'edit_posts',
			'redirect'   => false
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title'  => 'Halim Header Settings',
			'halim',
			'menu_title'  => 'Header',
			'halim',
			'parent_slug' => 'halim-options',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title'  => 'Halim About Settings',
			'halim',
			'menu_title'  => 'About',
			'halim',
			'parent_slug' => 'halim-options',
		)
	);

	}


?>