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
				while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php the_title( '<h1 class="ui horizontal divider header entry-title">', '</h1>' ); ?>
          </header><!-- .entry-header -->
        </article>

				<?php endwhile; // End of the loop.
				?>

			</div>
      <div class="ui divider hidden"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
