<?php

/**
 * Plugin Name: Minimal Gutenberg blocks example
 * Plugin URI: https://github.com/mpellegrin/minimal-gutenberg-blocks-example
 * Description: This plugin show how to implement simple Gutenberg blocks, without styling or headaches.
 * License: GPL-2.0-or-later
 * Version: 1.0.0
 * Author: Mathieu PELLEGRIN
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 */
function mgbe_blocks_register_blocks() {

	if ( ! function_exists( 'register_block_type' ) ) {
		// Gutenberg is not active.
		return;
    }

    $blocks = glob(__DIR__ . '/source/*.js');

    foreach ($blocks as $block_file) {
        $block_name = basename($block_file, '.js');

        // automatically load dependencies and version
	    $asset_file = include(plugin_dir_path(__FILE__) . 'build/' . $block_name . '.asset.php');

        wp_register_script(
            'mgbe-blocks-' . $block_name,
            plugins_url( 'build/' . $block_name . '.js', __FILE__ ),
            $asset_file['dependencies'],
            $asset_file['version'],
            true
        );

        register_block_type(
            'mgbe/' . $block_name,
            [
                'editor_script' => 'mgbe-blocks-' . $block_name,
            ]
        );
    }
}
add_action( 'init', 'mgbe_blocks_register_blocks' );
