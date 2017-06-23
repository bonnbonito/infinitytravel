<?php
/**
 * The template for displaying Our Holiday page.
 * Template Name: Our Holidays
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

	<div class="row-search">
		<div class="ui middle aligned center aligned grid">
			<div class="column">
				<form class="ui form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
					<div class="inline fields">
						<div class="sixteen wide field">
							<label for="s-hotels">Search</label>
							<div class="ui fluid search">
								<div class="ui icon input">
									<input class="prompt" type="text" placeholder="Search Hotels" name="s" id="s-hotels">
									<i class="search icon"></i>
									<input type="submit" class="s-submit">
								</div>
								<div class="results"></div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

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
		<div class="ui two column grid padded stackable">
			<div class="column">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/travel.jpg" alt="">
					<div class="span-wrap">
						<span>Destination of the Month</span>
					</div>
				</a>
			</div>
			<div class="column">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/travel2.jpg" alt="">
					<div class="span-wrap">
						<span>Resort of the Month</span>
					</div>
				</a>
			</div>
		</div>
		<div class="ui three column grid padded stackable">
			<div class="column">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/when.jpg" alt="">
					<div class="span-wrap">
						<span>Destination of the Month</span>
					</div>
				</a>
			</div>
			<div class="column mid-logo" style="background-color: #434d4b;">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mid-logo.png" alt="">
					<p>Why book with<br>Infinity&Beyond Travel?</p>
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
		<div class="ui two column grid padded stackable">
			<div class="column">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/travel.jpg" alt="">
					<div class="span-wrap">
						<span>Destination of the Month</span>
					</div>
				</a>
			</div>
			<div class="column">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/travel2.jpg" alt="">
					<div class="span-wrap">
						<span>Resort of the Month</span>
					</div>
				</a>
			</div>
		</div>
	</div>

<?php
get_footer();
