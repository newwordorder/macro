<?php
/**
* Template Name: Home
*
* @package understrap
*/

get_header();

$backgroundImage = get_field('background_image');

$image = $backgroundImage['background_image'];
$imageOverlay = $backgroundImage['image_overlay'];
$backgroundEffect = $backgroundImage['background_effect'];

$introText = get_field('intro_text');
$introSentance = get_field('intro_sentance');
$hidePageTitle = get_field('hide_page_title');

?>

<section id="sub-header" class="parallax-container page-header page-header--home bg-effect--<?php echo $backgroundEffect ?> imagebg videobg" data-overlay="5" >

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
  <div class="row">
    <div class=" col-sm-8 col-md-6 offset-lg-1">

      <?php if ($introText): ?>
        <h1 class="page-title page-title--home"><?php echo $introText; ?></h1>
      <?php endif; ?>
      <?php if ($introSentance): ?>
        <p><?php echo $introSentance; ?></p>
      <?php endif; ?>
    </div>
    <div class="col-sm-4 col-md-5 d-flex align-items-center justify-content-end mt-4 mt-md-0">

      <img data-aos="fade-up" data-aos-delay="300" class="bob-icon" src="<?php bloginfo('template_directory'); ?>/img/bob.png" alt="Langs Building Supplies">

    </div>
  </div>
</div>



</section>


<?php get_template_part( 'page-templates/blocks' ); ?>
<?php get_template_part( 'page-templates/blocks/pre-footer-cta' ); ?>

<?php get_footer();
