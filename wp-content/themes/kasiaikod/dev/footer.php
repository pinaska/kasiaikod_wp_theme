<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

?>

<footer id="colophon" class="site-footer">
				<div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-social' ); ?>
				</div><!-- #secondary -->
	<div class="site-info">
		<p class="footer-txt">zaprojektowane i zakodowane przez Kasię. mam zerknąć na Twoją stronę?</p>
		<div class="footer-contact btn">
			<a href="mailto:kasiaikod@gmail.com" class="bttn">Napisz do mnie</a>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
