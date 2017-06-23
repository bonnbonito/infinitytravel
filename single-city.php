<?php
/**
 * The template for single city page.
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
						<?php breadcrumbs_fx('country'); ?>
					  <i class="right chevron icon divider"></i>
					  <div class="section"><?php the_title(); ?></div>
					</div>
        </div>
        <div class="right item">
          <a class="ui button"><i class="phone icon"></i> CALL BACK</a>
        </div>
      </div>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="ui container center aligned">

				<?php
				while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php the_title( '<h1 class="ui horizontal divider header entry-title">', ' Hotels</h1>' ); ?>
          </header><!-- .entry-header -->
        </article>

				<?php endwhile; // End of the loop.
				?>

			</div>
      <div class="ui divider hidden"></div>

      <div class="ui container">
        <div class="ui three column grid doubling">
          <div class="column">
            <a href="#">
              <div class="hotel-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/h1.png" alt="">
                <div class="hotel-info">
                  <p class="hotel-name">Asimina Suites</p>
                  <p class="hotel-loc">Asimina Suites, Cyprus</p>
                  <div class="stars">
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                  </div>
                  <div class="hotel-excerpt">Constantinou Bros Asimina Suites Hotel is a luxurious, 5 star, adult focused, all suites hotel with its own beautiful...</div>
                  <a href="#" class="ui button basic">Details and special offer</a>
                </div>
              </div>
            </a>
          </div>
          <div class="column">
            <a href="#">
              <div class="hotel-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/h1.png" alt="">
                <div class="hotel-info">
                  <p class="hotel-name">Asimina Suites</p>
                  <p class="hotel-loc">Asimina Suites, Cyprus</p>
                  <div class="stars">
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                  </div>
                  <div class="hotel-excerpt">Constantinou Bros Asimina Suites Hotel is a luxurious, 5 star, adult focused, all suites hotel with its own beautiful...</div>
                  <a href="#" class="ui button basic">Details and special offer</a>
                </div>
              </div>
            </a>
          </div>
          <div class="column">
            <a href="#">
              <div class="hotel-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/h1.png" alt="">
                <div class="hotel-info">
                  <p class="hotel-name">Asimina Suites</p>
                  <p class="hotel-loc">Asimina Suites, Cyprus</p>
                  <div class="stars">
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                  </div>
                  <div class="hotel-excerpt">Constantinou Bros Asimina Suites Hotel is a luxurious, 5 star, adult focused, all suites hotel with its own beautiful...</div>
                  <a href="#" class="ui button basic">Details and special offer</a>
                </div>
              </div>
            </a>
          </div>
          <div class="column">
            <a href="#">
              <div class="hotel-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/h1.png" alt="">
                <div class="hotel-info">
                  <p class="hotel-name">Asimina Suites</p>
                  <p class="hotel-loc">Asimina Suites, Cyprus</p>
                  <div class="stars">
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                    <i class="star icon"></i>
                  </div>
                  <div class="hotel-excerpt">Constantinou Bros Asimina Suites Hotel is a luxurious, 5 star, adult focused, all suites hotel with its own beautiful...</div>
                  <a href="#" class="ui button basic">Details and special offer</a>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
