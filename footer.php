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
		<div class="container-wide">

				<div class="row align-items-center">
						<div class="col-sm-10">
								<p>Copyright © 2018 The Macro Group | LIMITED AFSL: 485843 | DISCLAIMER | 
								 <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a></p>
						</div>
						
						<div class="col-sm-2 footer__logo-container">
              <a class="footer__logo" href="<?php echo get_home_url(); ?>"><img class="footer__logo" src="<?php bloginfo('template_directory'); ?>/img/mg-icon.svg" alt="The Macro Group"></a>
						</div>

				</div>

</footer>


<div class="connect">
  <span class="connect-close"><i class="fal fa-times"></i></span>
  <div class="connect__map">
  <?php 

	$location = get_field('map','options');

	if( !empty($location) ):
	?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
	<?php endif; ?>
  </div>
  <div class="connect__info">

  <?php if( have_rows('social_links','options') ): ?>
  <h6>Social</h6>
  <ul class="social-links">
  <?php while ( have_rows('social_links','options') ) : the_row(); ?>
		<li>
	<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('icon'); ?></a>
	</li>
	<?php endwhile; 
		 ?>
		</ul>
		<?php	endif; ?>


  <?php if( have_rows('call','options') ): ?>
  <h6>Call</h6>
  <?php while ( have_rows('call','options') ) : the_row(); ?>

	<p><?php the_sub_field('number'); ?></p>

	<?php endwhile; 
		else :
		endif; ?>

  <?php if( have_rows('email','options') ): ?>
  <h6>Email</h6>
  <?php while ( have_rows('email','options') ) : the_row(); ?>

	<p class="mb-3"><a href="mailto:<?php the_sub_field('email_address'); ?>"><?php the_sub_field('email_address'); ?></a></p>

	<?php endwhile; 
		else :
		endif; ?>
	<?php if( have_rows('locations','options') ): ?>
  <h6>Locations</h6>
  <div class="row">
  <?php while ( have_rows('locations','options') ) : the_row(); ?>
  <div class="col-6">
	<p><?php the_sub_field('location'); ?></p>
	</div>
	<?php endwhile; ?>
	</div>
	<?php endif; ?>
	 	 	 	 

  </div>
</div>


<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome-all.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG0dYdyo64BioGmYs9HZ1ZTE5ZopQ8e48"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>

<script>
	AOS.init();
</script>
<script>
  var mySwiper = new Swiper ('.page-header--home', {
  // Optional parameters
  direction: 'horizontal',
  effect: 'fade',
  speed: 1000,
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  loop: true,
  slidesPerView:1,


})
  </script>



<script>

	(function($) {
		$(".menu-toggle").click(function () {
			$(".menu-container").addClass("is-active");
		});

		$(".menu-close").click(function () {
			$(".menu-container").removeClass("is-active");
    });
    
    $(".connect-toggle").click(function () {
			$(".connect").addClass("is-active");
		});

		$(".connect-close").click(function () {
			$(".connect").removeClass("is-active");
		});



	
	})( jQuery );

</script>


</body>

</html>
