<?php
/*
Plugin Name: MCG Bare Plugin
Description: Custom plugin for CMS sites (framework only)
Version: 1
Author: Chris How, Primesolid
Author URI: http://primesolid.com/
License: MIT
Copyright: © Chris How, Primesolid 2015
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


require_once('lib/mcg_plugin.php');

if (!function_exists('get_var')) {
    function get_var($key, $where = NULL) {
	if ($where === NULL) {
	    $where = $_REQUEST;
	}

	if (isset($where[$key])) {
	    return $where[$key];
	} else {
	    return NULL;
	}
    }
}

// Start the plugin
MCG::init();
