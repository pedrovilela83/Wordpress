<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_theme
 */

?>

	</div><!-- #content -->

  <footer>
           <div class="footer_section">
            <div class="footer_info">
            
            <div class="logo_footer">
                    <img src="http://localhost:8888/wordpress/wp-content/uploads/2017/06/fundo_xis.png" alt="logotipo">
                    
            </div>
            <div class="footer_copy">
                <h6>Copyright © 2017 Pedro Vilela © of their respective owners.
                <span class="designby">Design by Pedro Vilela</span></h6>
            </div>
            <div class="footer_buttons">
            <a class="link_footer_buttons" href="mailto:a12446@alunos.ipca.pt?Subject=Hello%20again" target="_top"><div class="emailme"><h6_3>EMAIL ME</h6_3></div></a>
            <a class="link_footer_buttons" href="" target="_blank">
            <div class="moreinfo"><h6_3>+ INFO</h6_3></div></a>
            </div>
            <div class="redes">
                <ul class="spicesocialwidget">
                    <li class="rss">
                    <a rel="nofollow" href="" target="_blank" title="RSS Feeds"></a></li>
                    <li class="facebook">
                    <a rel="nofollow" href="" target="_blank" title="Facebook"></a></li>
                    <li class="twitter">
                    <a rel="nofollow" href="" target="_blank" title="Twitter"></a></li>

            </div>
            
            </div>
            </div>
        </footer>
	<!--footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wp_theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wp_theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wp_theme' ), 'wp_theme', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer> <!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
