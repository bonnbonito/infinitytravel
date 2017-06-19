<?php
/**
 * Template part for displaying page content in page-contact.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>

<div class="ui container">
  <div class="ui two column grid padded stackable">
    <div class="column">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      	<header class="entry-header">
      		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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
    </div>
    <div class="column">
      <h2>GIVE US YOUR FEEDBACK</h2>
      <p>We would like to hear feedback on your experience with Infinity&Beyond Travel. Your comments will help us improve our service in the future.</p>
      <?php echo do_shortcode( '[contact-form-7 id="19" title="Contact form 1"]' ); ?>
    </div>
  </div>
</div>
