<?php
/**
 * Animal Clinic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Animal_Clinic
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'animal_clinic_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bootstrap_css() {
		wp_enqueue_style( 'bootstrap_css', 
						  'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', 
						  array(), 
						  '4.1.3'
						  ); 
	}
	add_action( 'wp_enqueue_scripts', 'bootstrap_css');

	function bootstrap_js() {
		wp_enqueue_script( 'popper_js', 
						  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', 
						  array(), 
						  '1.14.3', 
						  true); 
		wp_enqueue_script( 'bootstrap_js', 
						  'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', 
						  array('jquery','popper_js'), 
						  '4.1.3', 
						  true); 
	}
	add_action( 'wp_enqueue_scripts', 'bootstrap_js');
	

	function animal_clinic_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Animal Clinic, use a find and replace
		 * to change 'animal-clinic' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'animal-clinic', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'animal-clinic' ),
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
				'animal_clinic_custom_background_args',
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
add_action( 'after_setup_theme', 'animal_clinic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function animal_clinic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'animal_clinic_content_width', 640 );
}
add_action( 'after_setup_theme', 'animal_clinic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function animal_clinic_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'animal-clinic' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'animal-clinic' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'animal_clinic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function animal_clinic_scripts() {
	wp_enqueue_style( 'animal-clinic-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'animal-clinic-style', 'rtl', 'replace' );

	wp_enqueue_script( 'animal-clinic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'animal_clinic_scripts' );


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



function WebFX_Test_load_stlysheets(){

	//bootstrap --->
	wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');

	
	//owlcarousel --->
	wp_register_style('owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), 1, 'all');
	wp_enqueue_style('owlcarousel');
	
	//owlcarousel-min --->
	wp_register_style('owlcarousel-min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), 1, 'all');
	wp_enqueue_style('owlcarousel-min');
	
	//iconmoon --->
	wp_register_style('iconmoon', get_template_directory_uri() . '/assets/css/icomoon.css', array(), 1, 'all');
	wp_enqueue_style('iconmoon');
	
	//styles --->
	wp_register_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
	wp_enqueue_style('styles');
	
	//responsive --->
	wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), 1, 'all');
	wp_enqueue_style('responsive');

}
 
add_action('wp_enqueue_scripts', 'WebFX_Test_load_stlysheets');



//load scripts
function WebFX_Test_add_js(){

	wp_deregister_script('jquery');
	wp_register_script('lib', get_template_directory_uri() . '/assets/js/lib.min.js', array(), 1, 1, 1);
	wp_enqueue_script('lib');

	
	wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), 1, 1, 1);
	wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts','WebFX_Test_add_js');