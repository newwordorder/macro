<?php // TEXT & IMAGE BLOCK

if( get_row_layout() == 'text_image' ):



$media = get_sub_field('media');

$text = get_sub_field('text_block');

$image = get_sub_field('image');
$imageFormat = get_sub_field('image_format');


$videoEmbedCode = get_sub_field('video_embed_code');
$videoCoverImage = get_sub_field('video_cover_image');

$layout = get_sub_field('layout');
$flipLayout = get_sub_field('flip_layout');
$spaceBelow = get_sub_field('space_below');


?>

  <div class="container space-below--<?php echo $spaceBelow ?>">

      <div class="row justify-content-between flippable <?php if( $flipLayout == 'yes' ): echo 'flippable--flip'; endif; ?>">
          <div class=" flippable__text <?php if( $layout == '1/3' ): echo 'col-md-8'; endif; ?> <?php if( $layout == '1/2' ): echo 'col-md-6'; endif; ?> <?php if( $layout == '2/3' ): echo 'col-md-4'; endif; ?>">
              <?php echo $text ?>
              <?php get_template_part( 'page-templates/blocks/block-partials/buttons' ); ?>
          </div>
          <div class="<?php if( $layout == '1/3' ): echo 'col-md-3'; endif; ?> <?php if( $layout == '1/2' ): echo 'col-md-5'; endif; ?> <?php if( $layout == '2/3' ): echo 'col-md-7'; endif; ?> flippable__image">

            <?php if( $media == 'image' ): ?>
              <?php if( !empty($image) ):

                // vars
                $url = $image['url'];
                $alt = $image['alt'];

               ?>
               
               <?php if( $imageFormat == 'square' ): ?>
                <div class="image image--square">
                  <div class="background-image-holder">
                      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
                  </div> 
                </div>
               <?php endif; //end square ?>

               <?php if( $imageFormat == 'landscape' ): ?>
                <div class="image image--landscape">
                  <div class="background-image-holder">
                      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
                  </div> 
                </div>
               <?php endif; //end landscape ?>

               <?php if( $imageFormat == 'portrait' ): ?>
                <div class="image image--portrait">
                  <div class="background-image-holder">
                      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
                  </div> 
                </div>
               <?php endif; //end portrait ?>

               <?php if( $imageFormat == 'none' ): ?>
                <img class="" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
               <?php endif; //end none ?> 

              <?php endif; //end $image ?>

            <?php endif; //end $media ?>

            <?php if( $media == 'gallery' ): ?>

            <?php endif; //end $media ?>

            <?php if( $media == 'video' ): ?>

              <div class="video-cover ">
              	<div class="background-image-holder ">
                  <?php if( !empty($videoCoverImage) ):

                    // vars
                    $url = $videoCoverImage['url'];
                    $alt = $videoCoverImage['alt'];

                   ?>
                    <img class="" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
                  <?php endif; //end $image ?>
              	</div>
              	<div class="video-play-icon video-play-icon--sm"></div>
                <div class="embed-container ">
              	   <?php echo $videoEmbedCode; ?>
                </div>
              </div><!--end video cover-->

            <?php endif; //end $media ?>
          </div>
      </div>
    </div>

<?php endif; //end text_image row

?>
