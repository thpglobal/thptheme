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
		<?php wp_nav_menu( array('theme_location' => 'menu-1') ); ?>
	</nav>
	<a href="https://secure3.convio.net/thp/site/Donation2?df_id=2784&mfc_pref=T&2784.donation=form1&_ga=2.31951038.1028833229.1616093610-1097332562.1614266696">
	<svg class="vanish" height="125" width="125">
	<g><rect x="0" y="0" width="125" height="125" fill="#0000aa"></rect>
	<text x=60 y="65" dominant-baseline="middle" text-anchor="middle" font-family="Unna" font-size="20" font-weight="bold" fill="white">Give Now</text>
	</g></svg></a>

	<a id="hamburger" 
			href="javascript:thpmobile();"><span class="dashicons dashicons-menu-alt3"></span>&nbsp;</a>
</header>
		<div id='thp-search' style='text-align:center;display:none;'>
			<?php get_search_form();?>
		</div>

<div id="content" class="site-content">
	
