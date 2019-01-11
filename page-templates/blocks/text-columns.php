<?php // TEXT COLUMNS

if( get_row_layout() == 'text_columns' ):

  $narrowColumn = get_sub_field('narrow_column');
  $wideColumn = get_sub_field('wide_column');
  $spaceBelow = get_sub_field('text_block_space_below');

  ?>



<div class="container-wide space-below--<?php echo $spaceBelow ?>">
  <div class="row">
    <div class="col-md-4">

      <?php echo $narrowColumn ?>

    </div>
    <div class="col-md-8">

        <?php echo $wideColumn ?>

    </div>
  </div>
</div>


<?php endif;

?>
