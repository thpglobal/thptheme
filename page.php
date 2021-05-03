<?php
/**
 * The template for displaying all pages
 *
 */

get_header();
?>

<main id="main" class="site-main" role="main">

<?php	while ( have_posts() ) : the_post(); ?>
	
<article id="post-<?php the_ID(); ?>" class="entry">
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) { 
			echo("<div style='position:relative;'>\n");
			$thpurl=get_the_post_thumbnail_url();
			echo("<img src='$thpurl' width=100% height=auto>");
			echo("<h1 class='overlay-title'>");
			the_title();
			echo("</h1></div>\n");
		}else{
			echo("<h1>"); the_title(); echo("</h1>\n");
		} 
		?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>

<?php	endwhile; ?>

</main>

<?php
get_footer();
