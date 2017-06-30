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
				<?php if( have_rows('three_box_content') ): ?>
				<div class="ui three column grid padded stackable">
					<?php while ( have_rows('three_box_content') ) : the_row(); ?>
					<div class="column">
						<a href="<?php the_sub_field('link'); ?>">
							<img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
							<div class="span-wrap">
								<span><?php the_sub_field('title'); ?></span>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
