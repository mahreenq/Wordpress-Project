<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
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
		

				<nav id="site-navigation" class="main-navigation" role="navigation">

					<div class="homelogo">
						<a href="http://localhost:8888/wordpress/"><img class="homelogogreen" src="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/assets/images/logos/inhabitent-logo-tent.svg"> <img class="homelogowhite" src="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/assets/images/logos/inhabitent-logo-tent-white.svg">
					</a>
				</div>

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> <?php esc_html( 'Primary Menu' ); ?>
				</button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

			</nav><!-- #site-navigation -->

		</header><!-- #masthead -->

		<div id="content" class="site-content">
