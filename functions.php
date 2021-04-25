<?php
/**
 * JustBrow functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JustBrow
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'justbrow_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function justbrow_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on JustBrow, use a find and replace
		 * to change 'justbrow' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'justbrow', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'justbrow' ),
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
				'justbrow_custom_background_args',
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
				'height'      => 180,
				'width'       => 173,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'justbrow_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function justbrow_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'justbrow_content_width', 640 );
}
add_action( 'after_setup_theme', 'justbrow_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function justbrow_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'justbrow' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'justbrow' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'justbrow_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function justbrow_scripts() {
	wp_enqueue_style( 'justbrow-style', get_stylesheet_uri(), array(), _S_VERSION );
//	wp_style_add_data( 'justbrow-style', 'rtl', 'replace' );
    wp_enqueue_style( 'style-vendors', get_template_directory_uri() . '/assets/css/vendors~main.css', '', '' );
    wp_enqueue_style( 'style-main', get_template_directory_uri() . '/assets/css/main.css', '', '' );

	wp_enqueue_script( 'justbrow-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'script-vendors', get_template_directory_uri() . '/assets/js/vendors~main.js', '', '' );
    wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/main.js', '', '' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'justbrow_scripts' );

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
 * Customize breadcrumbs.
 */
require get_template_directory() . '/inc/customize/breadcrumbs.php';


/**
 * Customize pagination.
 */
require get_template_directory() . '/inc/customize/pagination.php';


/**
 * Customize theme-options
 */
require get_template_directory() . '/inc/customize/theme-options.php';


/**
 * Customize fix upload svg files
 */
require get_template_directory() . '/inc/customize/fix-svg.php';


/**
 * Customize post views
 */
require get_template_directory() . '/inc/customize/post-views.php';


/*
 * excerpt_length
 */
require get_template_directory() . '/inc/customize/excerpt.php';


/*
 * Rating
 */
require get_template_directory() . '/inc/customize/rating.php';



// удаляет H2 из шаблона пагинации
add_filter( 'navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ) {
    /*
    Вид базового шаблона:
    <nav class="navigation %1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s</div>
    </nav>
    */

    return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}


/* размеры изображений */
add_image_size( 'service-thumb', 240, 240, true );
//add_image_size( 'article-thumb', 325, 460, true );
//add_image_size( 'reviews-thumb', 130, 100, true );
//add_image_size( 'category-thumb', 345, 480, true );
//add_image_size( 'object-thumb', 440, 400, true );