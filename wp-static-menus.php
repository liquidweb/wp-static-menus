<?php
/**
 * Plugin Name: WP Static Menus
 * Description: Cache navigation menus in static HTML for big performance gains.
 * Version: 1.0.0
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Setup the plugin constants
 */
define( 'WP_STATIC_MENUS_VERSION', '1.0.0' );
define( 'WP_STATIC_MENUS_SLUG', 'wp-static-menus' );
define( 'WP_STATIC_MENUS_FILE', __FILE__ );
define( 'WP_STATIC_MENUS_DIR', plugin_dir_path( WP_STATIC_MENUS_FILE ) );
define( 'WP_STATIC_MENUS_URL', untrailingslashit( plugins_url( basename( plugin_dir_path( WP_STATIC_MENUS_FILE ) ), basename( WP_STATIC_MENUS_FILE ) ) ) );

/**
 * Require Plugin Files
 */
require_once 'includes/class-wp-static-menus.php';

/**
 * Start the engines
 */
wp_static_menus();

/**
 * Wrapper for getting global $wp_static_menus and ensuring it is an instance of WP_Static_Menus
 *
 * @return WP_Static_Menus
 */
function wp_static_menus() {
    global $wp_static_menus;

    if( ! $wp_static_menus instanceof WP_Static_Menus ) {
        $wp_static_menus = new WP_Static_Menus;
    }

    return $wp_static_menus;
}