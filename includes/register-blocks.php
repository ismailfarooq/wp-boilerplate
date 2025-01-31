<?php



add_action( 'init', 'theme_blocks' );

function theme_blocks() {

    // Get all block folders inside /build/blocks/
    foreach ( glob( get_stylesheet_directory() . '/build/blocks/*/', GLOB_ONLYDIR ) as $path ) {

        // Get block name from folder
        $block_name = basename( $path );

        // Register block
        register_block_type( $path );

        // Register Editor Script (JS)
        wp_register_script(
            "theme-block-{$block_name}-js",
            get_stylesheet_directory_uri() . "/build/blocks/{$block_name}/index.js",
            array( 'wp-blocks', 'wp-element', 'wp-editor' ), // Dependencies
            filemtime( get_stylesheet_directory() . "/build/blocks/{$block_name}/index.js" ),
            true
        );

        // Register Frontend and Editor Styles (CSS)
        wp_register_style(
            "theme-block-{$block_name}-style",
            get_stylesheet_directory_uri() . "/build/blocks/{$block_name}/style-index.css",
            array(), // No dependencies
            filemtime( get_stylesheet_directory() . "/build/blocks/{$block_name}/style-index.css" )
        );

        // Register Editor Styles (CSS)
        wp_register_style(
            "theme-block-{$block_name}-editor-style",
            get_stylesheet_directory_uri() . "/build/blocks/{$block_name}/index.css",
            array(), // No dependencies
            filemtime( get_stylesheet_directory() . "/build/blocks/{$block_name}/index.css" )
        );

        // Enqueue scripts and styles for the block
        register_block_type(
            $path,
            array(
                'editor_script' => "theme-block-{$block_name}-js",
                'style'         => "theme-block-{$block_name}-style",
                'editor_style'  => "theme-block-{$block_name}-editor-style",
            )
        );
    }
}
