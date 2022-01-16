<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mhdesign
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container widget-container">
			<?php if ( is_active_sidebar( 'widget-footer-1' ) ) : ?>
				<div id="footer-widget-1" class="footer-widget widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-footer-1' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'widget-footer-2' ) ) : ?>
				<div id="footer-widget-2" class="footer-widget widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-footer-2' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'widget-footer-3' ) ) : ?>
				<div id="footer-widget-3" class="footer-widget widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-footer-3' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'widget-footer-4' ) ) : ?>
				<div id="footer-widget-4" class="footer-widget widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-footer-4' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="container">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mhdesign' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'mhdesign' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'mhdesign' ), 'mhdesign', '<a href="http://meihuangdesign.com">Mei Huang</a>' );
					?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
