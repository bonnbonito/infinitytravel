<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <?php the_title( '<h1 class="ui horizontal divider header entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bonnjoel' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'bonnjoel' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->

<div class="ui divider hidden"></div>

<form class="ui form inspire-form">
  <div class="ui horizontal divider">
    I'm looking for a hotel / resort that features:
  </div>
  <div class="inline fields">
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="spa">
         <label>A spa</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="indoor_pool">
         <label>An indoor pool</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="gym">
         <label>A gym</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="tennis">
         <label>Tennis Facilities</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="golf">
         <label>Golf Activities</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="watersports">
         <label>Watersports</label>
       </div>
     </div>
   </div>
   <div class="inline fields">
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="creche">
         <label>A creche</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="kids_club">
         <label>A Kids Club</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="teen_club">
         <label>A teen club</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="interconnecting_rooms">
         <label>Interconnecting Rooms</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="less_70_rooms">
         <label>Less than 70 rooms(Boutique)</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="0" class="hidden" name="direct_beach_access">
         <label>Direct beach access</label>
       </div>
     </div>
   </div>
   <div class="ui divider hidden"></div>
   <div class="ui horizontal divider">
     Show me hotel's from:
   </div>
   <div class="inline fields">
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="0" class="hidden" name="from" value="" checked id="fromAll">
         <label for="fromAll">Around the world</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="0" class="hidden" name="from" value="north_america" id="north_america">
         <label for="north_america">North America</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="0" class="hidden" name="from" value="south_america" id="south_america">
         <label for="south_america">South &amp; Central America</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="0" class="hidden" name="from" value="europe" id="europe">
         <label for="europe">Europe</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="0" class="hidden" name="from" value="africa" id="africa">
         <label for="africa">Africa</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="0" class="hidden" name="from" value="asia" id="asia">
         <label for="asia">Asia</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="0" class="hidden" name="from" value="oceania" id="oceania">
         <label for="oceania">Oceania</label>
       </div>
     </div>
   </div>
   <div class="ui divider hidden"></div>
   <div class="field center aligned">
     <input type="submit" name="submit" value="SEARCH" class="ui submit basic button">
   </div>
</form>
<div class="ui divider hidden"></div>
<div class="ui divider hidden"></div>
<div class="ui horizontal divider">
  <h3>Hotels Search Result</h3>
</div>

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
