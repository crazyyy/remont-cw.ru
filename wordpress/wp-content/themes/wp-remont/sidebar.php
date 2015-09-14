<aside class="sidebar" role="complementary">

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>
  <?php endif; ?>

  <div class="widget widget_last_news">
    <?php query_posts("showposts=3"); ?>
    <ul>
    <h6>Новости</h6>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <li>
        <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
        </a><!-- /post thumbnail -->
        <span class="date"><?php the_time('j F Y'); ?></span>
        <?php wpeExcerpt('wpeExcerpt10'); ?>
      </li>
    <?php endwhile; endif; ?>
    </ul>
    <?php wp_reset_query(); ?>
  </div><!-- /.widget widget_last_news -->

</aside><!-- /sidebar -->
