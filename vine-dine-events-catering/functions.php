<?php
/**
 * Vine & Dine Events Catering functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vine_&_Dine_Events_Catering
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vine_dine_events_catering_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Vine & Dine Events Catering, use a find and replace
		* to change 'vine-dine-events-catering' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'vine-dine-events-catering', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'vine-dine-events-catering' ),
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
			'vine_dine_events_catering_custom_background_args',
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
add_action( 'after_setup_theme', 'vine_dine_events_catering_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vine_dine_events_catering_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vine_dine_events_catering_content_width', 640 );
}
add_action( 'after_setup_theme', 'vine_dine_events_catering_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vine_dine_events_catering_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vine-dine-events-catering' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vine-dine-events-catering' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vine_dine_events_catering_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vine_dine_events_catering_scripts() {
	wp_enqueue_style( 'vine-dine-events-catering-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'vine-dine-events-catering-style', 'rtl', 'replace' );

	wp_enqueue_script( 'vine-dine-events-catering-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vine_dine_events_catering_scripts' );

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

// Image Sizes
add_image_size('1920', 1920, 1080, false);

// WPForm code
function custom_wpform_with_acf_shortcode($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts(array(
        'field_name' => 'homepage_contact_form', // Replace with the actual field name you used in ACF
    ), $atts);

    // Get the form ID from the ACF custom field
    $form_id = get_field($atts['field_name']);

    if (!$form_id) {
        return 'No form ID found in the specified ACF field.';
    }

    // Generate the WPForms shortcode with the retrieved form ID
    $wpform_shortcode = '[wpforms id="' . esc_attr($form_id) . '"]';

    return do_shortcode($wpform_shortcode);
}
add_shortcode('custom_wpform_with_acf', 'custom_wpform_with_acf_shortcode');


//Enqueue Bootstrap

function enqueue_bootstrap_styles_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap.css', array(), '5.0.0', 'all');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_styles_scripts');


//Enqueue custom CSS file

function enqueue_vine_dine_styles_scripts() {
    wp_enqueue_style('vine-dine-styles', get_template_directory_uri() . '/vine-dine-styles.css', array());
}
add_action('wp_enqueue_scripts', 'enqueue_vine_dine_styles_scripts');


// Remove Posts option from admin dashboard

function remove_posts_menu() {
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');

// Register custom post type
// function custom_menu_item_post_type() {
//     register_post_type('Menus',
//         array(
//             'labels' => array(
//                 'name' => __('Menus'),
//                 'singular_name' => __('Menu')
//             ),
//             'public' => true,
//             'has_archive' => true,
// 			'supports' => array('title', 'editor', 'thumbnail'), // Add supported features
//         )
//     );

// 	register_post_type('Diaries',
//         array(
//             'labels' => array(
//                 'name' => __('Diaries'),
//                 'singular_name' => __('Diary')
//             ),
//             'public' => true,
//             'has_archive' => false,
// 			'supports' => array('title', 'editor', 'thumbnail'), // Add supported features
//         )
//     );
// }
// add_action('init', 'custom_menu_item_post_type');


// Change post order on archive page
function custom_archive_query($query) {
    if (is_archive() && $query->is_main_query()) {
        $query->set('order', 'ASC');  // Change the order to DESC (descending)
    }
}
add_action('pre_get_posts', 'custom_archive_query');

add_post_type_support('menu', 'archive');
