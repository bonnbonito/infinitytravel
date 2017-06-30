<div class="sixteen wide tablet five wide computer column">
  <?php if ( have_rows('sidebar_contents') ): ?>
  <div class="reccommend-container">
    <?php while ( have_rows('sidebar_contents') ) : the_row(); ?>
      <div class="recommend-wrap">
        <div class="recommend-title"><?php the_sub_field('title') ?></div>
        <?php if (get_sub_field('image')): ?>
          <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
        <?php endif; ?>
        <div class="recommend-content">
          <?php the_sub_field('content'); ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
  <?php endif; ?>
</div>
