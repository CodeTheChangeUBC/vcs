<?php
/**
 * The header for our theme.
 *
 * @package VCS_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="nav-icon">
						<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
					</div>
					<div class="mobile-menu-container">
						<div class="menu-open-nav">
							<div class="nav-icon-close">
								<i class="fa fa-times fa-2x" aria-hidden="true"></i>
							</div>
						</div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'mobile-menu' ) ); ?>
						<div class="mobile-menu-footer">
							<div class="mobile-links">
								<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
								<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
								<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
								<i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i>
								<i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
							</div>
							<div class="mobile-links ">
								<a href="#">Auditions</a>
								<a href="#">FAQ</a>
								<a href="#">Contact</a>
							</div>
						</div>
					</div>
					<div class="nav-logo">
						<?php show_easylogo(); ?>
					</div>

					<div class="buy-donate-container">
						<div class="button-container">
							<a class="buy-tickets button-green button" href="<?php echo esc_url( home_url( '/concerts	' ) ); ?>">Buy Tickets</a>
    						<a class="donate button-red button" href="＃">Donate</a>
						</div>
					</div>
					<div class="body-gradient"></div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
