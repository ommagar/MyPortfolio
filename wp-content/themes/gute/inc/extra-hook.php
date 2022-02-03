<?php 
/*
*
* Extra Hook for gute WordPress Theme
*
*
*/

function gute_footer_copyright_text($gute_domain){
?>
	<div class="footer-copyright">&copy;
		<?php
			echo date_i18n(
				/* translators: Copyright date format, see https://secure.php.net/date */
				_x( 'Y', 'copyright date format', 'gute' )
			);
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo bloginfo( 'name' ); ?></a>
							<span class="sep"> | </span>
		<a href="<?php echo esc_url( __( 'https://wpthemespace.com/product/'.$gute_domain, 'gute' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Powered by %s', 'gute' ), 'wpthemespace.com' );
				?></a>
	</div><!-- .site-info -->


<?php
}
add_action( 'gute_footer_copyright', 'gute_footer_copyright_text' );

function gute_footer_bcopy_output($gute_domain){
?>
<div class="footer-bottom copy-area">
			<div class="container">
			<?php if ( has_nav_menu( 'footer-menu' ) ): ?>
				<div class="row">
					<div class="col-md-6">
				<?php do_action( 'gute_footer_copyright', $gute_domain ); ?>
					</div><!-- .footer-copyright -->
					<div class="col-md-6">
						<div class="footer-menu text-right">
							<?php
							wp_nav_menu( array(
							    'theme_location' => 'footer-menu', // Defined when registering the menu
							    'container'      => false,
							    'menu_class'     => 'footer-nav',
							    'fallback_cb'     => '__return_false',
							        ) );
							        ?>
						</div>
					</div>
				</div>
			<?php else: ?>
				<div class="text-center">
				<?php do_action( 'gute_footer_copyright', $gute_domain ); ?>
				</div>
			<?php endif; ?>

			</div>
		
		</div>


<?php
}
add_action( 'gute_footer_bcopy', 'gute_footer_bcopy_output' );