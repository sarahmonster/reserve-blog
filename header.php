<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Reserve
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- FAVICONS -->
	<link rel="shortcut icon" href="https://s3.amazonaws.com/reserve.com/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="https://s3.amazonaws.com/reserve.com/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="https://s3.amazonaws.com/reserve.com/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="https://s3.amazonaws.com/reserve.com/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="https://s3.amazonaws.com/reserve.com/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="https://s3.amazonaws.com/reserve.com/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="https://s3.amazonaws.com/reserve.com/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="https://s3.amazonaws.com/reserve.com/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="https://s3.amazonaws.com/reserve.com/apple-touch-icon-152x152.png" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'reserve' ); ?></a>

	<header id="masthead" role="banner">
		<div class="container site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="//s3.amazonaws.com/reserve.com/homepage/logo.svg" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
		</div>

		<div class="site-header"
		<?php if ( get_header_image() ) : ?>
			style="background-image: url(<?php header_image(); ?>)"
		<?php endif; // End header image check. ?>
		>
			<p class="container site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<!-- NAVIGATION CURRENTLY UNUSED -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'reserve' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="container site-content">
