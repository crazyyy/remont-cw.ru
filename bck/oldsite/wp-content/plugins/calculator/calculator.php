<?php

/*
 *
 *	Plugin Name: Calculator
 *	Plugin URI: http://www.joeswebtools.com/wordpress-plugins/calculator/
 *	Description: Adds a widget that display a simple calculator.
 *	Version: 2.0.1
 *	Author: Joe's Web Tools
 *	Author URI: http://www.joeswebtools.com/
 *
 *	Copyright (c) 2009 Joe's Web Tools. All Rights Reserved.
 *
 *	This program is free software; you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License as published by
 *	the Free Software Foundation; either version 2 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *	GNU General Public License for more details.
 *
 *	You should have received a copy of the GNU General Public License
 *	along with this program; if not, write to the Free Software
 *	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 *	If you are unable to comply with the terms of this license,
 *	contact the copyright holder for a commercial license.
 *
 *	We kindly ask that you keep the link to Joe's Web Tools so
 *	other people can find out about this plugin.
 *
 */





/*
 *
 *	calculator_shortcode_handler
 *
 */

function calculator_shortcode_handler($atts, $content = nul) {

	// Load language file
	$current_locale = get_locale();
	if(!empty($current_locale)) {
		$mo_file = dirname(__FILE__) . '/languages/calculator-' . $current_locale . ".mo";
		if(@file_exists($mo_file) && is_readable($mo_file)) {
			load_textdomain('calculator', $mo_file);
		}
	}

	// Create a unique ID
	$character_set = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	$unique_id = substr(str_shuffle($character_set), 0, 6);

	$content =  '<table style="border-width: thin thin thin thin; border-style: solid solid solid solid;">';
	$content .= '<tbody>';
	$content .= '<thead><tr><th><center><font face="arial" size="+1"><b>' . __('Calculator', 'calculator') . '</b></center></font></th></tr></thead>';
	$content .= '<tr><td>';

	$content .= '<form name="calculator_' . $unique_id . '" action="">';
	$content .= 	'<input type="hidden" name="memory" />';
	$content .= 	'<input type="hidden" name="accumulator" />';
	$content .= 	'<input type="hidden" name="reset" value="0" />';
	$content .= 	'<table>';
	$content .= 		'<tr>';
	$content .= 			'<td align="center" colspan="4"><input type="text" name="display" readonly="readonly" size="20" /></td>';
	$content .= 		'</tr>';
	$content .= 		'<tr>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="m+" onclick="calculator_' . $unique_id . '.memory.value = eval(calculator_' . $unique_id . '.memory.value + \' + \' + calculator_' . $unique_id . '.display.value);" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="m-" onclick="calculator_' . $unique_id . '.memory.value = eval(calculator_' . $unique_id . '.memory.value + \' - \' + calculator_' . $unique_id . '.display.value);" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="mc" onclick="calculator_' . $unique_id . '.memory.value = \'\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="mr" onclick="calculator_' . $unique_id . '.display.value = calculator_' . $unique_id . '.memory.value;" /></td>';
	$content .= 		'</tr>';
	$content .= 		'<tr>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="1" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'1\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="2" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'2\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="3" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'3\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="+" onclick="calculator_' . $unique_id . '.display.value = calculator_' . $unique_id . '.accumulator.value = eval(calculator_' . $unique_id . '.accumulator.value + calculator_' . $unique_id . '.display.value); calculator_' . $unique_id . '.accumulator.value += \' + \'; calculator_' . $unique_id . '.reset.value = \'1\';" /></td>';
	$content .= 		'</tr>';
	$content .= 		'<tr>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="4" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'4\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="5" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'5\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="6" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'6\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="-" onclick="calculator_' . $unique_id . '.display.value = calculator_' . $unique_id . '.accumulator.value = eval(calculator_' . $unique_id . '.accumulator.value + calculator_' . $unique_id . '.display.value); calculator_' . $unique_id . '.accumulator.value += \' - \'; calculator_' . $unique_id . '.reset.value = \'1\';" /></td>';
	$content .= 		'</tr>';
	$content .= 		'<tr>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="7" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'7\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="8" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'8\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="9" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'9\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="x" onclick="calculator_' . $unique_id . '.display.value = calculator_' . $unique_id . '.accumulator.value = eval(calculator_' . $unique_id . '.accumulator.value + calculator_' . $unique_id . '.display.value); calculator_' . $unique_id . '.accumulator.value += \' * \'; calculator_' . $unique_id . '.reset.value = \'1\';" /></td>';
	$content .= 		'</tr>';
	$content .= 		'<tr>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="c" onclick="calculator_' . $unique_id . '.accumulator.value = \'\'; calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="0" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'0\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="=" onclick="calculator_' . $unique_id . '.display.value = eval(calculator_' . $unique_id . '.accumulator.value + calculator_' . $unique_id . '.display.value); calculator_' . $unique_id . '.accumulator.value = \'\'; calculator_' . $unique_id . '.reset.value = \'1\';" /></td>';
	$content .= 			'<td align="center"><input type="button" style="width:32px" value="/" onclick="calculator_' . $unique_id . '.display.value = calculator_' . $unique_id . '.accumulator.value = eval(calculator_' . $unique_id . '.accumulator.value + calculator_' . $unique_id . '.display.value); calculator_' . $unique_id . '.accumulator.value += \' / \'; calculator_' . $unique_id . '.reset.value = \'1\';" /></td>';
	$content .= 		'</tr>';
	$content .= 	'</table>';
	$content .= '</form>';

	$content .= '</td></tr>';
	$content .= '<tfoot><tr><td><div style="text-align: right;"><font face="arial" size="-3"><a href="http://www.joeswebtools.com/wordpress-plugins/ephemeris/">Joe\'s</a></font></div></td></tr></tfoot>';
	$content .= '</tbody>';
	$content .= '</table>';

	return $content;
}

