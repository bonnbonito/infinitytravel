<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BonnJoel
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bonnjoel' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="ui padded grid">
			<div class="three wide computer sixteen wide tablet column middle aligned">
				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?> Logo">
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="fixed-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fixed-logo.png" alt="<?php bloginfo( 'name' ); ?> Logo">
					</a>
				</div><!-- .site-branding -->
				<a id="hamburger" href="#" class="menu-toggle" >
					<span class="top-bar"></span>
					<span class="middle-bar"></span>
					<span class="bottom-bar"></span>
				</a>
			</div>
			<div class="thirteen wide computer sixteen wide tablet column pb0">
				<div class="item">
				<div class="top-right">
					<div class="ui horizontal list">
						<div class="item">
							<i class="circular phone icon" aria-hidden="true"></i>
							<div class="content">
								01244 355347
							</div>
						</div>
						<div class="item">
							<i class="circular envelope icon" aria-hidden="true"></i>
							<div class="content">
								sales@iabtravel.com
							</div>
						</div>
						<div class="item">
							<i class="circular info icon" aria-hidden="true"></i>
							<div class="content">
								Let us call you back
							</div>
						</div>
						<div class="item">
							<i class="circular clock icon" aria-hidden="true"></i>
							<div class="content">
								Mon–Fri, 09.:00 - 18.:00
							</div>
						</div>
						<div class="item">
							<div class="ui search">
								<form class="ui icon input" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
									<input class="prompt" type="text" placeholder="Search..." name="s" id="s">
									<i class="search icon"></i>
								</form>
								<div class="results"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="top-mid ui hidden divider"></div>
				<nav id="site-navigation" class="main-navigation bottom aligned" role="navigation">

					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id' => 'primary-menu',
						'container' => false,
						'walker' => new Walker_Nav_Primary,
						'items_wrap' => '<div id="%1$s" class="ui secondary %2$s">%3$s</div>'
					) ); ?>
				</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<?php get_template_part('template-parts/header', 'megamenu'); ?>

	<div id="content" class="site-content">	
