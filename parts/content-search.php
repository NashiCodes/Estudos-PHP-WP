 <article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
    <header>
       <h2> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
       <?php if ('post' == get_post_type()) : ?>
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
       <?php endif ?>
    </header>
    <div class="content">
       <?php the_excerpt(); ?>
    </div>
 </article>