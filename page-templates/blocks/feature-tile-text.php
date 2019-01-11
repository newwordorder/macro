<?php // FEATURE TILES

if( get_row_layout() == 'feature_tile_text' ):

    $text = get_sub_field('feature_tile_text_text');
    $image = get_sub_field('feature_tile_text_background_image');
    $link = get_sub_field('feature_tile_text_link');

 

?>


  <div class="feature-tiles">
    <div class="container-fluid">
      <div class="row align-items-center flippable">

        <div class="col-md-4 flippable__text">
          <a href="<?php echo $link ?>">
            <div class="feature-tile  feature-tile--landscape hover-element">
                <div class="hover-element__initial" >
                  <?php $image = get_sub_field('feature_tile_text_background_image');
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
            <div class="col-md-8 flippable__image">
                <div class="p-4">
                <?php the_sub_field('feature_tile_text_text_block'); ?>
                <div>
            </div>
      </div>
    </div>
    </div>
    </div>
    </div>
<?php endif; ?>
