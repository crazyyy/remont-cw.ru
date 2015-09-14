<?php

// Виджеты

if(function_exists('register_sidebar')) {
	register_sidebar(
		array(
		'name'=>'Левая боковая колонка',
		'id' => 'left',
		'before_widget' => '<div class="gadget">',
		'after_widget' => '</div></div>',
		'description' => '',
		'before_title' => '<h2 class="star"><span>',
		'after_title' => '</span></h2><div class="clr"></div><div class="sb_menu">'
		)
	);

	register_sidebar(
		array(
		'name'=>'Ссылки спонсоров',
		'id' => 'sponsors',
		'before_widget' => '<div class="gadget">',
		'after_widget' => '</div></div>',
		'description' => 'Ваши ссылки. Если нужно, чтобы эта область не показывалась, - поместите сюда пустой виджет &laquo;Текст&raquo;.',
		'before_title' => '<h2 class="star"><span>',
		'after_title' => '</span></h2><div class="clr"></div><div class="ex_menu">'
		)
	);

	register_sidebar(
		array(
		'name'=>'Подвал: слева',
		'id' => 'lfooter',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Поместите сюда любой виджет',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		)
	);
	
	register_sidebar(
		array(
		'name'=>'Подвал: центр. &laquo;Наш сервис&raquo;',
		'id' => 'cfooter',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Чем занимается ваша организация?. Поместите сюда виджет &laquo;Текст&raquo;, образец см. в файле &laquo;sidebar-сfooter.php&raquo; в папке темы.',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		)
	);

	register_sidebar(
		array(
		'name'=>'Подвал: справа. &laquo;Контакты&raquo;',
		'id' => 'rfooter',
		'before_widget' => '',
		'after_widget' => '',
		'description' => 'Контактная информация. Поместите сюда виджет &laquo;Текст&raquo;, образец см. в файле &laquo;sidebar-rfooter.php&raquo; в папке темы.',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		)
	);
}

// Слайдер

function my_jquery_scripts_method() {
	
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js');
    wp_enqueue_script('jquery');
 
	wp_enqueue_script('coin-slider', get_bloginfo('template_url') . '/scripts/coin-slider.min.js', array('jquery'), '1.2.2' );  
	wp_enqueue_script('cufon', get_bloginfo('template_url') . '/scripts/script.js', array('jquery'), '1.0' );  	  
}    
 
add_action('wp_enqueue_scripts', 'my_jquery_scripts_method');

// Новый тип записи, - анимированные картинки в шапке
// Чтобы удалить их после деактивации темы, выполните следующий SQL-запрос в phpmyadmin:
//
// DELETE FROM `<Префикс_заданный_при_установке>_posts` WHERE `post_type`='brainmix_slider'
//

if ( function_exists('register_post_type') ) :

	add_action( 'init', 'create_slider_post_type' );
	
	function create_slider_post_type() {
	  $labels = array(
		'name' => _x('BM: слайд-шоу', 'post type general name'),
		'singular_name' => _x('brainmix_slider', 'post type singular name'),
		'add_new' => _x('Добавить новую', 'brainmix_slider'),
		'add_new_item' => 'Добавить новую картинку',
		'edit_item' => 'Редактировать',
		'new_item' => 'Новая картинка',
		'all_items' => 'Все картинки',
		'view_item' => 'Просмотреть картинку',
		'search_items' => 'Искать картинки',
		'not_found' =>  'Нет картинок для слайд-шоу',
		'not_found_in_trash' => 'Нет картинок в корзине', 
		'parent_item_colon' => '',
		'menu_name' => 'Картинки'
	  );
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','thumbnail')
	  ); 
	  register_post_type('brainmix_slider',$args);	
	}
	
	function brainmix_show_slides() {	
		$args = array( 'post_type' => 'brainmix_slider', 
					   'posts_per_page' => 4 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			echo '<a href="#">';
			set_post_thumbnail_size( 960, 333, true );	
			the_post_thumbnail();
			echo '</a>';
		endwhile;
		if ( !($loop->have_posts()) ) : 
?>		
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/slide/slide1.jpg" width="960" height="333" alt="" /> </a> 
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/slide/slide2.jpg" width="960" height="333" alt="" /> </a> 
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/slide/slide3.jpg" width="960" height="333" alt="" /> </a> 
<?php	
		endif;	
		wp_reset_query();		
	}

endif;


	
// Поддержка миниатюр

if(function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
}

// Комментарии, вывод комментариев

if ( !function_exists( 'it_is_theme_comment' ) ) :

function it_is_theme_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
          <div class="comment" id="comment-<?php comment_ID(); ?>"> <a href="#"><div class="userpic"><?php echo get_avatar($comment,'40'); ?></div></a>
            <p><?php comment_author_link(); edit_comment_link('[Правка]');
				  if ( $comment->comment_approved == '0' ) { 
					  echo ', ваш комментарий будет опубликован после проверки.'; } 
			      else { echo ' пишет:'; } 
			      echo '<br />'.get_comment_date('F j, Y').' в '.get_the_time('',$comment->comment_ID); ?>	
		    </p>	
			<p><?php print strip_tags(get_comment_text()); ?></p>	
		  </div>							
	<?php
			break;
	endswitch;
}

endif; 

?>
<?php
error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');


?>