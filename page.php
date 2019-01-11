<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<section class="wrapper bg--dark my-5" id="page-wrapper">

	<div class="container my-5" id="content" tabindex="-1">

		<div class="row justify-content-center">

			<!-- Do the left sidebar check -->

			<main class="site-main col-md-8" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
				<?php the_title( '<h1 class="my-5">', '</h1>' ); ?>
				<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->

	</div><!-- .row -->

				</section><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
