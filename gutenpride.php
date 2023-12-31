<?php
/**
 * Plugin Name:       Gutenpride
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenpride
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 *
 * Load the built script, so it is run within the editor, you need to tell
 * WordPress about the script.
 * @see https://developer.wordpress.org/block-editor/getting-started/create-block/wp-plugin/#plugin-to-load-script
 *
 */
function create_block_gutenpride_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_gutenpride_block_init' );
