<?php
/**
 * gute portfolio Theme Customizer
 *
 * @package gute
 */

function gute_portfolio_header_banner_output(){
		$home_text = get_theme_mod('home_text', __('I Am John Stevenson','gute-portfolio') );
		$gute_banner_text_align = get_theme_mod('gute_banner_text_align','left' );
		$home_subtext = get_theme_mod('home_subtext',  __('WordPress Developer and Web Designer','gute-portfolio') );
		$btn_text_one = get_theme_mod('btn_text_one',  __('Contact Me','gute-portfolio') );
		$btn_url_one = get_theme_mod('btn_url_one','#' );
		$btn_text_two = get_theme_mod('btn_text_two',  __('Hire Me','gute-portfolio') );
		$btn_url_two = get_theme_mod('btn_url_two','' );
		$gute_header_img_show = get_theme_mod('gute_header_img_show', 1 );
		$gute_headerimg_overlay = get_theme_mod('gute_headerimg_overlay', 1 );
	?>
	<section class="home-banner">
		<?php
		if(has_header_image() && $gute_header_img_show == 1 ){
	 		the_header_image_tag();	
		}elseif( $gute_header_img_show == 1 ){
			echo '<img src="'.esc_url(get_stylesheet_directory_uri().'/assets/img/header-img.jpg').'" alt="'.esc_attr('Header image','gute-portfolio').'">';
		}

		if( $gute_header_img_show == 1 ):
	 	?>
<?php if($gute_headerimg_overlay): ?>
	 	<div class="overlay-text"></div>
<?php endif; ?>
		<div class="banner-text text-<?php echo esc_attr($gute_banner_text_align); ?>">
			<div class="container">
				<h1 id="hometitle" class="text-light"><?php echo esc_html($home_text); ?></h1>
				<h3 id="homesubtitle" class="text-white"><?php echo esc_html($home_subtext); ?> 
				</h3>
				<?php if($btn_text_one ): ?>
				<a id="btnone" href="<?php echo esc_url($btn_url_one); ?>" class="btn-two btn btn-outline-light shadow-lg"><?php echo esc_html($btn_text_one); ?></a>
			<?php endif;
				if ($btn_text_two):
			 ?>
				<a id="btntwo" href="<?php echo esc_url($btn_url_two); ?>" class="btn-two btn btn-outline-light shadow-lg"><?php echo esc_html($btn_text_two); ?></a>
			<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
	</section>
<?php
}
add_action( 'gute_portfolio_header_banner', 'gute_portfolio_header_banner_output' );