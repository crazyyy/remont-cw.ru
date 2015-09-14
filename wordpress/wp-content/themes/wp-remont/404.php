<?php get_header(); ?>
<?php get_sidebar(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
    <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>

  </article>

<?php get_footer(); ?>
