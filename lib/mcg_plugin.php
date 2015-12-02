<?php

/*
  License: MIT
  Copyright: © Chris How, Primesolid 2015
 */

defined('ABSPATH') or die('No script kiddies please!');


if (!class_exists('MCG')) {

    // Required files, eg custom post types
    // require_once('mcg_job.php');

    class MCG {

	public static function init() {
	    // Init plugin classes, eg custom post types
        // MCG_Job_Post_Type::init();


	    add_action('admin_enqueue_scripts', function() {
		wp_register_script(
			'mcg-plugin-admin', plugins_url('js/mcg-plugin-admin.js', (dirname(__FILE__))), array('jquery'), filemtime(plugin_dir_path(dirname(__FILE__)) . 'js/mcg-plugin-admin.js'), true
		);
		wp_enqueue_script('mcg-plugin-admin');
	    });
	}

    }

}
