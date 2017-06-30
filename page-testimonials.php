<?php
/**
 * The template for displaying testimonial pages.
 *
 * Template Name: Testimonials
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if( have_rows('testimonials') ): $i = 0; ?>
				<?php while ( have_rows('testimonials') ) : the_row(); ?>
					<div class="testimonial-wrap" style="background-image: url(<?php echo get_sub_field('image')['url']; ?>);" >
		        <div class="ui two column grid padded stackable">
		          <div class="<?php echo ($i % 2 == 0 ? 'right' : 'left'); ?> floated column testi-margin">
		            <div class="testi">
		              <?php the_sub_field('content'); ?>
		              <p>- <?php the_sub_field('name'); ?></p>
		            </div>
		          </div>
		        </div>
		      </div>
			<?php $i++; endwhile; ?>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
