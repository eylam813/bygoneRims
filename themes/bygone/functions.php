<?php

/**
 * bygone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bygone
 */

if (!function_exists('bygone_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bygone_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bygone, use a find and replace
		 * to change 'bygone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('bygone', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'Header Upper' => esc_html__('header-upper', 'bygone'),
			'Header Lower' => esc_html__('header-lower', 'bygone'),
			'Footer Top ' => esc_html__('footer-social', 'bygone'),
			'foot-menu-1' => esc_html__('Footer Menu 1', 'bygone'),
			'foot-menu-2' => esc_html__('Footer Menu 2', 'bygone'),
			'foot-menu-3' => esc_html__('Footer Menu 3', 'bygone'),
			'foot-menu-4' => esc_html__('Footer Menu 4', 'bygone'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('bygone_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
		/**
		 * Add support for align-wide option
		 */
		add_theme_support( 'align-wide' );
		/**
		 * Add support for custom color palette
		 */
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__('Dark Teal', 'bygone-theme'),
					'slug'  => 'dark-teal',
					'color' => '#004049',
				),
				array(
					'name'  => esc_html__('Teal', 'bygone-theme'),
					'slug'  => 'teal',
					'color' => '#026b79',
				),
				array(
					'name'  => esc_html__('Translucent Teal', 'bygone-theme'),
					'slug'  => 'translucent-teal',
					'color' => '#026b7960',
				),
				array(
					'name'  => esc_html__('Lightyellow', 'bygone-theme'),
					'slug'  => 'lightyellow',
					'color' => '#ffe66a',
				),
				array(
					'name'  => esc_html__('Brown', 'bygone-theme'),
					'slug'  => 'brown',
					'color' => '#221004',
				),
				array(
					'name'  => esc_html__('Translucent Brown', 'bygone-theme'),
					'slug'  => 'translucent-brown',
					'color' => '#22100460',
				),
				array(
					'name'  => esc_html__('Black', 'bygone-theme'),
					'slug'  => 'black',
					'color' => '#000000',
				),
				array(
					'name'  => esc_html__('White', 'bygone-theme'),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => esc_html__('Gray', 'bygone-theme'),
					'slug'  => 'gray',
					'color' => '#c7c7c7',
				)
			)
		);

		/**
		 * Add support for disabling custom colors
		 */
		add_theme_support('disable-custom-colors');
	}
endif;
add_action('after_setup_theme', 'bygone_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bygone_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('bygone_content_width', 640);
}
add_action('after_setup_theme', 'bygone_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bygone_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'bygone'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'bygone'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'bygone_widgets_init');

/**
 * Enqueue scripts and styles.
 */
/* function bygone_scripts()
{
	wp_enqueue_style('bygone-style', get_stylesheet_uri());

	wp_enqueue_script('bygone-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('bygone-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
} */
// add_action('wp_enqueue_scripts', 'bygone_scripts');


function bygone_theme_scripts()
{
	// queueing the foundation stuff
	wp_enqueue_style('bygone-foundation', get_template_directory_uri() . '/assets/css/vendor/foundation.min.css', null, '6.5.1');

	wp_enqueue_script('bygone-theme-what-input', get_template_directory_uri() . '/assets/js/vendor/what-input.js', array('jquery'), '6.5.1', true);
	wp_enqueue_script('bygone-theme-foundation', get_template_directory_uri() . '/assets/js/vendor/foundation.min.js', array('jquery', 'bygone-theme-what-input'), '6.5.1', true);
	wp_enqueue_script('bygone-script', get_template_directory_uri() . '/assets/js/app.js', array('jquery', 'bygone-theme-foundation'), '6.5.1', true);


	// loading the custom CSS file
	wp_enqueue_style('bygone-theme-style', get_stylesheet_directory_uri() . '/assets/css/bygone.css', array());
	wp_enqueue_style('bygone-product-style', get_stylesheet_directory_uri() . '/assets/css/bygone-product.css', array());
	wp_enqueue_style('bygone-header-style', get_stylesheet_directory_uri() . '/assets/css/header.css', array());
	wp_enqueue_style('bygone-footer-style', get_stylesheet_directory_uri() . '/assets/css/footer.css', array());


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		// depends if u want to include comments with blog single items
		wp_enqueue_script('comment-reply');
	}
}
// add_action('wp_enqueue_scripts', 'bygone_scripts');

add_action('wp_enqueue_scripts', 'bygone_theme_scripts');

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-hooks.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

// loading the woocommerce.php file with a require
require get_template_directory() . '/inc/woocommerce.php';


// registering custom post type
require get_template_directory() . '/inc/post-types.php';


/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


// loading the block-editor.php 
require get_template_directory() . '/inc/block-editor.php';


// old custom post type. will delete once everything is working


// getting our events post type on the front page with other posts
function add_events_to_query($query)
{
	if (is_home() && $query->is_main_query())
		$query->set('post_type', array('post', 'events'));
	return $query;
}
add_action('pre_get_posts', 'add_events_to_query');

/**
 * Customized menu output
 */
class top_bar_walker extends Walker_Nav_Menu
{

	function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
	{
		$element->has_children = !empty($children_elements[$element->ID]);
		$element->classes[] = ($element->current || $element->current_item_ancestor) ? 'active' : '';
		$element->classes[] = ($element->has_children) ? 'has-dropdown not-click' : '';

		parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
	}

	function start_el(&$output, $object, $depth = 0, $args = array(), $current_object_id = 0)
	{
		$item_html = '';
		parent::start_el($item_html, $object, $depth, $args);

		$output .= ($depth == 0) ? '<li class="divider"></li>' : '';

		$classes = empty($object->classes) ? array() : (array) $object->classes;
		if (in_array('label', $classes)) {
			$output .= '<li class="divider"></li>';
			$item_html = preg_replace('/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html);
		}

		if (in_array('divider', $classes)) {
			$item_html = preg_replace('/<a[^>]*>( .* )<\/a>/iU', '', $item_html);
		}

		$output .= $item_html;
	}

	function start_lvl(&$output, $depth = 0, $args = array())
	{
		$output .= "\n<ul class=\"sub-menu dropdown\">\n";
	}
}

function main_image() {
	$files = get_children('post_parent='.get_the_ID().'&post_type=attachment
	&post_mime_type=image&order=desc');
	if($files) :
		$keys = array_reverse(array_keys($files));
		$j=0;
		$num = $keys[$j];
		$image=wp_get_attachment_image($num, 'large', true);
		$imagepieces = explode('"', $image);
		$imagepath = $imagepieces[1];
		$main=wp_get_attachment_url($num);
			$template=get_template_directory();
			$the_title=get_the_title();
		print "<img src='$main' alt='$the_title' class='frame' />";
	endif;
	}