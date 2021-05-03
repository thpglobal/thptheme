<?php
/**
 * The main template file
 */

get_header();
?>

<main id="main" class="site-main" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
<?php	endwhile;

	the_posts_pagination( array(
		'prev_text' => __( 'Previous page' ),
		'next_text' => __( 'Next page' ),
	) );

endif;
?>

</main>

<?php
get_footer();
