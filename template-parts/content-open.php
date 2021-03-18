<?php
/**
 * Template part for displaying pages
 * Modified to push the title up over the featured image if it exists
 */

?>

<article id="post-<?php the_ID(); ?>" class="entry">
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) { 
			echo("<div style='position:relative;'>\n");
			$thpurl=get_the_post_thumbnail_url();
			echo("<img src='$thpurl' width=100% height=auto>");
			echo("<h1 style='position:absolute; bottom:-45px; left:0; background-color:white;'>");
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
