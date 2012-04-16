<?php
/**
 * Plugin Name: Space Invaders
 * Plugin URI: http://www.tambourdeville.net
 * Description: add 3 buttons to tinyMce
 * Author: tambourdeville
 * Author URI: http://www.tambourdeville.com
 * Version: 1.0
**/


//*************************** Tiny Mce Button Code  ***************************//

add_action('init', 'add_button');  

function add_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
   {  
	 add_filter('mce_external_plugins', 'add_plugin');  
	 add_filter('mce_buttons', 'register_button');  
   }  
}  
	
function register_button($buttons) {  
   array_push($buttons, '|');//insert separator before the 3 next
   array_push($buttons, "jump"); 
   array_push($buttons, "tabulation");
   array_push($buttons, "clear");
   array_push($buttons, '|');//insert separator after the 3 previous
   return $buttons;  
}  

function add_plugin($plugin_array) {  
   $plugin_array['jump'] = plugins_url('js/mce.js', __FILE__);
   return $plugin_array;  
}  
//*************************** Get Plugin URL  ***************************//

function get_pluginurl() {
if ( !function_exists('plugins_url') )
	return get_option('siteurl') . '/wp-content/plugins/' . plugin_basename(dirname(__FILE__));
	return plugins_url(plugin_basename(dirname(__FILE__)));
}
?>