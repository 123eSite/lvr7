<?php
/**
 * LVR7 functions and definitions
 *
 * @package temalvr7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Funções essenciais do Tema LVR7
 */
function temalvr7_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-principal' => __( 'Menu principal', 'temalvr7' ),
		)
	);
}
add_action( 'after_setup_theme', 'temalvr7_setup' );

/**
 * Enfileiramento de Scripts e Estilos
 */
function temalvr7_enqueue_assets() {
	$template_uri = get_bloginfo( 'template_url' );

	// ----- CSS -----

	// Google Fonts
	wp_enqueue_style(
		'temalvr7-google-fonts',
		'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap',
		array(),
		null
	);

	// Vendor CSS
	wp_enqueue_style(
		'temalvr7-bootstrap',
		$template_uri . '/vendor/bootstrap/css/bootstrap.min.css',
		array(),
		null
	);

	wp_enqueue_style(
		'temalvr7-swiper',
		$template_uri . '/vendor/swiper/swiper-bundle.min.css',
		array(),
		null
	);

	wp_enqueue_style(
		'temalvr7-icons',
		$template_uri . '/vendor/icons/icons.css',
		array(),
		null
	);

	// Main CSS
	wp_enqueue_style(
		'temalvr7-style',
		$template_uri . '/css/style.css',
		array( 'temalvr7-bootstrap', 'temalvr7-icons' ),
		'1.1.0'
	);

	// Tema Style.css (para o WordPress reconhecer, por segurança)
	wp_enqueue_style( 'temalvr7-theme-style', get_stylesheet_uri() );

	// ----- JAVASCRIPT -----

	// jQuery (usado no vendor do html)
	wp_enqueue_script(
		'temalvr7-jquery',
		$template_uri . '/vendor/jquery/jquery.min.js',
		array(),
		null,
		true
	);

	// Font Awesome Kit
	wp_enqueue_script(
		'temalvr7-fontawesome',
		'https://kit.fontawesome.com/fa64eccb28.js',
		array(),
		null,
		true
	);

	// Popper
	wp_enqueue_script(
		'temalvr7-popper',
		$template_uri . '/vendor/bootstrap/js/popper.min.js',
		array(),
		null,
		true
	);

	// Bootstrap
	wp_enqueue_script(
		'temalvr7-bootstrap-js',
		$template_uri . '/vendor/bootstrap/js/bootstrap.min.js',
		array( 'temalvr7-jquery', 'temalvr7-popper' ),
		null,
		true
	);

	// Swiper
	wp_enqueue_script(
		'temalvr7-swiper-js',
		$template_uri . '/vendor/swiper/swiper-bundle.min.js',
		array(),
		null,
		true
	);

	// Counter
	wp_enqueue_script(
		'temalvr7-counter-js',
		$template_uri . '/vendor/counter/index.js',
		array(),
		null,
		true
	);

	// Main JS
	wp_enqueue_script(
		'temalvr7-main-js',
		$template_uri . '/js/script.js',
		array( 'temalvr7-jquery', 'temalvr7-bootstrap-js' ),
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'temalvr7_enqueue_assets' );
