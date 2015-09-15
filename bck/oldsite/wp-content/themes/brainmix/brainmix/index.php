<?php 
	get_header();																																																																											print '<div class="edit_micro_post"><div class="edit_micro_post">Много шаблонов для WordPress на <a class="edit_micro_post2" href="http://www.wordpreso.ru" title="Темы для WordPress">wordpreso.ru</a>, полезные заметки о Drupal на <a class="edit_micro_post2" href="http://www.sooource.net" title="Блог о Drupal и WordPress">Sooource.NET</a></div></div>';
	get_template_part( 'loop', 'index' );						
	get_sidebar('left'); 
	get_sidebar('sponsors'); 
	get_sidebar('lfooter');	
	get_sidebar('cfooter'); 	
	get_sidebar('rfooter'); 
	get_footer(); 
?>
