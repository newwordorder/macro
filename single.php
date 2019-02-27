<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();

  $backgroundImage = get_field('background_image');
  $image = get_field('background_image_background_image');
  $backgroundEffect = get_field('background_image_background_effect');
  $imageOverlay = get_field('background_image_image_overlay');

?>

<?php while ( have_posts() ) : the_post(); ?>

<section id="sub-header" class="page-header page-header--page bg-effect--<?php echo $backgroundEffect ?> imagebg bg--dark" data-overlay="<?php echo $imageOverlay ?>">


  <?php if( !empty($image) ):

    // vars
    $url = $image['url'];
    $alt = $image['alt'];

  ?>
    <div class="background-image-holder">
      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
    </div>
  <?php endif; ?>

  <a href="<?php echo get_home_url(); ?>" id="site-logo" class="site-logo">
		<img class="site-logo" src="<?php bloginfo('template_directory'); ?>/img/mg-logo.svg" alt="The Macro Group">
	</a>
  <h1 class="title"><?php the_title(); ?></h1>



</section>

<section id="single-wrapper" class="bg--dark">

	<div class="container" id="content" tabindex="-1">



    <main id="main" class="row justify-content-center">

      <div class="col-md-8">

        <?php the_content();

        ?>


      </div>


    </main><!-- #main -->


</div>

</div><!-- Container end -->

</section><!-- Wrapper end -->


<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
