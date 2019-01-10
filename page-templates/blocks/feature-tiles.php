<?php // FEATURE TILES

if( get_row_layout() == 'feature_tiles' ):

  $spaceBelow = get_sub_field('feature_tiles_space_below');
  $type = get_sub_field('feature_tiles_type');
  $columns = get_sub_field('feature_tiles_columns_per_row');

?>


  <?php if( have_rows('feature_tiles_column') ): ?>
  <div class="feature-tiles">
    <div class="container-fluid space-below--<?php echo $spaceBelow ?>">
      <div class="row justify-content-center">
        <?php while( have_rows('feature_tiles_column') ): the_row();

          $text = get_sub_field('text');
          $image = get_sub_field('background_image');
          $link = get_sub_field('link');

        ?>

        <div class="col-md-<?php echo $columns; ?> ">
          <a href="<?php echo $link ?>">
            <div class="feature-tile  feature-tile--<?php echo $type ?> hover-element">
                <div class="hover-element__initial" >
                  <?php $image = get_sub_field('background_image');
                  if( !empty($image) ):
                    // vars
                    $url = $image['url'];
                    $alt = $image['alt'];
                  ?>
                    <div class="background-image-holder">
                      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="feature-tile__content">
                  <span class="feature-tile__text"><?php echo $text ?></span>
                  <?php get_template_part( 'page-templates/blocks/block-partials/buttons' ); ?>
                  </div>
                  <div class="hover-element__reveal" data-overlay="8"></div>
              </div>
            </a>

            </div>
        <?php endwhile; ?>
      </div>
    </div>
    </div>
  <?php endif; ?>

<?php endif; ?>
