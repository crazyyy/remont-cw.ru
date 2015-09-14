   <div id="sidebar-wrapper">
          
                <div id="sidebar">
				  <div style="width: 239px; margin-left: -10px; height: 12px;"></div>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>                 
              
                    
			
      <div class="sideblock">
<h3><?php _e("Recent Posts", 'dtheme'); ?></h3>

<ul>
<?php wp_get_archives('type=postbypost&limit=5'); ?>  
 </ul>
</div>







  <div class="sideblock">
<h3><?php _e('Categories', 'dtheme'); ?></h3>

<ul>

<?php wp_list_cats('sort_column=name&hierarchical=0'); ?>

</ul>

</div>
 <div class="sideblock">
 
 <h3><?php _e('Archive', 'dtheme'); ?></h3>

<ul>

<?php wp_get_archives('type=monthly'); ?>

</ul>
<?php include (TEMPLATEPATH . "/inc.php"); ?>
</div>
 <div class="sideblock">
 
               
<h3><?php _e('Blogroll', 'dtheme'); ?></h3>



</div>

 <div class="sideblock">
			   
<h3><?php _e('Meta', 'dtheme'); ?></h3>

<ul>

	<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
	<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>

	<?php wp_meta(); ?>

</ul>

</div>
			               	<?php endif; ?>
							<div style="width: 239px; margin-left: -10px; height: 14px; "></div>
                
                </div>
            
            </div>
        
        </div>