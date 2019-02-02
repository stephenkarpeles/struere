<?php
/**
 * struere functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package struere
 */

if ( ! function_exists( 'struere_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function struere_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on struere, use a find and replace
		 * to change 'struere' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'struere', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'struere' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'struere_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'struere_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function struere_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'struere_content_width', 640 );
}
add_action( 'after_setup_theme', 'struere_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function struere_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'struere' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'struere' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'struere_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function struere_scripts() {
	wp_enqueue_style( 'struere-style', get_stylesheet_uri() );

	wp_enqueue_style( 'struere-custom-styles', get_template_directory_uri() . '/css/style.css' );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'struere-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  wp_enqueue_script( 'struere-isotope-script', get_template_directory_uri() . '/js/isotope.min.js', array(), '20151215', true );

  wp_enqueue_script( 'struere-main-scripts', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

  if ( is_home() ) {
  	wp_enqueue_script( 'struere-slider-script', get_template_directory_uri() . '/js/home-slider.js', array(), '20151215', true );
  }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'struere_scripts' );

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

/**
 * Hide admin bar
 */
show_admin_bar( false );

/**
 * Register Custom Post Types
 */ 
/**
 * Register a custom post type called "portfolio_item".
 *
 * @see get_post_type_labels() for label keys.
 */
// function portfolio_init() {
//     $labels = array(
//         'name'                  => _x( 'Portfolio Items', 'Post type general name', 'textdomain' ),
//         'singular_name'         => _x( 'Portfolio Item', 'Post type singular name', 'textdomain' ),
//         'menu_name'             => _x( 'Portfolio', 'Admin Menu text', 'textdomain' ),
//         'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'textdomain' ),
//         'add_new'               => __( 'Add New', 'textdomain' ),
//         'add_new_item'          => __( 'Add New Portfolio Item', 'textdomain' ),
//         'new_item'              => __( 'New Portfolio Item', 'textdomain' ),
//         'edit_item'             => __( 'Edit Portfolio Item', 'textdomain' ),
//         'view_item'             => __( 'View Portfolio Item', 'textdomain' ),
//         'all_items'             => __( 'All Portfolio Items', 'textdomain' ),
//         'search_items'          => __( 'Search Portfolio', 'textdomain' ),
//         'parent_item_colon'     => __( 'Parent Portfolio Items:', 'textdomain' ),
//         'not_found'             => __( 'No portfolio items found.', 'textdomain' ),
//         'not_found_in_trash'    => __( 'No portfolio items found in Trash.', 'textdomain' ),
//     );
 
//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'publicly_queryable' => true,
//         'show_ui'            => true,
//         'show_in_menu'       => true,
//         'query_var'          => true,
//         'rewrite'            => array( 'slug' => 'portfolio-item' ),
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'menu_icon'          => 'dashicons-format-image',
//         'hierarchical'       => false,
//         'menu_position'      => 5,
//         'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
//     );
 
//     register_post_type( 'portfolio_item', $args );
// }
 
// add_action( 'init', 'portfolio_init' );


