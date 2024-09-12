<?php
/**
 * Plugin Name:       Wpn-blocks
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.6
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpn-blocks
 *
 * @package WpnBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function wpn_blocks_wpn_blocks_block_init() {
	register_block_type( __DIR__ . '/build/heading' );
	register_block_type( __DIR__ . '/build/icon-box' );
}
add_action( 'init', 'wpn_blocks_wpn_blocks_block_init' );
