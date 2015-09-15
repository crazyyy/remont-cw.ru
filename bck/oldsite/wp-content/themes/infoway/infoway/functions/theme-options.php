<?php

add_action('init', 'of_options');
if (!function_exists('of_options')) {

    function of_options() {
        // VARIABLES
        $themename = "InfoWay";
        $shortname = "of";
        // Populate OptionsFramework option in array for use in theme
        global $of_options;
        $of_options = infoway_get_option('of_options');
        // Background Defaults
        $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');
        //Stylesheet Reader
		$captcha_option = array("on" => "On", "off" => "Off");
        // Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories();
        foreach ($options_categories_obj as $category) {
            $options_categories[$category->cat_ID] = $category->cat_name;
        }
        // Pull all the pages into an array
        $options_pages = array();
        $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
        $options_pages[''] = 'Select a page:';
        foreach ($options_pages_obj as $page) {
            $options_pages[$page->ID] = $page->post_title;
        }
        // If using image radio buttons, define a directory path
        $imagepath = get_stylesheet_directory_uri() . '/images/';

        $options = array(
         array("name" => "Общие параметры",
            "type" => "heading"),

         array("name" => "Логотип сайта",
            "desc" => "Загрузите свой логотип. Оптимальный размер: 300px шириной и 90px высота.",
            "id" => "infoway_logo",
            "type" => "upload"),

         array("name" => "Favicon сайта",
            "desc" => "Укажите 16px 16px х изображений, которые будут представлять иконку вашего сайта.",
            "id" => "infoway_favicon",
            "type" => "upload"),
			
		 array("name" => "Картинка заднего фона сайта",
            "desc" => "Выберите изображение, чтобы изменить фон сайта",
            "id" => "infoway_bodybg",
            "std" => "",
            "type" => "upload"),
			
		 array("name" => "Контактная информация, правый верхний угол",
            "desc" => "Введите контактные данный в этом поле.",
            "id" => "infoway_topright",
            "std" => "",
            "type" => "textarea"),
			
		 array("name" => "Контактный телефон",
            "desc" => "Введите свой контактный номер, на который вы хотите получить звонки
(Функция активна только при просмотре сайта на мобильных устройствах).
Например: +91-1800-548-783 ",
            "id" => "infoway_contact_number",
            "std" => "",
            "type" => "text"),
        
         array("name" => "Код статистики",
            "desc" => "Вставьте ваш код Google Analytics  или Яндекс Метрики.",
            "id" => "infoway_analytics",
            "std" => "",
            "type" => "textarea"),

		//front Page Topinfo Bar  Setting		
		 array("name" => "Настройки Infobar",
            "type" => "heading"),	
			
		 array("name" => "Текст в Infobar в верху сайта",
            "desc" => "Введите свой текст",
            "id" => "infoway_topinfobar_text",
            "std" => "",
            "type" => "textarea"),

		 array("name" => "Текст кнопки Infobar ",
            "desc" => "Укажите название кнопки",
            "id" => "infoway_topinfobar_sitename",
            "std" => "",
            "type" => "text"),
		
		 array("name" => "URL адрес кнопки",
            "desc" => "Введите URL адрес кнопки",
            "id" => "infoway_topinfobar_url",
            "std" => "",
            "type" => "text"),
			
		array("name" => "Главное изображение на главной странице задается здесь",
            "type" => "saperate",
            "class" => "saperator"),
			
		 array("name" => "Главное изображение на главной странице задается здесь",
            "desc" => "Выберите изображения для верхней части. Оптимальный размер 950px шириной и 363px высотой.",
            "id" => "infoway_slideimage1",
            "std" => "",
            "type" => "upload"),
			
		 array("name" => "URL главной картинки",
            "desc" => "Введите URL ссылки картинки на главной странице",
            "id" => "infoway_slidelink1",
            "std" => "",
            "type" => "text"),	
				
       	//Homepage Feature Area
		
		  array("name" => "Главная страница text",
            "type" => "heading"),
						
		 array("name" => "Заголовок страницы",
            "desc" => "Введите текст для главной страницы. (чуть ниже картинки на главной)",
            "id" => "infoway_main_heading",
            "std" => "",
            "type" => "textarea"),
			
         array("name" => "3 блока текста cо ссылками",
            "type" => "saperate",
            "class" => "saperator"),
        //Left Feature Area
             array("name" => "Первая область заголовок",
            "desc" => "Введите текст для первого заголовка.",
            "id" => "infoway_firsthead",
            "std" => "",
            "type" => "text"),
	
         array("name" => "Первая область описание",
            "desc" => "Введите текст описания.",
            "id" => "infoway_firstdesc",
            "std" => "",
            "type" => "textarea"),
			
		 array("name" => "Первая область URL",
            "desc" => "Укажите URL адрес.",
            "id" => "infoway_link1",
            "std" => "",
            "type" => "text"),

        //Second Feature Separetor
             array("name" => "Вторая область заголовок",
            "desc" => "Введите текст для второго заголовка.",
            "id" => "infoway_secondhead",
            "std" => "",
            "type" => "text"),
			
         array("name" => "Вторая область описание",
            "desc" => "Введите текст описания.",
            "id" => "infoway_seconddesc",
            "std" => "",
            "type" => "textarea"),
			
		 array("name" => "Вторая область URL",
            "desc" => "Укажите URL адрес.",
            "id" => "infoway_link2",
            "std" => "",
            "type" => "text"),

        //Third Feature Separetor
         array("name" => "Третья область заголовок",
            "desc" => "Введите текст для третьего заголовка.",
            "id" => "infoway_thirdhead",
            "std" => "",
            "type" => "text"),
			
         array("name" => "Третья область описание",
            "desc" => "Введите текст описания.",
            "id" => "infoway_thirddesc",
            "std" => "",
            "type" => "textarea"),
			
		 array("name" => "Третья область URL",
            "desc" => "Укажите URL адрес.",
            "id" => "infoway_link3",
            "std" => "",
            "type" => "text"),	
			
   array("name" => "Нижняя честь с текстом.",
            "type" => "saperate",
            "class" => "saperator"),
			
		 array("name" => "Заголовок",
            "desc" => "Введите текст заголовка",
            "id" => "infoway_testimonial_head",
            "std" => "",
            "type" => "textarea"),

		 array("name" => "Описание",
            "desc" => "Введите текст описания",
            "id" => "infoway_testimonial_desc",
            "std" => "",
            "type" => "textarea"),

//****=============================================================================****//
//****-----------This code is used for creating color styleshteet options----------****//							
//****=============================================================================****//				
         array("name" => "Styling Options",
            "type" => "heading"),
         array("name" => "Custom CSS",
            "desc" => "Quickly add some CSS to your theme by adding it to this block.",
            "id" => "infoway_customcss",
            "std" => "",
            "type" => "textarea"),

//****=============================================================================****//
//****-------------This code is used for creating social logos options-------------****//					
//****=============================================================================****//
		 array("name" => "Social Logos",
            "type" => "heading"),
			
		  array("name" => "Twitter URL",
            "desc" => "Enter your Twitter URL if you have one",
            "id" => "infoway_twitter",
            "std" => "",
            "type" => "text"),
		
         array("name" => "Facebook URL",
            "desc" => "Enter your Facebook URL if you have one",
            "id" => "infoway_facebook",
            "std" => "",
            "type" => "text"),
			
		 array("name" => "Google+ URL",
            "desc" => "Enter your Google+ URL if you have one",
            "id" => "infoway_google",
            "std" => "",
            "type" => "text"),
        
         array("name" => "LinkDin Feed URL",
            "desc" => "Enter your LinkDin Feed URL if you have one",
            "id" => "infoway_link",
            "std" => "",
            "type" => "text"),
			
		 array("name" => "YouTube Feed URL",
            "desc" => "Enter your YouTube Feed URL if you have one",
            "id" => "infoway_youtube",
            "std" => "",
            "type" => "text"),
			
		 array("name" => "Pinterest Feed URL",
            "desc" => "Enter your Pinterest Feed URL if you have one",
            "id" => "infoway_pin",
            "std" => "",
            "type" => "text"));

        infoway_update_option('of_template', $options);
        infoway_update_option('of_themename', $themename);
        infoway_update_option('of_shortname', $shortname);
    }

}
?>
