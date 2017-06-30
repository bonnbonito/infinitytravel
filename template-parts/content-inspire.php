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
         <input type="checkbox" tabindex="0" class="hidden" name="spa" value="1">
         <label>A spa</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="1" class="hidden" name="indoor_pool" value="1">
         <label>An indoor pool</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="2" class="hidden" name="gym" value="1">
         <label>A gym</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="3" class="hidden" name="tennis" value="1">
         <label>Tennis Facilities</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="4" class="hidden" name="golf" value="1">
         <label>Golf Activities</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="5" class="hidden" name="watersports" value="1">
         <label>Watersports</label>
       </div>
     </div>
   </div>
   <div class="inline fields">
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="6" class="hidden" name="creche" value="1">
         <label>A creche</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="7" class="hidden" name="kids_club" value="1">
         <label>A Kids Club</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="8" class="hidden" name="teen_club" value="1">
         <label>A teen club</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="9" class="hidden" name="interconnecting_rooms" value="1">
         <label>Interconnecting Rooms</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="10" class="hidden" name="less_70_rooms" value="1">
         <label>Less than 70 rooms(Boutique)</label>
       </div>
     </div>
     <div class="field">
       <div class="ui checkbox">
         <input type="checkbox" tabindex="10" class="hidden" name="direct_beach_access" value="1">
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
         <input type="radio" tabindex="12" class="hidden" name="from" value="" checked id="fromAll">
         <label for="fromAll">Around the world</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="13" class="hidden" name="from" value="north_america" id="north_america">
         <label for="north_america">North America</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="14" class="hidden" name="from" value="south_america" id="south_america">
         <label for="south_america">South &amp; Central America</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="15" class="hidden" name="from" value="europe" id="europe">
         <label for="europe">Europe</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="16" class="hidden" name="from" value="africa" id="africa">
         <label for="africa">Africa</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="17" class="hidden" name="from" value="asia" id="asia">
         <label for="asia">Asia</label>
       </div>
     </div>
     <div class="field">
       <div class="ui radio">
         <input type="radio" tabindex="18" class="hidden" name="from" value="oceania" id="oceania">
         <label for="oceania">Oceania</label>
       </div>
     </div>
   </div>
   <div class="ui divider hidden"></div>
   <div class="field center aligned">
		 <input type="hidden" name="action" value="search_hotels">
		 <button type="submit" name="submit" class="ui submit basic button submit-btn-search">SEARCH</button>
   </div>
</form>
<div class="ui divider hidden"></div>
<div class="ui divider hidden"></div>

<div class="ui horizontal divider">
  <h3>Hotels Search Result</h3>
</div>

<div class="ui container hotel-results-container">

</div>
