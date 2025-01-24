<?php
function mytheme_enqueue_assets() {
    // Enqueue global styles
    wp_enqueue_style(
        'mytheme-global-style',
        get_template_directory_uri() . '/dist/css/app.css',
        [],
        filemtime(get_template_directory() . '/dist/css/app.css')
    );

    // Enqueue global scripts
    wp_enqueue_script(
        'mytheme-global-script',
        get_template_directory_uri() . '/dist/js/app.js',
        ['wp-element'],
        filemtime(get_template_directory() . '/dist/js/app.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
