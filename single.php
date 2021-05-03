<?php
/**
 * The template for displaying all single posts
 *
 */

get_header();
?>

<main id="main" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" class="entry">
	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
		<h4><?php the_date(); ?></h4>
		
	</header>

	<div class="entry-content wp-block-columns">
	  <div class="wp-block-column" style="flex-basis:70%">
		  <?php if ( has_post_thumbnail() ) { 
			$thpurl=get_the_post_thumbnail_url();
			echo("<img src='$thpurl' width=100% height=auto>");
		} 
		  the_content(); ?>
		</div>
	  <div class="wp-block-column" style="flex-basis:30%">
		  <?php dynamic_sidebar( 'sidebar-1' );?>
	</div>
</article>
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

	endwhile;
	?>

</main>

<?php
get_footer();
