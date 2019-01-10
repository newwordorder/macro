<?php
/**
* Template Name: Home
*
* @package understrap
*/

get_header();

$backgroundImage = get_field('background_image');

$image = $backgroundImage['background_image'];
$backgroundEffect = $backgroundImage['background_effect'];
$imageOverlay = $backgroundImage['image_overlay'];


$introText = get_field('intro_text');
$introSentance = get_field('intro_sentance');
$hidePageTitle = get_field('hide_page_title');

?>

<section id="sub-header" class="page-header page-header--home bg-effect--ken-burns imagebg" data-overlay="<?php echo $imageOverlay ?>" >

  
<?php 

$images = get_field('gallery');

if( $images ): ?>

<div class="swiper-wrapper" style="position: absolute;
    top: 0;
    padding: 0;">
        <?php foreach( $images as $image ): ?>
        <div class="swiper-slide bg--dark" >
        <div class="background-image-holder">
                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>
    </div>
        <?php endforeach; ?>
<?php endif; ?>

  
  </div>

  


</section>




<?php get_template_part( 'page-templates/blocks' ); ?>

<?php get_footer();
