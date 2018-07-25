<?php

	/**
	 * Author Name: Liton Arefin
	 * Author URL: https://jeweltheme.com
	 * Date: 7/16/18
	 */


	// If this file is called directly, abort.
	if ( ! defined( 'ABSPATH' ) ) {
		die();
	}


	function uamp_mobile(){
		global $uamp_options;
		echo $uamp_options['uamp_is_amp'];
	}



class Ultimate_AMP_Options {

	static $uamp_options;
	static $fields = array ();

	public static function get_options() {
		return get_option( self::$uamp_options, array() );
	}

	/**
	 * Get plugin option.
	 *
	 * @param string $option  Plugin option name.
	 * @param bool   $default Default value.
	 *
	 * @return mixed Option value.
	 */
	public static function get_option( $option, $default = false ) {
		$uamp_options = self::get_options();

		if ( ! isset( $uamp_options[ $option ] ) ) {
			return $default;
		}

		return $uamp_options[ $option ];
	}


}


$li = new Ultimate_AMP_Options();
	print_r($li->get_option('uamp_twitter'));