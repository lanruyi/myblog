<head>
	<meta http-equiv="Content-Type" Content="text/html;Charset=utf-8">
</head>
<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<!--<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div>--><!-- .site-info -->
			
            <div class="site-info">
				Copyright &copy 2014 lanruyi.net.<br />
				<a href="/">web by lanruyi.net</a>|<a href="http://www.miitbeian.gov.cn/" target="_blank">À’ICP±∏14038561∫≈-1</a>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
