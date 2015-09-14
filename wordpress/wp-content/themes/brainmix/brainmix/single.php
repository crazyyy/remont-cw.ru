<?php get_header(); ?>
      <div class="mainbar">
	 <?php if (have_posts()) : 
				while (have_posts()) : the_post(); ?>
        <div class="article" id="post-<?php the_ID(); ?>">								
          <h2><?php the_title(); ?></h2>	
          <div class="clr"></div>
          <p>Опубликовал <?php the_author(); ?> <span>&nbsp;&bull;&nbsp;</span> Рубрики: <?php the_category(', '); ?></p>							                        			
			<?php the_content(); ?>	
		  <p><?php the_tags('Метки: ', ', ', ''); ?></p>
		  <p><?php comments_popup_link('<strong>Без коммент.</strong>', '<strong>1 коммент.</strong>', '<strong>% коммент.</strong>', '', '<strong>Коммент. отключено</strong>'); ?></a> <span>&nbsp;&bull;&nbsp;</span><?php the_time('F j, Y'); edit_post_link('<strong>Правка</strong>', '<span>&nbsp;&bull;&nbsp;</span>' , ''); ?></p>											        							                 					
		</div>						
			<?php  
				endwhile; 
				comments_template();
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
