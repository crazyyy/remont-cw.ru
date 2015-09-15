
<?php get_header(); ?>	
	<div id="wrapper">
	
		<div id="content-wrapper">
		
			<div id="content">
			
			
			
				<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>		
				<div class="post-wrapper2">

			<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title(); ?>"><?php the_title(); ?></a></h3>


			<div class="post">

			<?php the_content(__('Read more &raquo;', 'dtheme')); ?>

			</div>			
			</div>


			<?php endwhile; ?>

			   <p class="pagination"><?php next_posts_link(__('&laquo; Older Entries', 'dtheme')) ?> <?php previous_posts_link(__('Newer Entries &raquo;', 'dtheme')) ?></p>

			<?php else : ?>

			<h2 align="center"><?php _e('Not Found', 'dtheme'); ?></h2>

			<p align="center"><?php _e('Sorry, no posts matched your criteria.', 'dtheme'); ?></p>

			<?php endif; ?>
			
			
	
			</div>
		
		</div>
		<?php get_sidebar(); ?>    
		<?php get_footer(); ?>   
	
</body>
</html>