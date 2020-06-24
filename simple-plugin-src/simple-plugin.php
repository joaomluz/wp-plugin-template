<?php
/**
 * Plugin Name: Simple Plugin
 * Plugin URI: https://example.com/simple-plugin
 * Description: A simple wordpress plugin.
 * Author: Joao Luz
 * Author URI: https://example.com/joaoluz
 * Version: 1.0.0
 * License: LICENSE-2.0
 * License URI: https://www.apache.org/licenses/LICENSE-2.0.txt
 * Text Domain: simple-plugin
 * Domain Path: /languages
 *
 * @package   SimplePlugin
 * @author    Joao Luz
 * @copyright 2020 Joao Luz
 * @license   LICENSE-2.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'simple_plugin_FILE' ) ) {
    define( 'simple_plugin_FILE', __FILE__ );
}

/* PHP namespace autoloader */
require_once( dirname( simple_plugin_FILE ) . '/vendor/autoload.php' );

\SimplePlugin\Loader::newInstance( plugin_basename( simple_plugin_FILE ) );
