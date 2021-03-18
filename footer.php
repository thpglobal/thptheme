<?php
/**
 * The template for displaying the footer
 *
 */
?>
</div> <!-- close the page container -->

<div class="actionbar">
	<?php dynamic_sidebar( 'call_to_action' ); ?>
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
	<p>&nbsp;</p>

	<?php dynamic_sidebar( 'footer_area_four' ); ?>

</footer>
<?php wp_footer(); ?>
</body>
</html>
