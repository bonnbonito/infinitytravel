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
        $posts = get_field('countries');
        if( $posts ):
        ?>
        <div class="ui four column grid padded stackable">
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
            <div class="column">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/andora.png" alt="">
                <div class="span-wrap">
                  <span><?php the_title(); ?></span>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); endif; ?>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
