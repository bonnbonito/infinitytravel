<?php
/**
 * The template for single continent page.
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

					get_template_part( 'template-parts/content', 'continent' );

				endwhile; // End of the loop.
				?>

			</div>
      <div class="ui divider hidden"></div>
      <div class="destination-row">
        <?php
				global $post;
				$args = array(
					'post_type' => 'country',
					'tax_query' => array(
						array(
							'taxonomy' => 'continent',
							'field'		 => 'slug',
							'terms'		=> $post->post_name
						)
					)
				);
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) : ?>
					<div class="ui four column grid padded stackable">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="column">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/andora.png" alt="">
                <div class="span-wrap">
                  <span><?php the_title(); ?></span>
                </div>
              </a>
            </div>
					<?php endwhile; ?>
					</div>
				<?php else: ?>
					<div class="ui warning message container">
					  <i class="warning icon"></i>
					  No Countries added
					</div>
				<?php endif; ?>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
