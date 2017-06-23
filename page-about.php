<?php
/**
 * The template for displaying about page.
 * Template Name: About
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

	<?php get_template_part( 'template-parts/row', 'search' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="ui container center aligned">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>

			</div>

      <div class="destination-row">
        <div class="ui three column grid padded stackable">
    			<div class="column">
    				<a href="#">
    					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/when.jpg" alt="">
    					<div class="span-wrap">
    						<span>Destination of the Month</span>
    					</div>
    				</a>
    			</div>
          <div class="column">
    				<a href="#">
    					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inspire.jpg" alt="">
    					<div class="span-wrap">
    						<span>Destination of the Month</span>
    					</div>
    				</a>
    			</div>
    			<div class="column">
    				<a href="#">
    					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inspire.jpg" alt="">
    					<div class="span-wrap">
    						<span>Destination of the Month</span>
    					</div>
    				</a>
    			</div>
    		</div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
