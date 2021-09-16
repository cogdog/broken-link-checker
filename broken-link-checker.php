<?php
/**
 * Broken Link Checker
 *
 * @link              https://github.com/cogdog/broken-link-checker/
 * @since             1.0.0
 * @package           broken-link-wayback
 *
 * @wordpress-plugin
 * Plugin Name: Broken Link Checker (with Wayback Re-director)
 * Plugin URI:  https://github.com/cogdog/broken-link-checker/
 * Description: Checks your blog for broken links and missing images and notifies you on the dashboard if any are found. Modified original plugin by WPMU DEV to change behavior for dead links to replace ones that sends visitors to Internet Archive Wayback machine search of URL
 * Version:     1.12.0
 * Author:      WPMU DEV modified by Alan Levine @cogdog
 * Author URI:  https://wpmudev.com/
 * Text Domain: broken-link-checker
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/*
Broken Link Checker is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Broken Link Checker is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Broken Link Checker. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// Path to this file.
if ( ! defined( 'BLC_PLUGIN_FILE' ) ) {
	define( 'BLC_PLUGIN_FILE', __FILE__ );
}

// Path to the plugin's directory.
if ( ! defined( 'BLC_DIRECTORY' ) ) {
	define( 'BLC_DIRECTORY', dirname( __FILE__ ) );
}

// Load the actual plugin.
require 'core/init.php';
