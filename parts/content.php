<article>
   <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
   <?php if (has_post_thumbnail()) : ?>
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(275, 275)); ?></a>
   <?php endif ?>
   <div class="meta-info">
      <p><?php _e('Posted in ', 'wp-devs');
         echo get_the_date();
         _e(' by ', 'wp-devs');
         the_author_posts_link(); ?></p>
      <?php if (has_category()) : ?>
         <?php _e('Categories', 'wp-devs') ?>: <span><?php the_category(' ') ?></span>
      <?php endif ?>
      <?php if (has_tag()) : ?>
         <?php _e('Tags', 'wp-devs') ?>: <?php the_tags('', ', ') ?>
      <?php endif ?>
   </div>
   <?php the_excerpt(); ?>
</article>