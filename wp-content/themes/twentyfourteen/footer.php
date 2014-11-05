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
				<a href="/">web by lanruyi.net</a>|<a href="http://www.miitbeian.gov.cn/" target="_blank">苏ICP备14038561号-1</a>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
	
	<script type="text/javascript">
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F63a9af44247b7b18b6972c8d6b9fdb04' type='text/javascript'%3E%3C/script%3E"));
	</script>
<!--百度分析工具-->
</body>
</html>
