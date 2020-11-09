<?php

/**
 * Asynchrone Posts
 *
 * @package           Asynchrone Posts
 * @author            Adroen Dhermy
 * @copyright         2020 Adrien Dhermy
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Asynchrone Posts
 * Description:       Displays posts and loads them asynchronously
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Adrien Dhermy
 * Author URI:        http://www.adriendhermy.fr
 * Text Domain:       asynchrone-posts
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

define( 'PLUGIN_DIR', __FILE__ );
define('PLUGIN_URI', plugin_dir_url(__DIR__));
define('PLUGIN_VIEWS', __DIR__ . "/views/");
define('PLUGIN_VIEWS_THUMBNAILS', __DIR__ . "/views/thumbnails/");

require_once("requires.php");

new \Dhermy\Plugin();