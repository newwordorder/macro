<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();

  $backgroundImage = get_field('background_image');
  $image = $backgroundImage['background_image'];
  $backgroundEffect = $backgroundImage['background_effect'];

?>

<?php while ( have_posts() ) : the_post(); ?>

<section id="sub-header" class="page-header page-header--work bg-effect--<?php echo $backgroundEffect ?> imagebg" data-overlay="5" >

<?php
if( !empty($image) ):

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
    <div class="col-lg-6 col-md-8 text-center">

      <h1 class="page-title"><?php the_title(); ?></h1>

    </div>
  </div>
</div>



</section>

<section id="single-wrapper">

	<div class="container" id="content" tabindex="-1">



			<main id="main">



					<?php the_content();

          // check if the flexible content field has rows of data
          if( have_rows('posts_blocks') ):

            // loop through the rows of data
            while ( have_rows('posts_blocks') ) : the_row();



            if( get_row_layout() == 'text_block' ): ?>

            <div class="row justify-content-center">
              <div class="col-md-8">

                <?php  the_sub_field('text_block'); ?>

              </div>
            </div>

          <?php  endif;


            endwhile;

          endif;

          ?>





			</main><!-- #main -->




</div><!-- Container end -->

</section><!-- Wrapper end -->

<?php
           // the query
           $the_query = new WP_Query( array(
             'category__in' => wp_get_post_categories( $post->ID ), 
              'posts_per_page' => 3,
              'post__not_in' => array( $post->ID ) 
           ));
        ?>

			<?php if ( $the_query->have_posts() ) : ?>

<section class="related-posts space--lg">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2>Related posts</h2>
      </div>
    </div>
    <div class="row justify-content-center">
    
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<article class="col-sm-6 col-md-4 text-center blog-tile">

					<a href="<?php the_permalink(); ?>" class="">
						<div class="blog-tile__thumb ">
							<?php
							$backgroundImage = get_field('background_image_background_image');

							if( !empty($backgroundImage) ):

								// vars
								$url = $backgroundImage['url'];
								$alt = $backgroundImage['alt'];

								$size = '600x400';
								$thumb = $backgroundImage['sizes'][ $size ];
								$width = $backgroundImage['sizes'][ $size . '-width' ];
								$height = $backgroundImage['sizes'][ $size . '-height' ];

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

			
  </div>

</div>
</section>

<?php endwhile;

          // reset post data
          wp_reset_postdata();

      ?>
    <?php endif; ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
