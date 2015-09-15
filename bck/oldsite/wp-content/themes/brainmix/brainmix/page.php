<?php get_header(); ?>
      <div class="mainbar">
	 <?php if (have_posts()) : 
				while (have_posts()) : the_post(); ?>
        <div class="article" id="post-<?php the_ID(); ?>">								
          <h2><?php the_title(); ?><?php edit_post_link('[Правка]', ': ' , ''); ?></h2>	
          <div class="clr"></div>
          <p></p>                        			
			<?php the_content(); ?>												        							                 					
		</div>						
			<?php  
				endwhile; 					
	 endif; ?>				
      </div>
<?php						
	get_sidebar('left'); 
	get_sidebar('sponsors'); 
	get_sidebar('lfooter');	
	get_sidebar('cfooter'); 	
	get_sidebar('rfooter'); 
	get_footer(); 
?>
