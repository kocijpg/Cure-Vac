<?php
/**
 * Olive Studio Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Olive_Studio_Starter_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Global variables
 */
global $site_logo_url;
$site_logo_url = get_theme_mod('site_logo_image');

/**
 * Global enqueues
 *
 * @since  1.0.0
 * @global array $wp_styles
 */

function os_theme_global_enqueues()
{

    wp_dequeue_style('child-theme');

    // Move jQuery to footer
		if( ! is_admin() ) {
			wp_deregister_script( 'jquery' );
			wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
			wp_enqueue_script( 'jquery' );
		}

    wp_enqueue_script('general-scripts', get_template_directory_uri() . '/dist/js/general.js', '', filemtime(get_template_directory() . '/dist/js/general.js'), true);
    wp_enqueue_style('general-styles', get_template_directory_uri() . '/dist/css/general.css', array(), filemtime(get_template_directory() . '/dist/css/general.css'));
    wp_enqueue_style('fontawesome-styles', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
	wp_enqueue_script('fontawesome-scripts', 'https://kit.fontawesome.com/a076d05399.js', '', '', true);

    //Pages

    //Register the blocks assets
    $post = get_post();
    if (!empty($post)) {
			if (has_blocks($post->post_content)) {
				$blocks = parse_blocks($post->post_content);

				foreach ($blocks as $block) {

						$type = explode('/', $block['blockName'])[0];

						if ($type == 'acf') {
								$name = explode('/', $block['blockName'])[1];

								if (file_exists(get_template_directory() . '/blocks/' . $name . '/block.js') && !wp_script_is($name . '-scripts')) {
									wp_enqueue_script($name . '-scripts', get_template_directory_uri() . '/blocks/' . $name . '/block.js', '', filemtime(get_template_directory() . '/blocks/' . $name . '/block.js'), true);
								}

								if (file_exists(get_template_directory() . '/blocks/' . $name . '/block.css') && !wp_style_is($name . '-styles')) {
									wp_enqueue_style($name . '-styles', get_template_directory_uri() . '/blocks/' . $name . '/block.css', array(), filemtime(get_template_directory() . '/blocks/' . $name . '/block.css'));
								}
						}
				}
			}
		}

	wp_localize_script('general-scripts', 'ajax_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
	));
	
}

add_action( 'wp_enqueue_scripts', 'os_theme_global_enqueues', 10 );

/**
 * Gutenberg scripts and styles
 *
 */
function os_theme_gutenberg_scripts() {
    wp_enqueue_script( 'ea-editor', get_template_directory_uri() . '/dist/js/editor.js', array( 'wp-blocks', 'wp-dom' ), filemtime( get_template_directory() . '/dist/js/editor.js' ), true );
    wp_enqueue_style( 'ea-editor-styles', get_template_directory_uri() . '/dist/css/editor-styles.css', filemtime( get_template_directory() . '/dist/css/editor-styles.css' ) );
}
add_action( 'enqueue_block_editor_assets', 'os_theme_gutenberg_scripts', 20 );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function os_theme_setup() {
	// Includes
	include_once( get_template_directory() . '/inc/wordpress-cleanup.php' );
	include_once( get_template_directory() . '/inc/tinymce.php' );
	include_once( get_template_directory() . '/inc/helper-functions.php' );
	include_once( get_template_directory() . '/inc/customizer.php' );
	include_once( get_template_directory() . '/inc/custom-sidebars.php' );
	include_once( get_template_directory() . '/inc/custom-widgets.php' );
	include_once( get_template_directory() . '/inc/custom-taxonomies.php' );
	include_once( get_template_directory() . '/inc/custom-post-types.php' );
	include_once( get_template_directory() . '/inc/body-class.php' );
	include_once( get_template_directory() . '/inc/ajax-calls.php' );
	include_once( get_template_directory() . '/inc/acf-blocks.php' );

	// Editor Styles
	add_theme_support( 'editor-styles' );
	add_editor_style( get_template_directory() . '/dist/css/editor-styless.css' );

	// Image Sizes
	// add_image_size( 'os_featured', 400, 100, true );

	// Gutenberg
	// -- Responsive embeds
	add_theme_support( 'responsive-embeds' );

	// -- Wide Images
	add_theme_support( 'align-wide' );

	// -- Disable custom font sizes
	add_theme_support( 'disable-custom-font-sizes' );

	// -- Editor Font Styles
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name'      => __( 'small', 'os_theme' ),
			'shortName' => __( 'S', 'os_theme' ),
			'size'      => 12,
			'slug'      => 'small'
		),
		array(
			'name'      => __( 'regular', 'os_theme' ),
			'shortName' => __( 'M', 'os_theme' ),
			'size'      => 16,
			'slug'      => 'regular'
		),
		array(
			'name'      => __( 'large', 'os_theme' ),
			'shortName' => __( 'L', 'os_theme' ),
			'size'      => 20,
			'slug'      => 'large'
		),
	) );

	// -- Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );

	// -- Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Blue', 'os_theme' ),
			'slug'  => 'blue',
			'color'	=> '#59BACC',
		),
		array(
			'name'  => __( 'Green', 'os_theme' ),
			'slug'  => 'green',
			'color' => '#58AD69',
		),
		array(
			'name'  => __( 'Orange', 'os_theme' ),
			'slug'  => 'orange',
			'color' => '#FFBC49',
		),
		array(
			'name'	=> __( 'Red', 'os_theme' ),
			'slug'	=> 'red',
			'color'	=> '#E2574C',
		),
	) );

	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Olive Studio Starter Theme, use a find and replace
		* to change 'os-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'os-theme', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Main Menu', 'os-theme' ),
			'secondary' => esc_html__( 'Footer Menu', 'os-theme' ),
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

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Disables the block editor from managing widgets in the Gutenberg plugin.
	add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
	// Disables the block editor from managing widgets.
	add_filter( 'use_widgets_block_editor', '__return_false' );
	
}
add_action( 'after_setup_theme', 'os_theme_setup' );

function os_theme_init_mobile_detect() {
    require_once "inc/Mobile_Detect.php";

    global $detect;
    $detect = new Mobile_Detect;
}
add_action('after_setup_theme', 'os_theme_init_mobile_detect');

function os_theme_fix_avada_mime_types($mime){
	$mime['svg']='image/svg+xml';
	return $mime;
}
add_filter('upload_mimes', 'os_theme_fix_avada_mime_types', 99);

function os_theme_cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'os_theme_cc_mime_types');

/**
 * Change the comment area text
 *
 * @since  1.0.0
 * @param  array $args
 * @return array
 */
function os_theme_comment_text( $args ) {
	$args['title_reply']          = __( 'Leave A Reply', 'os_genesis_child' );
	$args['label_submit']         = __( 'Post Comment',  'os_genesis_child' );
	$args['comment_notes_before'] = '';
	$args['comment_notes_after']  = '';
	return $args;
}
add_filter( 'comment_form_defaults', 'os_theme_comment_text' );
