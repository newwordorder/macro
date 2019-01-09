<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>
<section id="sub-header" class="page-header page-header--page bg--dark imagebg" data-overlay="5">

<?php
	$backgroundImage = get_field('background_image_background_image');

	if( !empty($backgroundImage) ):

		// vars
		$url = $backgroundImage['url'];
		$alt = $backgroundImage['alt'];
		?>
		<div class="background-image-holder ">
			<img class="" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
		</div>
	<?php endif; ?>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 text-center">

				<h1 class=""><?php the_title(); ?></h1>
				<a href="<?php the_permalink(); ?>" class="btn btn--outline">Read</a>

			</div>
		</div>
	</div>

</section>
<section class="space--md">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center">
			<?php
						the_archive_title( '<h1>', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
			

    </div>
  </div>
</div>


	<div class="container" id="main" tabindex="-1">




				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<div class="row">

					<?php while ( have_posts() ) : the_post(); ?>
						<article class="col-sm-6 col-md-4 text-center blog-tile">

							<a href="<?php the_permalink(); ?>" class="">
                  <div class="blog-tile__thumb ">
						          <?php
						          $workImage = get_field('background_image_background_image');

						          if( !empty($workImage) ):

						            // vars
                        $url = $workImage['url'];
                        $alt = $workImage['alt'];

                        $size = '600x400';
                        $thumb = $workImage['sizes'][ $size ];
                        $width = $workImage['sizes'][ $size . '-width' ];
                        $height = $workImage['sizes'][ $size . '-height' ];

						            ?>
                        <div class="background-image-holder ">
						              <img class="" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>
                        </div>
						          <?php endif; ?>
                    </div>

										<h3><?php the_title(); ?></h3>
                    <a class="link" href="<?php the_permalink(); ?>">Read</a>
								</a>


					</article>

					<?php endwhile; ?>
					

					</div>
					
					

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>


			<!-- The pagination component -->

	<div class="row justify-content-center">
    <div class="col-md-8 text-center">
			<?php global $wp_query; // you can remove this line if everything works for you
			
			// don't display the button if there are not enough posts
			if (  $wp_query->max_num_pages > 1 )
				echo '<div class="btn btn--outline loadmore m-auto">More posts</div>'; 
			?>
		</div>
	</div>


</div><!-- Container end -->
</section>

<?php get_footer(); ?>

