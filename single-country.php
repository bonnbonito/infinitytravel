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
	<div class="breadcrumb-row">
		<div class="ui container">
			<div class="ui large secondary menu">
        <div class="item">
					<div class="ui large breadcrumb">
					  <a class="section" href="<?php bloginfo('url'); ?>">Home</a>
					  <i class="right chevron icon divider"></i>
					  <a class="section" href="#">Our Destination</a>
						<i class="right chevron icon divider"></i>
						<?php breadcrumbs_fx('continent'); ?>
					  <i class="right chevron icon divider"></i>
					  <div class="section"><?php the_title(); ?></div>
					</div>
        </div>
        <div class="right item hide-md">
          <a class="ui button"><i class="phone icon"></i> CALL BACK</a>
        </div>
      </div>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="ui container">

				<?php
				while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php the_title( '<h1 class="ui horizontal divider header entry-title">', '</h1>' ); ?>
          </header><!-- .entry-header -->
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
        </article>
				<?php endwhile; // End of the loop.
				?>
			</div>
      <div class="ui divider hidden"></div>
			<div class="ui container">
				<?php the_title( '<h2 class="ui horizontal divider header uppercase">Explore ', '</h2>' ); ?>
			</div>
			<div class="ui divider hidden"></div>
			<div class="destination-row">
        <?php
				global $post;
				$args = array(
					'post_type' => 'city',
					'tax_query' => array(
						array(
							'taxonomy' => 'country',
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
