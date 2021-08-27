<?php
/**
 * The main template file
 * Modified for a list of links
 */

get_header();
?>

<main id="main" class="site-main" role="main">
<?php
global $wp;
echo "<h1>".home_url( $wp->request ).</h1>\n";
echo("<ul>\n");
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
echo("<li><a href=".the_shortlink().">".the_title()."</a> ".the_time()."</li>\n");
endwhile;
echo("</ul>\n");
	the_posts_pagination( array(
		'prev_text' => __( 'Previous page' ),
		'next_text' => __( 'Next page' ),
	) );

endif;
?>

</main>

<?php
get_footer();
