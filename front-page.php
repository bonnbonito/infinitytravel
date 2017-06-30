<?php
/**
 * The template for displaying front.
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

	<div id="primary" class="content-area front-area">
		<main id="main" class="site-main" role="main">

			<div class="ui container center aligned">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="destination-row">
		<?php if( have_rows('two_blocks') ): ?>
		<div class="ui two column grid padded stackable">
			<?php while ( have_rows('two_blocks') ) : the_row(); ?>
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
		<div class="ui three column grid padded stackable">
			<div class="column">
				<a href="<?php the_field('first_block_link'); ?>">
					<img src="<?php echo get_field('first_block_image')['url']; ?>" alt="<?php echo get_field('first_block_image')['alt']; ?>">
					<div class="span-wrap">
						<span><?php the_field('first_block_title'); ?></span>
					</div>
				</a>
			</div>
			<div class="column mid-logo" style="background-color: #434d4b;">
				<a href="#">
					<img src="<?php echo get_field('middle_block_image')['url']; ?>" alt="<?php echo get_field('middle_block_image')['alt']; ?>">
					<p><?php the_field('middle_block_title'); ?></p>
				</a>
			</div>
			<div class="column">
				<a href="<?php the_field('last_block_link'); ?>">
					<img src="<?php echo get_field('last_block_image')['url']; ?>" alt="<?php echo get_field('last_block_image')['alt']; ?>">
					<div class="span-wrap">
						<span><?php the_field('last_block_title'); ?></span>
					</div>
				</a>
			</div>
		</div>
		<?php if( have_rows('bottom_two_blocks') ): ?>
		<div class="ui two column grid padded stackable">
			<?php while ( have_rows('bottom_two_blocks') ) : the_row(); ?>
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

<?php
get_footer();
