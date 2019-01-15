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
