<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" class="entry">
	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ) { 
			$thpurl=get_the_post_thumbnail_url("large");
			echo("<img src='$thpurl' width=100% height=auto>");
		} ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>
