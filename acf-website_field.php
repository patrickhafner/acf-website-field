<?php
/*
Plugin Name: Advanced Custom Fields: Website Field for ACF v5
Plugin URI: https://github.com/Jeradin/acf-website-field
GitHub Plugin URI: https://github.com/Jeradin/acf-website-field
Description: Website Title field for Advanced Custom Fields
Version: 1.5.9.5
Author: Geet Jacobs
Author URI: http://anagr.am
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


if( is_admin() ) {
	require_once( 'class-plugin-updater.php' );
}




class acf_website_field_plugin
{
	/*
	*  Construct
	*
	*  @description:
	*  @since: 3.6
	*  @created: 1/04/13
	*/

	function __construct()
	{

		// version 5+ ONLY!!!
		add_action('acf/include_field_types', array($this, 'register_fields'));


	}


	/*
	*  register_fields
	*
	*  @description:
	*  @since: 3.6
	*  @created: 1/04/13
	*/

	function register_fields()
	{
		include_once('website_url.php');
	}


}

new acf_website_field_plugin();

?>
