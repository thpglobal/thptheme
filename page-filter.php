<?php
/**
 * The main template file
 * Filter by tags
 */

get_header();
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
$tags = get_tags(array('get'=>'all'));
$output = '<p>';
foreach ($tags as $tag):
    $output .= '<a href="'. get_term_link($tag).'">'. $tag->name .'</a> &nbsp;';
endforeach;
echo($output."</p>\n");
?>

<main id="main" class="site-main" role="main">
	<h2><?php echo $current_url;?></h2>
	<ul>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		
the_shortlink(the_title('','',FALSE)." ".get_the_date(),"A post","<li>","</li>\n");
endwhile;
endif;
?>
	</ul>
</main>

<?php
get_footer();