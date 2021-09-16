<?php // test the theme without wordpress!
// first - some fake functions!
function the_title(){ echo "Hello World!";}
function wp_head(){ echo "<link rel=stylesheet href=style.css>\n";}
function the_content(){ echo "<p>Lorem Ipsum etc.</p>\n";}
function the_post() {return true;}
$nposts=1;
function have_posts() {global $nposts; $now=$nposts; $nposts--; return $now;}
function has_post_thumbnail(){}
function the_ID() {echo 42;}
function body_class(){}
function the_custom_logo(){echo "<img src=test.png height=125 width=125>";}
function wp_nav_menu(){
    echo "<ul class=menu><li><a href=#>One</a></li><li><a href=#>Two</a></li></ul>";
}
function get_theme_mod(){}
function dynamic_sidebar(){}
function wp_footer(){}
function language_attributes(){echo("lang=en");}
function get_header(){include("header.php");}
function get_footer(){include("footer.php");}
function bloginfo($x='charset') {
    $options=['charset'=>'utf8'];
    echo $options[$x];
}
require_once("page.php");