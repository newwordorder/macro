<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>




<footer id="footer" class="footer">
		<div class="container">

				<div class="row align-items-center">
						<div class="col-sm-8">
								<p>Copyright © 2018 Langs Building Supplies, All Rights Reserved</p>
								<p> <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a> | Site by NWO</p>
						</div>
						
						<div class="col-sm-4">
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'footer-social',
									'container_class' => 'footer-nav footer-nav__social',
									'container_id'    => '',
									'menu_class'      => 'menu',
									'fallback_cb'     => '',
									'menu_id'         => 'footer__social',
									'walker'          => new understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
						</div>

				</div>

</footer>





<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flickity.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome-all.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/typed.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ytplayer.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<script>
	AOS.init();
</script>



</body>

</html>
