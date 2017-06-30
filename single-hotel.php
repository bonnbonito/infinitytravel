<?php
/**
 * The template for single city hotel.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

get_header(); ?>
<div class="hotel-slider">
  <div class="hotel-banner">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home.jpg" alt="">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/s2.jpg" alt="">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home.jpg" alt="">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/s2.jpg" alt="">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home.jpg" alt="">
  </div>
  <div class="hotel-title">
    <h1><?php the_title(); ?></h1>
    <h3 class="tax-city"><?php echo get_city_name(); ?></h3>
  </div>
  <div class="thumbnail-slider">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/thum.png" alt="" data-slideto="0">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/thum.png" alt="1" data-slideto="1">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/thum.png" alt="2" data-slideto="2">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/thum.png" alt="3" data-slideto="3">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/thum.png" alt="4" data-slideto="4">
  </div>
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
            <?php breadcrumbs_fx('city'); ?>
					  <i class="right chevron icon divider"></i>
						<?php breadcrumbs_fx('country'); ?>
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

			<div class="ui container center aligned">

				<?php
				while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="ui divider hidden"></div>
          <div class="ui hotel-tab tabular menu">
            <div class="active item" data-tab="first"><a href="#">OVERVIEW</a></div>
            <div class="item" data-tab="second"><a href="#">WHERE TO STAY</a></div>
            <div class="item" data-tab="third"><a href="#">WHAT TO DO</a></div>
            <div class="item" data-tab="fourth"><a href="#">WHAT &amp; WHERE TO EAT</a></div>
            <div class="item" data-tab="fifth"><a href="#">WHEN TO TRAVEL</a></div>
          </div>
          <div class="ui active tab" data-tab="first">
            <div class="ui grid padded stackable">
              <div class="sixteen wide tablet eleven wide computer column">
                <div class="hotel-title">
                  <h1 class="ui horizontal divider"><?php the_title(); ?></h1>
                  <p class="tax-city">
                    <?php echo get_city_name(); ?>
                  </p>
                </div>
                <div class="ui divider hidden"></div>
                <h3 class="ui horizontal divider">OVERVIEW</h3>
                <div class="ui divider hidden"></div>

                <div class="text-justify">
                  <?php the_content(); ?>
                </div>

                <div class="ui divider hidden"></div>
                <h3 class="ui horizontal divider">SUMMARY</h3>
                <div class="ui divider hidden"></div>
                <div class="text-justify">
                  <p><strong>Rooms:</strong> <?php the_field('rooms'); ?></p>
                  <p><strong>Location:</strong> <?php the_field('location'); ?></p>
                  <p><strong>Nearest Airport:</strong> <?php the_field('nearest_airport'); ?></p>
                  <p><strong>Board Basis:</strong> <?php the_field('board_basis'); ?></p>
                </div>

                <div class="ui divider hidden"></div>
                <h3 class="ui horizontal divider"><?php the_field('reasons_to_go_title'); ?></h3>
                <div class="ui divider hidden"></div>
                <div class="text-justify">
                  <?php if (have_rows('reasons')) : ?>
                    <ol class="ui list">
                      <?php while ( have_rows('reasons') ) : the_row(); ?>
                        <li class="item"><?php the_sub_field('reason_to_go'); ?></li>
                      <?php endwhile; ?>
                    </ol>
                  <?php endif; ?>
                </div>
              </div>
              <?php get_template_part( 'template-parts/side', 'hotel' ) ?>
            </div>
          </div>
          <div class="ui tab" data-tab="second">
            <div class="ui grid padded stackable">
              <div class="sixteen wide tablet eleven wide computer column">
                <div class="hotel-title">
                  <h1 class="ui horizontal divider">Where to stay</h1>
                </div>
                <div class="ui divider hidden"></div>
                <div class="text-center">
                  <?php the_field('where_to_stay_content'); ?>
                </div>
                <div class="ui divider hidden"></div>
                <div class="ui divider hidden"></div>
                <div class="ui divider hidden"></div>
                <?php if (have_rows('rooms')) : ?>
                <div class="ui accordion text-justify">
                    <?php while ( have_rows('rooms') ) : the_row(); ?>
                      <div class="title">
                        <?php the_sub_field('room_title'); ?>
                        <i class="dropdown icon"></i>
                      </div>
                      <div class="content styled">
                        <div class="transition hidden"><?php the_sub_field('room_description'); ?></div>
                      </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
              </div>
              <?php get_template_part( 'template-parts/side', 'hotel' ) ?>
            </div>
          </div>
          <div class="ui tab" data-tab="third">
            <div class="ui grid padded stackable">
              <div class="sixteen wide tablet eleven wide computer column">
                <div class="hotel-title">
                  <h1 class="ui horizontal divider">What to do</h1>
                </div>
                <div class="ui divider hidden"></div>
                <div class="text-justify">
                  <?php the_field('what_to_do_content'); ?>
                </div>
                <div class="ui divider hidden"></div>
                <div class="ui divider hidden"></div>
                <div class="ui divider hidden"></div>
                <?php if (have_rows('what_to_do_items')) : ?>
                <div class="ui accordion text-justify">
                    <?php while ( have_rows('what_to_do_items') ) : the_row(); ?>
                      <div class="title">
                        <?php the_sub_field('what_to_do_title'); ?>
                        <i class="dropdown icon"></i>
                      </div>
                      <div class="content styled">
                        <div class="transition hidden"><?php the_sub_field('what_to_do_description'); ?></div>
                      </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
              </div>
              <?php get_template_part( 'template-parts/side', 'hotel' ) ?>
            </div>
          </div>

          <div class="ui tab" data-tab="fourth">
            <div class="ui grid padded stackable">
              <div class="sixteen wide tablet eleven wide computer column">
                <div class="hotel-title">
                  <h1 class="ui horizontal divider">What and Where to Eat</h1>
                </div>
                <div class="ui divider hidden"></div>
                <div class="text-justify">
                  <?php the_field('what_where_to_eat'); ?>
                </div>
                <div class="ui divider hidden"></div>
                <div class="ui divider hidden"></div>
                <div class="ui divider hidden"></div>
                <?php if (have_rows('what_and_where_to_eat_items')) : ?>
                <div class="ui accordion text-justify">
                    <?php while ( have_rows('what_and_where_to_eat_items') ) : the_row(); ?>
                      <div class="title">
                        <?php the_sub_field('restaurant_name'); ?>
                        <i class="dropdown icon"></i>
                      </div>
                      <div class="content styled">
                        <div class="transition hidden"><?php the_sub_field('restaurant_description'); ?></div>
                      </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
              </div>
              <?php get_template_part( 'template-parts/side', 'hotel' ) ?>
            </div>
          </div>

          <div class="ui tab" data-tab="fifth">
            <div class="ui grid padded stackable">
              <div class="sixteen wide column">
                <div class="hotel-title">
                  <h1 class="ui horizontal divider">When to travel</h1>
                </div>
                <div class="ui divider hidden"></div>
                <div class="text-justify">
                <?php the_field('when_to_travel_content'); ?>
                </div>
                <div class="ui divider hidden"></div>
                <div class="ui divider hidden"></div>
                <div class="ui divider hidden"></div>
                <div class="table-travel-wrap">
                  <table class="ui celled padded table unstackable travel-table">
                    <thead>
                      <tr>
                        <th class="single line center aligned">Month</th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>July</th>
                        <th>Aug</th>
                        <th>Sep</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>
                      </tr>
                    </thead>
                      <tbody>
                        <tr class="center aligned">
                          <td style="background: #f9fafb;">
                            <p class="ui center aligned strong">Temp</p>
                          </td>
                          <?php if ( have_rows('temp') ): while ( have_rows('temp') ) : the_row(); ?>
                            <td class="single line"><?php the_sub_field('jan'); ?></td>
                            <td class="single line"><?php the_sub_field('feb'); ?></td>
                            <td class="single line"><?php the_sub_field('mar'); ?></td>
                            <td class="single line"><?php the_sub_field('apr'); ?></td>
                            <td class="single line"><?php the_sub_field('may'); ?></td>
                            <td class="single line"><?php the_sub_field('jun'); ?></td>
                            <td class="single line"><?php the_sub_field('jul'); ?></td>
                            <td class="single line"><?php the_sub_field('aug'); ?></td>
                            <td class="single line"><?php the_sub_field('sep'); ?></td>
                            <td class="single line"><?php the_sub_field('oct'); ?></td>
                            <td class="single line"><?php the_sub_field('nov'); ?></td>
                            <td class="single line"><?php the_sub_field('dec'); ?></td>
                          <?php endwhile; endif; ?>
                        </tr>
                        <tr class="center aligned">
                          <td style="background: #f9fafb;">
                            <p class="ui center aligned strong">Sun(hrs)</p>
                          </td>
                          <?php if ( have_rows('temp') ): while ( have_rows('sunhrs') ) : the_row(); ?>
                            <td class="single line"><?php the_sub_field('jan'); ?></td>
                            <td class="single line"><?php the_sub_field('feb'); ?></td>
                            <td class="single line"><?php the_sub_field('mar'); ?></td>
                            <td class="single line"><?php the_sub_field('apr'); ?></td>
                            <td class="single line"><?php the_sub_field('may'); ?></td>
                            <td class="single line"><?php the_sub_field('jun'); ?></td>
                            <td class="single line"><?php the_sub_field('jul'); ?></td>
                            <td class="single line"><?php the_sub_field('aug'); ?></td>
                            <td class="single line"><?php the_sub_field('sep'); ?></td>
                            <td class="single line"><?php the_sub_field('oct'); ?></td>
                            <td class="single line"><?php the_sub_field('nov'); ?></td>
                            <td class="single line"><?php the_sub_field('dec'); ?></td>
                          <?php endwhile; endif; ?>
                        </tr>
                        <tr class="center aligned">
                          <td style="background: #f9fafb;">
                            <p class="ui center aligned strong">Rain(mm)</p>
                          </td>
                          <?php if ( have_rows('temp') ): while ( have_rows('rainmm') ) : the_row(); ?>
                            <td class="single line"><?php the_sub_field('jan'); ?></td>
                            <td class="single line"><?php the_sub_field('feb'); ?></td>
                            <td class="single line"><?php the_sub_field('mar'); ?></td>
                            <td class="single line"><?php the_sub_field('apr'); ?></td>
                            <td class="single line"><?php the_sub_field('may'); ?></td>
                            <td class="single line"><?php the_sub_field('jun'); ?></td>
                            <td class="single line"><?php the_sub_field('jul'); ?></td>
                            <td class="single line"><?php the_sub_field('aug'); ?></td>
                            <td class="single line"><?php the_sub_field('sep'); ?></td>
                            <td class="single line"><?php the_sub_field('oct'); ?></td>
                            <td class="single line"><?php the_sub_field('nov'); ?></td>
                            <td class="single line"><?php the_sub_field('dec'); ?></td>
                          <?php endwhile; endif; ?>
                        </tr>
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        </article>

				<?php endwhile; // End of the loop.
				?>

			</div>
      <div class="ui divider hidden"></div>
      <div class="ui container">
        <h2 class="ui horizontal divider">Explore Other <?php echo get_city_name(); ?> Hotels</h2>

        <div class="otherhotel-slide">
          <?php for ($i=0; $i < 5; $i++) { ?>
            <div class="column">
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
            </div>
          <?php } ?>

        </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
