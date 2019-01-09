<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

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
		<div class="row justify-content-center mb-5">
			<div class="col-md-8 text-center">

				<h1>Blog</h1>
				<?php
				$categories = get_categories( array(
						'orderby' => 'name',
						'order'   => 'ASC'
				) );
				echo '<ul class="blog-categories">';
				foreach( $categories as $category ) {
						$category_link = sprintf( 
								'<a class="blog-categories__link" href="%1$s" alt="%2$s">%3$s</a>',
								esc_url( get_category_link( $category->term_id ) ),
								esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
								esc_html( $category->name )
						);

						echo '<li>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li> ';
						
				} 
				echo '</ul>';
				?>

			</div>
		</div>
	</div>


	<div class="container" id="main" tabindex="-1">


		<?php /* Start the Loop */ ?>

		<div class="row">

			<?php while ( have_posts() ) : the_post(); ?>
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

			<?php endwhile; ?>
			

		</div>
					
					

			


			<!-- The pagination component -->
<div class="row justify-content-center">
			<?php global $wp_query; // you can remove this line if everything works for you
			
			// don't display the button if there are not enough posts
			if (  $wp_query->max_num_pages > 1 )
				echo '<div class="btn btn--outline loadmore m-auto">More posts</div>'; 
			?>
		
</div>
</div><!-- Container end -->

</section>
<?php get_footer(); ?>
