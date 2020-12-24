<?php
/**
 * Welearner functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Welearner
 */

require_once get_template_directory() . '/lib/tgm/tgm.php';
require get_template_directory() . '/lib/theme_panel.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'welearner_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function welearner_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Welearner, use a find and replace
		 * to change 'welearner' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'welearner', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'welearner' ),
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
				'welearner_custom_background_args',
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
add_action( 'after_setup_theme', 'welearner_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function welearner_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'welearner_content_width', 640 );
}

add_action( 'after_setup_theme', 'welearner_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function welearner_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'welearner' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'welearner' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'welearner_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function welearner_scripts() {
	$the_theme = wp_get_theme();
	wp_enqueue_style( 'welearner-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $the_theme->get( 'Version' ), 'all' );
	wp_style_add_data( 'welearner-style', 'rtl', 'replace' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css' );

	wp_enqueue_script( 'welearner-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
	wp_enqueue_script( 'jquery-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'welearner_scripts' );

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


function welearner_register_my_taxes_course_category() {

	/**
	 * Taxonomy: Course Topics.
	 */

	$labels = [
		"name"          => __( "Course Topics", "welearner" ),
		"singular_name" => __( "Course Topic", "welearner" ),
		"add_new_item"  => __( "Add new course", "welearner" ),
	];

	$args = [
		"label"                 => __( "Course Topics", "welearner" ),
		"labels"                => $labels,
		"public"                => true,
		"publicly_queryable"    => true,
		"hierarchical"          => true,
		"show_ui"               => true,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"query_var"             => true,
		"rewrite"               => [ 'slug' => 'course_category', 'with_front' => true, ],
		"show_admin_column"     => false,
		"show_in_rest"          => true,
		"rest_base"             => "course_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit"    => false,
	];
	register_taxonomy( "course_category", [ "course" ], $args );
}

add_action( 'init', 'welearner_register_my_taxes_course_category' );

function welearner_register_my_cpts_course() {

	/**
	 * Post Type: courses.
	 */

	$labels = [
		"name"          => __( "courses", "welearner" ),
		"singular_name" => __( "course", "welearner" ),
		"add_new_item"  => __( "Add Course", "welearner" ),
		"edit_item"     => __( "Edit Course", "welearner" ),
	];

	$args = [
		"label"                 => __( "courses", "welearner" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => false,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => [ "slug" => "course", "with_front" => true ],
		"query_var"             => true,
		"supports"              => [ "title", "editor", "thumbnail" ],
		"taxonomies"            => [ "course_category" ],
	];

	register_post_type( "course", $args );
}

add_action( 'init', 'welearner_register_my_cpts_course' );

//"redux option panel"

function welearner_theme_panel_value($key, $default = '')
{
	if (class_exists('Redux')) {
		return Redux::get_option('welearner_panel', $key, $default);
	} else {
		return $default;
	}
}
