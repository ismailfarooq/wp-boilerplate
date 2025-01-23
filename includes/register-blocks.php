<?php

// Ensure ACF is available before registering blocks
if (!function_exists('acf_register_block_type')) {
    return;
}

// Register blocks
add_action('acf/init', function () {
    acf_register_block_type(array(
        'name'              => 'example-block',
        'title'             => __('Example Block', 'theme-name'),
        'description'       => __('An example block example.', 'theme-name'),
        'render_template'   => get_template_directory() . 'blocks/example-block/index.php',
        'category'          => 'layout',
        'icon'              => 'admin-customizer',
        'keywords'          => array('example', 'example'),
        'enqueue_style'     => get_template_directory_uri() . '/dist/example-block/editor.css', // Block-specific styles
        'enqueue_script'    => get_template_directory_uri() . '/dist/example-block/blocks.js',
        'supports'          => array(
            'align' => true,
        ),
    ));
});
