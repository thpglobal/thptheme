<?php
/**
 * The header for the theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Unna|Source+Sans+Pro">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<a class="screen-reader-text" href="#content">Skip to content</a>

<header class="site-header" id="myHeader">
	<?php the_custom_logo();?>

	<nav class="main-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		wp_nav_menu( array( ‘theme_location’ => ‘primary mobile’, ‘menu_class’ => ‘nav-menu’ ) ); // responsive mobile menu
		?>
	</nav>
</header>

<div id="content" class="site-content">
	
