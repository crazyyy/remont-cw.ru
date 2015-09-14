<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->
    <!-- meta -->

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <!-- css + javascript -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="inner">

      <a href="#" class="btn btn-blue btn-order">On-line заявка</a>

      <h2 class="logo-title">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
          <a href="<?php echo home_url(); ?>">
        <?php  } ?>

        компания<span>Ремонтные работы</span>

        <?php if ( is_front_page() && is_home() ){
        } else { ?>
          </a>
        <?php } ?>
      </h2>

      <a href="tel:+71234567890" class="phone">+7 (123) 456-78-90</a>
      <a href="#" class="recall">Заказать звонок</a>

      <nav class="nav" role="navigation">
        <?php wpeHeadNav(); ?>
      </nav><!-- /nav -->

      <ul class="cat-lister">
        <li>
          <h3>Евроремонт </h3>
          <h6>от 4900 рублей за м2</h6>
          <img src="<?php echo get_template_directory_uri(); ?>/img/cat-1.jpg" height="147" width="176" alt="">
          <a href="" class="btn btn-blue">смотреть</a>
        </li>
        <li>
          <h3>Косметический ремонт</h3>
          <h6>от 3900 рублей за м2</h6>
          <img src="<?php echo get_template_directory_uri(); ?>/img/cat-2.jpg" height="147" width="176" alt="">
          <a href="" class="btn btn-blue">смотреть</a>
        </li>
        <li>
          <h3>Капитальный ремонт</h3>
          <h6>от 4900 рублей за м2</h6>
          <img src="<?php echo get_template_directory_uri(); ?>/img/cat-3.jpg" height="147" width="176" alt="">
          <a href="" class="btn btn-blue">смотреть</a>
        </li>
        <li>
          <h3>Ремонт коттеджей</h3>
          <h6>от 4900 рублей за м2</h6>
          <img src="<?php echo get_template_directory_uri(); ?>/img/cat-4.jpg" height="147" width="176" alt="">
          <a href="" class="btn btn-blue">смотреть</a>
        </li>
      </ul><!-- /.cat-lister -->

    </div><!-- /.inner -->
  </header><!-- /header -->

  <section role="main">
    <div class="inner">
