<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gute
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open();} ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gute-portfolio' ); ?></a>

		<header id="masthead" class="site-header text-light shadow-lg">
		<div class="container-fluid pl-5 pr-5">
			<div class="d-flex">
				<div class="align-self-start">
					<div class="site-branding">
						<?php
						if(has_custom_logo()):
							the_custom_logo();
						else:
							?>
							<h1 class="site-title"><a class="text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></h1>
						<?php
						$gute_description = get_bloginfo( 'description', 'display' );
						if ( $gute_description || is_customize_preview() ) :
							?>
							<p class="site-description d-none"><?php echo esc_html($gute_description); /* WPCS: xss ok. */ ?></p>
						<?php
						 endif;
						 endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="mainvan-items flex-grow-1">
					<?php if ( has_nav_menu( 'menu-1' ) ): ?>
						<nav class="navbar navbar-expand-lg">
						    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle Navigation', 'gute' ); ?>">
						        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
						    </button>
						    <div class="collapse navbar-collapse" id="navbar-content">
						        <?php
						        wp_nav_menu( array(
						            'theme_location' => 'menu-1', // Defined when registering the menu
						            'menu_id'        => 'primary-menu',
						            'container'      => false,
						            'depth'          => 2,
						            'menu_class'     => 'navbar-nav ml-auto',
						            'fallback_cb'     => false,
						            'walker'         => new WP_Bootstrap_Navwalker()
						        ) );
						        ?>
						    </div>
						</nav>
						<?php endif; ?>	
					</div>
					<div class="align-self-start">
						<div class="header-search">
							<div class="search-icon"><i class="fa fa-search"></i></div>
							<div class="header-search-form">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
			</div>
		</div>

	</header><!-- #masthead style="background: url(http://localhost/easy/wp-content/uploads/2018/07/bg3.jpg) -->
	<?php
		 if (is_home() ||  is_page_template( 'template-portfolio.php' ) ): 
		 do_action('gute_portfolio_header_banner'); 
		 endif;
	  ?>
	<div id="content" class="site-content">
