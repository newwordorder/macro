<?php // FEATURE COLUMNS

if( get_row_layout() == 'feature_columns' ):

  $spaceBelow = get_sub_field('feature_columns_space_below');
  $type = get_sub_field('feature_columns_type');
  $imageFormat = get_sub_field('feature_columns_image_format');
  $columns = get_sub_field('feature_columns_columns_per_row');
  $boxed = get_sub_field('feature_columns_boxed');
  $centered = get_sub_field('feature_columns_centered');

?>


  <?php if( have_rows('feature_columns_column') ): ?>
    <div class="container space-below--<?php echo $spaceBelow ?>">
      <div class="row">
        <?php while( have_rows('feature_columns_column') ): the_row();

          $text = get_sub_field('text_block');
          $image = get_sub_field('image');
          $icon = get_sub_field('icon');

        ?>

        <div class="col-md-<?php echo $columns; ?> feature-column">

          <div class="feature-column__content <?php if( $boxed == 'yes' ): ?>feature-column--boxed<?php endif; ?> <?php if( $centered == 'yes' ): ?>text-center<?php endif; ?>">

            <?php if( $type == 'image' ):
              if( !empty($image) ):

                // vars
                $url = $image['url'];
                $alt = $image['alt'];


                ?>
                <?php if( $imageFormat == 'square' ): ?>
                <div class="feature-column__image image image--square">
                  <div class="background-image-holder">
                      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
                  </div> 
                </div>
               <?php endif; //end square ?>

               <?php if( $imageFormat == 'landscape' ): ?>
                <div class="feature-column__image image image--landscape">
                  <div class="background-image-holder">
                      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
                  </div> 
                </div>
               <?php endif; //end landscape ?>

               <?php if( $imageFormat == 'portrait' ): ?>
                <div class="feature-column__image image image--portrait">
                  <div class="background-image-holder">
                      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
                  </div> 
                </div>
               <?php endif; //end portrait ?>

               <?php if( $imageFormat == 'none' ): ?>
                <img class="feature-column__image" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
               <?php endif; //end none ?>
                
              <?php endif; ?>
            <?php endif; ?>

            <?php if( $type == 'icon' ):if( !empty($icon) ):

              // vars
              $url = $icon['url'];
              $alt = $icon['alt'];

              ?>
              <?php if( $boxed == 'yes' ): ?><div class="feature-column--boxed__inner"><?php endif; ?>
                <img class="feature-column__icon" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
              <?php endif; ?>
            <?php endif; ?>

            <?php if( $boxed == 'yes' ): ?><div class="feature-column--boxed__inner"><?php endif; ?>

              <?php echo $text ?>

              <?php get_template_part( 'page-templates/blocks/block-partials/buttons' ); ?>

              <?php if( $boxed == 'yes'  ): ?></div><?php endif; ?>

            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

<?php endif; ?>
