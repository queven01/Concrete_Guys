<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KC_Portfolio_Theme
 */

?>

	<footer id="footer" class="site-footer">

		<div class="main-section">
			<div class="container">
				<div class="footer-column-1">
					logo and name and small description
					social media links
				</div>
				<div class="footer-column-1">
					contact us section with hours 
				</div>
				<div class="footer-column-1">
					some quick links and request quote button
				</div>
			</div>
		</div>
		<div class="bottom-section">
			<div class="container">
				<div class="">
					© All Rights Reserved <?php echo date("Y"); ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
