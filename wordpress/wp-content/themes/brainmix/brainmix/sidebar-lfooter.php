  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('lfooter') ) : ?>      
        <h2>Календарь</h2>
        <?php get_calendar(); ?>
        <!--
        <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> 
        <a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> 
        <a href="#"><img src="images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> 
        <a href="#"><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> 
        <a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> 
        <a href="#"><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> 
        -->
        <?php endif; ?>
      </div>
