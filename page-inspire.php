<?php
/**
 * The template for displaying inspire me page.
 * Template Name: Inspire Me
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

get_header(); ?>
	<div class="slide-banner">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home.jpg" alt="">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/s2.jpg" alt="">
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="ui container center aligned">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'inspire' );

				endwhile; // End of the loop.
				?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
