<?php
/**
 * Functions and definitions
 *
 */
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo',['height'=>125] );
add_theme_support( 'post-thumbnails' );

//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');

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


/* custom colors
*/
function wpdc_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		[
			[
				'name'  => esc_html__( 'Cobalt', 'wpdc' ),
				'slug'  => 'Cobalt',
				'color' => '#0000aa',
			],
			[
				'name'  => esc_html__( 'Aqua', 'wpdc' ),
				'slug'  => 'Aqua',
				'color' => '#00bfba',
			],
			[
				'name'  => esc_html__( 'Salmon', 'wpdc' ),
				'slug'  => 'Salmon',
				'color' => '#ffff66',
			],
			[
				'name'  => esc_html__( 'Yellow', 'wpdc' ),
				'slug'  => 'Yellow',
				'color' => '#ffca05',
			],
			[
				'name'  => esc_html__( 'White', 'wpdc' ),
				'slug'  => 'White',
				'color' => '#ffffff',
			],
		]
	);
}
add_action( 'after_setup_theme', 'wpdc_add_custom_gutenberg_color_palette' );

function thptheme_customize_register($wp_customize){
  $wp_customize->add_panel('thptheme_option_panel',array(
    'title'=>'THP Theme Options',
    'description'=>'Customize the THP theme'
  ));
  $wp_customize->add_section('give_now_box',array(
    'title'=>'Give Now Box',
    'panel'=>'thptheme_option_panel'
  ));
  $wp_customize->add_setting( 'give_now_text', array(
      'default'        => 'Give Now',
      'capability'     => 'edit_theme_options',
      'type'           => 'theme_mod'
  ));
  $wp_customize->add_setting( 'give_now_url', array(
    'default'        => 'https://thp.org/give-now',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'sanitize-callback' => 'sanitize-url'
));
$wp_customize->add_control( 'give_text', array(
      'label'      => __('Give Now Text', 'thptheme'),
      'section'    =>  'give_now_box',
      'settings'   => 'give_now_text'
  ));
  $wp_customize->add_control( 'give_url', array(
    'label'      => __('Give Now URL', 'thptheme'),
    'section'    =>  'give_now_box',
    'settings'   => 'give_now_url'
));
}
add_action('customize_register', 'thptheme_customize_register');

function register_widget_areas() {
	register_sidebar( array(
    'name'          => 'Call to Action Bar',
    'id'            => 'call_to_action',
    'description'   => 'This widget area discription',
	'before_widget' => '<section>',
    'after_widget'  => '</section>',
    'before_title'  => '<span>',
    'after_title'   => '</span>',
  ));


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
register_sidebar( array(
    'name'          => 'Footer area four',
    'id'            => 'footer_area_four',
    'description'   => 'Page-width footer for validation stickers',
    'before_widget' => '<section class="footer-area footer-area-four">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets',
		'before_widget' => '<section class="sidebar">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
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
 * Enqueue scripts and styles.
 */
function thptheme_scripts() {
	wp_enqueue_style( 'thptheme-style', get_stylesheet_uri(),array(),rand(1,9999),'all' );
}
add_action( 'wp_enqueue_scripts', 'thptheme_scripts' );

function ww_load_dashicons(){
   wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'ww_load_dashicons', 999);
