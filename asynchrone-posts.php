<?php

/*
Plugin Name: Asynchrone Posts
Plugin URI:
Description: Asynchronously publish load
Author: Adrien Dhermy
Version: 1.0
Author URI: https://adriendhermy.fr
*/

define( 'PLUGIN_DIR', __FILE__ );
define('PLUGIN_URI', plugin_dir_url(__DIR__));
define('PLUGIN_VIEWS', __DIR__ . "/views/");
define('PLUGIN_VIEWS_THUMBNAILS', __DIR__ . "/views/thumbnails/");

require_once("requires.php");

new \Dhermy\Plugin();