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
	<meta name="description" content="A Hunger Project Website">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Unna|Source+Sans+Pro">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<script>
		function thpmobile() {
			document.getElementById('menu-primary').style.display='block';
		}
		function thpsearch() {
			document.getElementById('thp-search').style.display='block';			
		}
	</script>
	
<a class="screen-reader-text" href="#content">Skip to content</a>

<header class="site-header">
	<?php the_custom_logo();?>

	<nav class="main-navigation">
		<?php wp_nav_menu( array('theme_location' => 'menu-1','menu_id'=>'menu-primary') ); ?>
	</nav>
	<?php $gurl=get_theme_mod( 'give_now_url' );?>
	<span class="givebox">
	<a rel="noreferrer noopener" href="<?php echo $gurl;?>">
	<?php echo get_theme_mod( 'give_now_text' ); ?>
	</a></span>
	<a id="hamburger" 
			href="javascript:thpmobile();"><span class="dashicons dashicons-menu-alt3"></span>&nbsp;</a>
</header>
<div id='thp-search' class=site-content style='text-align:center;display:none;'>
	<script async src="https://cse.google.com/cse.js?cx=7c46083f52d5323d8"></script>
	<div class="gcse-search"></div>
</div>
<div id="content" class="site-content">
	