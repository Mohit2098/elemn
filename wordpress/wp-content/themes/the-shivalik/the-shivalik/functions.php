<?php
/**
 * The Shivalik functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Shivalik
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'the_shivalik_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function the_shivalik_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on The Shivalik, use a find and replace
		 * to change 'the-shivalik' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'the-shivalik', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'the-shivalik' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'the_shivalik_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'the_shivalik_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_shivalik_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_shivalik_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_shivalik_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_shivalik_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'the-shivalik' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'the-shivalik' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'the_shivalik_widgets_init' );



function arphabet_widgets_init() {
	register_sidebar( array(
		'name'          => 'Search Bar',
		'id'            => 'search_bar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',

	
	) 
);
}

add_action( 'widgets_init', 'arphabet_widgets_init' );




     




 // * Enqueue scripts and styles.
 // */
function the_shivalik_scripts() {

	wp_enqueue_style('bootstrap', get_template_directory_uri().'/scripts/bootstrap/bootstrap.min.css');
 	wp_enqueue_style('ionicons', get_template_directory_uri().'/scripts/ionicons/css/ionicons.min.css');
 	wp_enqueue_style('toast', get_template_directory_uri().'/scripts/toast/jquery.toast.min.css');
	 wp_enqueue_style('owlcarousel', get_template_directory_uri().'/scripts/owlcarousel/dist/assets/owl.carousel.min.css');

	wp_enqueue_style('owlcarousel-theme-default', get_template_directory_uri().'/scripts/owlcarousel/dist/assets/owl.theme.default.min.css');


 wp_enqueue_style('owlcarousel', get_template_directory_uri().'/scripts/owlcarousel/dist/assets/owl.carousel.css');

 	wp_enqueue_style('owlcarousel-theme-default', get_template_directory_uri().'/scripts/owlcarousel/dist/assets/owl.theme.default.css');
wp_enqueue_style('owlcarousel-theme-green', get_template_directory_uri().'/scripts/owlcarousel/dist/assets/owl.theme.green.css');


 wp_enqueue_style('owlcarousel-theme-green', get_template_directory_uri().'/scripts/owlcarousel/dist/assets/owl.theme.green.min.css');

	wp_enqueue_style('magnific-popup', get_template_directory_uri().'/scripts/magnific-popup/dist/magnific-popup.css');
	wp_enqueue_style('sweetalert', get_template_directory_uri().'/scripts/sweetalert/dist/sweetalert.css');
	
	wp_enqueue_style('the-shivalik-style', get_stylesheet_uri());
	wp_style_add_data( 'the-shivalik-style', 'rtl', 'replace' );
	wp_enqueue_style('all', get_template_directory_uri().'/css/all.css');
	wp_enqueue_style('demo', get_template_directory_uri().'/css/demo.css');
		


  	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, true);
  	wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery.migrate.js',array(),_S_VERSION,true);
    
    wp_enqueue_script('bootstarp', get_template_directory_uri().'/scripts/bootstrap/bootstrap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script('jquery-number', get_template_directory_uri().'/scripts/jquery-number/jquery.number.min.js', array(), _S_VERSION, true );

 wp_enqueue_script('owlcarousel', get_template_directory_uri().'/scripts/owlcarousel/dist/owl.carousel.min.js', array( 'jquery' ), false, true );
 wp_enqueue_script('owlcarousel', get_template_directory_uri().'/scripts/owlcarousel/dist/owl.carousel.js', array( 'jquery' ), false, true );

    wp_enqueue_script('magnific-popup', get_template_directory_uri().'/scripts/magnific-popup/dist/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
    wp_enqueue_script('easeScroll', get_template_directory_uri().'/scripts/easescroll/jquery.easeScroll.js', array(), _S_VERSION, true );
    wp_enqueue_script('sweetalert', get_template_directory_uri().'/scripts/sweetalert/dist/sweetalert.min.js', array(), _S_VERSION, true );
    wp_enqueue_script('jquery-toast', get_template_directory_uri().'/scripts/toast/jquery.toast.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'demo', get_template_directory_uri().'/js/demo.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'e-magz', get_template_directory_uri() . '/js/e-magz.js', array(), _S_VERSION, true );





	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_shivalik_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );



function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type', $args );

}
add_action( 'init', 'custom_post_type', 0 );