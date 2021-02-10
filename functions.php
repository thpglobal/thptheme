<?php
/**
 * Functions and definitions
 *
 */
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo',['height'=>125] );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'editor-color-palette',
    '#0000aa',
    '#00bfba',				
    '#ffca05',
    '#ff6666',
  );


// Add search to main navigation
function add_search_form($items, $args) {
          if( $args->theme_location == 'menu-1' ){
          $items = '<li class="menu-item">'
			  . '<a href="javascript:thpsearch();">'
			  . '<span class="dashicons dashicons-search"></span></a>'
 			. '</li>'.$items;
          }
        return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

function register_widget_areas() {

  register_sidebar( array(
    'name'          => 'Footer area one',
    'id'            => 'footer_area_one',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area two',
    'id'            => 'footer_area_two',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-two">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area three',
    'id'            => 'footer_area_three',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-three">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
}

add_action( 'widgets_init', 'register_widget_areas' );


/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form',
	'gallery',
	'caption',
) );

/** 
 * Include primary navigation menu
 */
function thptheme_nav_init() {
	register_nav_menus( array(
		'menu-1' => 'Primary Menu'
	) );
}
add_action( 'init', 'thptheme_nav_init' );




/**
 * Register widget area.
 *
 */
function thptheme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'thptheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thptheme_scripts() {
	wp_enqueue_style( 'thptheme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'thptheme-custom-style', get_template_directory_uri() . '/assets/css/style.css',rand(1,9999) );
	wp_enqueue_script( 'thptheme-scripts', get_template_directory_uri() . '/assets/js/scripts.js' );
}
add_action( 'wp_enqueue_scripts', 'thptheme_scripts' );

function thptheme_create_post_custom_post() {
	register_post_type('custom_post', 
		array(
		'labels' => array(
			'name' => __('Custom Post', 'thptheme'),
		),
		'public'       => true,
		'hierarchical' => true,
		'supports'     => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
		), 
		'taxonomies'   => array(
				'post_tag',
				'category',
		) 
	));
}
add_action('init', 'thptheme_create_post_custom_post'); // Add our work type
function ww_load_dashicons(){
   wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'ww_load_dashicons', 999);
