<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://pilacosta.com/', 'underscores' ) ); ?>"><?php printf( esc_html__( '%s', 'underscores' ), 'Pilar Acosta' ); ?></a>
			<span class="sep"> </span>
			<?php printf( esc_html__( '' ), 'underscores', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->

        <!--<div class="site-info">
            <a href="<?php /*echo esc_url( __( 'https://wordpress.org/', 'underscores' ) ); */?>"><?php /*printf( esc_html__( 'Proudly powered by %s', 'underscores' ), 'WordPress' ); */?></a>
            <span class="sep"> | </span>
            <?php /*printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscores' ), 'underscores', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); */?>
        </div>-->


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
