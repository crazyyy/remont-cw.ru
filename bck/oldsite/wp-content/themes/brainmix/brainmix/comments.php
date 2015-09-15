<?php
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die();

        if (!empty($post->post_password)) {
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
				?>
				
				<?php
				return;
            }
        }		
?>


<?php if ( have_comments() ) : ?>				       
        <div class="article">
          <h2>Комментарии</h2>
          <div class="clr"></div>			
	<?php wp_list_comments( array( 'callback' => 'it_is_theme_comment' ) ); 
		  if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>			
			<div class="fl_left"><?php previous_comments_link('&larr; Предыдущие'); ?></div>
			<div class="fl_right"><?php next_comments_link('Следущие &rarr;'); ?></div>	
			<div class="clr"></div>					
	<?php endif; ?>
        </div>	
<?php endif; // end have_comments() ?>


<?php if ('open' == $post->comment_status) : ?>
        <div class="article">		
          <h2>Оставьте комментарий:</h2></p>    
          <div class="clr"></div>           
        <?php if ( get_option('comment_registration') && !$user_ID ) : ?>          
			<p>Вы должны быть <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">авторизованы</a>.</p>          
        <?php else : ?>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">            
			<ol>
	        <?php if ( $user_ID ) : ?>
	          <li>
		        Вы вошли как <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>, 
		        <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Выйти">выйти</a>?
	          </li>           
	        <?php else : ?>
              <li>
				<label>Имя <?php if ($req) echo " (обязательно)"; ?></label>
				<input type="text" name="author" class="text" type="text" id="author" value="<?php echo $comment_author; ?>" tabindex="1" />
			  </li>       		
			  <li>
			    <label>Почта <?php if ($req) echo " *"; ?></label>
			    <input type="text" name="email" class="text" type="text" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" />
			  </li> 
	        <?php endif; ?>
              <li>
				<label for="message">Сообщение</label>
				<textarea id="message" rows="8" cols="50" name="comment"></textarea>
			  </li> 
	       
              <li>
				<input class="send" type="image" src="<?php bloginfo('template_url'); ?>/images/submit.gif" name="submit" value="Отправить" tabindex="5"/>
                <div class="clr"></div>				
			  </li>

	        
	        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />        
	        <?php do_action('comment_form', $post->ID); ?>
            </ol>
        </form>

        <?php endif; ?>
        </div>					
<?php endif; ?>

