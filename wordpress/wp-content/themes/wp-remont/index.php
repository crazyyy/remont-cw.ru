<?php get_header(); ?>

  <?php get_sidebar(); ?>

  <article>

    <h1 class="ctitle"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

  </article>

<?php get_footer(); ?>
