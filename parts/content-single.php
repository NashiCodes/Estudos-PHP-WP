<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
   <header>
      <h1><?php the_title(); ?></h1>
      <div class="meta-info">
         <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
         <?php if (has_category()) : ?>
            Categories: <span><?php the_category(' ') ?></span>
         <?php endif ?>
         <?php if (has_tag()) : ?>
            Tags: <?php the_tags('', ', ') ?>
         <?php endif ?>
      </div>
   </header>
   <div class="content">
      <?php
      the_content();
      wp_link_pages();
      ?>
   </div>
</article>