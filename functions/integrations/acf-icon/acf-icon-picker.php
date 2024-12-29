<?php
/*
Plugin Name: Advanced Custom Fields: Icon Picker
Plugin URI: https://github.com/houke/acf-icon-picker
Description: Allows you to pick an icon from a predefined list
Version: 1.9.0
Author: Houke de Kwant
Author URI: ttps://github.com/houke/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/houke/acf-icon-picker
GitHub Branch: master
*/

if (!defined('ABSPATH')) exit;

if (!class_exists('acf_plugin_icon_picker')) :

	class acf_plugin_icon_picker
	{

		function __construct()
		{

			$this->settings = array(
				'version'	=> '1.9.0',
				'url'		=> get_template_directory_uri() . '/functions/integrations/acf-icon/',
				'path'		=> get_template_directory_uri() . '/functions/integrations/acf-icon/'
			);

			add_action('acf/include_field_types', 	array($this, 'include_field_types'));
		}

		function include_field_types($version = false)
		{
			include_once('fields/acf-icon-picker-v5.php');
		}
	}

	new acf_plugin_icon_picker();

endif;


// modify the path to the icons directory
add_filter('acf_icon_path_suffix', 'acf_icon_path_suffix');

function acf_icon_path_suffix($path_suffix)
{
	return 'dist/img/icons/lineal/';
}
