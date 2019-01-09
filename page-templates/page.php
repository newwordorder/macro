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

$headerType = get_field('image_or_video');


$backgroundImage = get_field('background_image');

$image = $backgroundImage['background_image'];
$backgroundEffect = $backgroundImage['background_effect'];

$introText = get_field('intro_text');
$hidePageTitle = get_field('hide_page_title');

?>

<section id="sub-header" class="page-header page-header--page bg-effect--<?php echo $backgroundEffect ?> imagebg videobg <?php if( $invertColours == 'yes' ): echo 'image--light'; endif; ?>" data-overlay="5">


  <?php if( !empty($image) ):

    // vars
    $url = $image['url'];
    $alt = $image['alt'];

  ?>
    <div class="background-image-holder">
      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
    </div>
  <?php endif; ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
  </div>
</div>



</section>

<?php get_template_part( 'page-templates/blocks' ); ?>
<?php get_template_part( 'page-templates/blocks/pre-footer-cta' ); ?>
<?php get_footer();
