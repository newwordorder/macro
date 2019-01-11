<?php // CONTACT

if( get_row_layout() == 'contact' ):

  $formShortcode = get_sub_field('form_shortcode');
  $spaceBelow = get_sub_field('text_block_space_below');

  ?>



<div class="container space-below--<?php echo $spaceBelow ?>">
  <div class="row">
    <div class="col-md-8">

      <?php echo do_shortcode( $formShortcode ); ?>

    </div>
    <div class="col-md-4 text-center contact-info">

        
  <?php if( have_rows('social_links','options') ): ?>
  <h6>Social</h6>
  <ul class="social-links">
  <?php while ( have_rows('social_links','options') ) : the_row(); ?>
		<li>
	<a class="social-link" href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('icon'); ?></a>
	</li>
	<?php endwhile; 
		 ?>
		</ul>
		<?php	endif; ?>


  <?php if( have_rows('call','options') ): ?>
  <h6>Call</h6>
  <?php while ( have_rows('call','options') ) : the_row(); ?>

	<p><?php the_sub_field('number'); ?></p>

	<?php endwhile; 
		else :
		endif; ?>

  <?php if( have_rows('email','options') ): ?>
  <h6>Email</h6>
  <?php while ( have_rows('email','options') ) : the_row(); ?>

	<p class="mb-3"><a href="mailto:<?php the_sub_field('email_address'); ?>"><?php the_sub_field('email_address'); ?></a></p>

	<?php endwhile; 
		else :
		endif; ?>
	<?php if( have_rows('locations','options') ): ?>
  <h6>Locations</h6>
  <div class="row">
  <?php while ( have_rows('locations','options') ) : the_row(); ?>
  <div class="col-6">
	<p><?php the_sub_field('location'); ?></p>
	</div>
	<?php endwhile; ?>
	</div>
	<?php endif; ?>


    </div>
  </div>
</div>


<?php endif;

?>
