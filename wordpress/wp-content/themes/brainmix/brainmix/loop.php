      <div class="mainbar">
	 <?php if (have_posts()) : 
				while (have_posts()) : the_post(); ?>
        <div class="article" id="post-<?php the_ID(); ?>">								
          <h2><?php the_title(); ?><?php edit_post_link('[Правка]', ': ' , ''); ?></h2>	
          <p class="infopost">Опубликовал <?php the_author(); ?> от <span class="date"><?php the_time('Y/m/d', '', ''); ?></span> &nbsp;&nbsp;|&nbsp;&nbsp; Рубрики: <?php the_category(', '); ?> <?php comments_popup_link('<span>0</span> коммент. ', '<span>1</span> коммент.', '<span>%</span> коммент.', 'com', ''); ?></p>							
          <div class="clr"></div>
			<?php 
			if ( has_post_thumbnail() ) { 
				set_post_thumbnail_size( 173, 209, true );	
			    echo '<div class="img">'. get_the_post_thumbnail() . '</div>';
			    echo '<div class="post_content">';
			} else { 
				echo '<div class="post_content_nothumbnails">';	
			}
			?>          
                   			
			<p><?php echo strip_tags(get_the_excerpt()); ?></p>												        
            <p class="spec"><a class="rm" href="<?php the_permalink(); ?>">Далее &raquo;</a></p>							
          </div>
          <div class="clr"></div>						
		</div>						
			<?php  
				endwhile; 					
	 endif; ?>				
        <p class="pages"><?php previous_posts_link('&larr;'); ?><?php next_posts_link('&rarr;'); ?></p>
      </div>
