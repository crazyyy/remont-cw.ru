
<?php get_header(); ?>	
	<div id="wrapper">
	
		<div id="content-wrapper">
		
			<div id="content">	
			
			
				<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
		
				<div class="post-wrapper">

								<div class="date">
						<span class="month"><?php the_time('M') ?></span>
						<span class="day"><?php the_time('j') ?></span>
					</div>

					<div style="float: right; width: 527px; clear: right; margin-top: 10px; margin-bottom: 15px; padding-top: 10px;margin-left: 15px;" >
			<span class="titles"><a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title(); ?>"><?php the_title(); ?></a></span>
</div>
<div style="clear: both;"></div>


			<div class="post">

			<?php the_content(__('Read more &raquo;', 'dtheme')); ?>

			</div>
			
			<div class="post-footer"><?php _e('Posted in:', 'dtheme');?> <?php the_category(', ') ?> <strong>|</strong> <?php edit_post_link(__('edit', 'dtheme'),'','<strong>|</strong>'); ?> <?php comments_popup_link(__('No Responses', 'dtheme'), __('One Response', 'dtheme'), __('% Responses', 'dtheme')); ?></div>

			</div>

			<?php  comments_template(); ?>

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