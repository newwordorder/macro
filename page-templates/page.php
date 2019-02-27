<?php
/**
* Template Name: Page
*
*
* @package understrap
*/

get_header();

?>

<?php 


$backgroundImage = get_field('background_image');

$image = $backgroundImage['background_image'];
$backgroundEffect = $backgroundImage['background_effect'];
$imageOverlay = $backgroundImage['image_overlay'];

?>

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
</div>



</section>

<?php get_template_part( 'page-templates/blocks' ); ?>
<?php get_footer();
