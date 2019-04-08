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

  if ( is_page_template( 'page-about.php' ) ) {
    wp_enqueue_script( 'variant-switcher-script', get_template_directory_uri() . '/js/variant-switcher.js'); 
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
 * Register custom post types
 */
add_action( 'init', 'struere_post_types_init' );

function struere_post_types_init() {
	
  // Project post type
	$project_labels = array(
		'name'               => _x( 'Projects', 'post type general name', 'struere' ),
		'singular_name'      => _x( 'Project', 'post type singular name', 'struere' ),
		'menu_name'          => _x( 'Projects', 'admin menu', 'struere' ),
		'name_admin_bar'     => _x( 'Projects', 'add new on admin bar', 'struere' ),
		'add_new'            => _x( 'Add New', 'project post', 'struere' ),
		'add_new_item'       => __( 'Add New Project', 'struere' ),
		'new_item'           => __( 'New Project', 'struere' ),
		'edit_item'          => __( 'Edit Project', 'struere' ),
		'view_item'          => __( 'View Project', 'struere' ),
		'all_items'          => __( 'All Projects', 'struere' ),
		'search_items'       => __( 'Search Projects', 'struere' ),
		'parent_item_colon'  => __( 'Parent Projects:', 'struere' ),
		'not_found'          => __( 'No Projects found.', 'struere' ),
		'not_found_in_trash' => __( 'No Projects found in Trash.', 'struere' )
	);

	$project_args = array(
		'labels'             => $project_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 15,
		'menu_icon' 				 => 'dashicons-admin-multisite',
		'supports'           => array( 'title', 'editor', 'revisions', 'thumbnail' )
	);

	register_post_type( 'project', $project_args );
}

/**
 * Taxonomies
 */

add_action( 'init', 'project_taxonomies', 0 );

function project_taxonomies() {
	
	$labels = array(
		'name'              => _x( 'Project Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Project Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Project Categories' ),
		'all_items'         => __( 'All Project Categories' ),
		'parent_item'       => __( 'Parent Project Category' ),
		'parent_item_colon' => __( 'Parent Project Category:' ),
		'edit_item'         => __( 'Edit Project Category' ),
		'update_item'       => __( 'Update Project Category' ),
		'add_new_item'      => __( 'Add New Project Category' ),
		'new_item_name'     => __( 'New Project Category Name' ),
		'menu_name'         => __( 'Project Categories' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'project-category' ),
	);

	register_taxonomy( 'project-category', array( 'project' ), $args );
}

/**
 * Add taxonomy name to body class
 */

function section_taxonomy_in_body_class( $classes ){
  if( is_singular() )
  {
    global $post;
    $custom_terms = get_the_terms($post->ID, 'project-category');
    if ($custom_terms) {
      foreach ($custom_terms as $custom_term) {
        $classes[] = 'single-project-' . $custom_term->slug;
      }
    }
  }
  return $classes;
}
add_filter( 'body_class', 'section_taxonomy_in_body_class' );
