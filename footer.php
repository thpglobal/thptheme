<?php
/**
 * The template for displaying the footer
 *
 */
?>
</div> <!-- close the page container -->
<div class="actionbar">
	Take Action Now!<a class=button2 href=/donate>Donate!</a>
</div>
<footer class="site-footer">
<div class="wp-block-columns">
  <div class="wp-block-column footer1">
	<?php dynamic_sidebar( 'footer_area_one' ); ?>
  </div>
  <div class="wp-block-column footer2">
	<?php dynamic_sidebar( 'footer_area_two' ); ?>
  </div>
  <div class="wp-block-column footer3">
	<?php dynamic_sidebar( 'footer_area_three' ); ?>
  </div>
</div>
<?php dynamic_sidebar( 'footer_area_four' ); ?>

<a href=https://thp.org/policies target=_blank>Policies & Disclosures</a> | 
	<a href=https://thp.org/press target=_blank>Press & Media</a> | 
	<a href=https://thp.org/terms-of-use target=_blank>Terms of Use</a> | <a href=/wp-admin>Admin</a>

</footer>
<?php wp_footer(); ?>
</body>
</html>
