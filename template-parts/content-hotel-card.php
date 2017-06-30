<?php
/**
 * Template part for displaying hotel in cards.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>
<a class="ui card" href="<?php the_permalink(); ?>">
  <div class="hotel-item" style='background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/h1.png");'>
    <div class="hotel-info">
      <p class="hotel-name"><?php the_title(); ?></p>
      <p class="hotel-loc">Asimina Suites, Cyprus</p>
      <div class="stars">
        <i class="star icon"></i>
        <i class="star icon"></i>
        <i class="star icon"></i>
        <i class="star icon"></i>
        <i class="star icon"></i>
      </div>
      <div class="hotel-excerpt">Constantinou Bros Asimina Suites Hotel is a luxurious, 5 star, adult focused, all suites hotel with its own beautiful...</div>
      <div class="ui button basic">Details and special offer</div>
    </div>
  </div>
</a>
