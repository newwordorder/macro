<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link href="https://fonts.googleapis.com/css?family=Oswald|Montserrat:500,700" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>



	<!-- ******************* The Navbar Area ******************* -->
<div id="header" class="header" >

	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

	<span class="menu-toggle d-none d-md-block">Menu</span>
	<span class="connect-toggle d-none d-md-block">Connect</span>
	
	
	
		
</div><!-- #header -->
	<a class="btn btn--block btn--solid  d-block d-md-none" href="tel:"><i class="fas fa-phone"></i> +61 7 3844 5555</a>
<div class="mobile-header d-block d-md-none">
	<a href="<?php echo get_home_url(); ?>" id="mobile-logo" class="mobile-logo">
			<img class="mobile-logo" src="<?php bloginfo('template_directory'); ?>/img/mg-logo.svg" alt="The Macro Group">
	</a>
	<span class="menu-toggle"><i class="fal fa-bars"></i></span>
	<span class="connect-toggle"><i class="fal fa-envelope"></i></span>
</div>


<div class="menu-container">
	<span class="menu-close"><i class="fal fa-times"></i></span>
	<?php wp_nav_menu(
		array(
			'theme_location'  => 'main',
			'container_class' => 'main-menu__container',
			'container_id'    => '',
			'menu_class'      => 'main-menu',
			'fallback_cb'     => '',
			'menu_id'         => 'main-menu',
		)
	); ?>
	<?php wp_nav_menu(
		array(
			'theme_location'  => 'main-buttons',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'main-menu-buttons',
			'fallback_cb'     => '',
			'menu_id'         => 'main-menu-buttons',
		)
	); ?>
</div>


<div id="content" class="page">