add_shortcode('calculator', 'calculator_shortcode_handler');





/*
 *
 *	WP_Widget_Calculator
 *
 */

class WP_Widget_Calculator extends WP_Widget {

	function WP_Widget_Calculator() {

		parent::WP_Widget(false, $name = 'Calculator');
	}

	function widget($args, $instance) {

		// Load language file
		$current_locale = get_locale();
		if(!empty($current_locale)) {
			$mo_file = dirname(__FILE__) . '/languages/calculator-' . $current_locale . ".mo";
			if(@file_exists($mo_file) && is_readable($mo_file)) {
				load_textdomain('calculator', $mo_file);
			}
		}

		// Get options
		extract($args);
		$option_title = apply_filters('widget_title', empty($instance['title']) ? __('Calculator', 'calculator') : $instance['title']);

		// Create a unique ID
		$character_set = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$unique_id = substr(str_shuffle($character_set), 0, 6);

		// Help widget to conform to the active theme: before_widget, before_title and after_title
		echo $before_widget;
		echo $before_title . $option_title . $after_title;

		echo '<center>';
		echo 	'<table>';
		echo 		'<tbody>';
		echo 			'<tr>';
		echo 				'<td>';
		echo 					'<form name="calculator_' . $unique_id . '" action="">';
		echo 						'<input type="hidden" name="memory" />';
		echo 						'<input type="hidden" name="accumulator" />';
		echo 						'<input type="hidden" name="reset" value="0" />';
		echo 						'<table>';
		echo 							'<tr>';
		echo 								'<td align="center" colspan="4"><input type="text" name="display" readonly="readonly" size="20" /></td>';
		echo 							'</tr>';
		echo 							'<tr>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="m+" onclick="calculator_' . $unique_id . '.memory.value = eval(calculator_' . $unique_id . '.memory.value + \' + \' + calculator_' . $unique_id . '.display.value);" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="m-" onclick="calculator_' . $unique_id . '.memory.value = eval(calculator_' . $unique_id . '.memory.value + \' - \' + calculator_' . $unique_id . '.display.value);" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="mc" onclick="calculator_' . $unique_id . '.memory.value = \'\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="mr" onclick="calculator_' . $unique_id . '.display.value = calculator_' . $unique_id . '.memory.value;" /></td>';
		echo 							'</tr>';
		echo 							'<tr>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="1" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'1\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="2" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'2\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="3" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'3\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="+" onclick="calculator_' . $unique_id . '.display.value = calculator_' . $unique_id . '.accumulator.value = eval(calculator_' . $unique_id . '.accumulator.value + calculator_' . $unique_id . '.display.value); calculator_' . $unique_id . '.accumulator.value += \' + \'; calculator_' . $unique_id . '.reset.value = \'1\';" /></td>';
		echo 							'</tr>';
		echo 							'<tr>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="4" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'4\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="5" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'5\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="6" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'6\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="-" onclick="calculator_' . $unique_id . '.display.value = calculator_' . $unique_id . '.accumulator.value = eval(calculator_' . $unique_id . '.accumulator.value + calculator_' . $unique_id . '.display.value); calculator_' . $unique_id . '.accumulator.value += \' - \'; calculator_' . $unique_id . '.reset.value = \'1\';" /></td>';
		echo 							'</tr>';
		echo 							'<tr>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="7" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'7\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="8" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'8\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="9" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'9\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="x" onclick="calculator_' . $unique_id . '.display.value = calculator_' . $unique_id . '.accumulator.value = eval(calculator_' . $unique_id . '.accumulator.value + calculator_' . $unique_id . '.display.value); calculator_' . $unique_id . '.accumulator.value += \' * \'; calculator_' . $unique_id . '.reset.value = \'1\';" /></td>';
		echo 							'</tr>';
		echo 							'<tr>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="c" onclick="calculator_' . $unique_id . '.accumulator.value = \'\'; calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="0" onclick="if(calculator_' . $unique_id . '.reset.value == \'1\') { calculator_' . $unique_id . '.display.value = \'\'; calculator_' . $unique_id . '.reset.value = \'0\'; } calculator_' . $unique_id . '.display.value += \'0\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="=" onclick="calculator_' . $unique_id . '.display.value = eval(calculator_' . $unique_id . '.accumulator.value + calculator_' . $unique_id . '.display.value); calculator_' . $unique_id . '.accumulator.value = \'\'; calculator_' . $unique_id . '.reset.value = \'1\';" /></td>';
		echo 								'<td align="center"><input type="button" style="width:32px" value="/" onclick="calculator_' . $unique_id . '.display.value = calculator_' . $unique_id . '.accumulator.value = eval(calculator_' . $unique_id . '.accumulator.value + calculator_' . $unique_id . '.display.value); calculator_' . $unique_id . '.accumulator.value += \' / \'; calculator_' . $unique_id . '.reset.value = \'1\';" /></td>';
		echo 							'</tr>';
		echo 						'</table>';
		echo 					'</form>';
		echo 				'</td>';
		echo 			'</tr>';
		echo 			'<tfoot><tr><td><div style="text-align: right;"><font face="arial" size="-3"><a href="http://www.joeswebtools.com/wordpress-plugins/calculator/">Joe\'s</a></font></div></td></tr></tfoot>';
		echo 		'</tbody>';
		echo 	'</table>';
		echo '</center>';

		echo $after_widget;
	}

	function update($new_instance, $old_instance) {

		return $new_instance;
	}

	function form($instance) {

		// Load language file
		$current_locale = get_locale();
		if(!empty($current_locale)) {
			$mo_file = dirname(__FILE__) . '/languages/calculator-' . $current_locale . ".mo";
			if(@file_exists($mo_file) && is_readable($mo_file)) {
				load_textdomain('calculator', $mo_file);
			}
		}

		// Get options
		$instance = wp_parse_args((array)$instance, array('title' => __('Calculator', 'calculator')));
		$option_title = esc_attr($instance['title']);

		// Display form
		echo '<p>';
		echo 	'<label for="' . $this->get_field_id('title') . '">' . __('Title: ', 'calculator') . '</label>';
		echo 	'<input class="widefat" type="text" value="' . $option_title . '" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" />';
		echo '</p>';
	}
}

add_action('widgets_init', create_function('', 'return register_widget("WP_Widget_Calculator");'));

?>