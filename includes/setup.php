<?php
function mytheme_setup() {
    // Add theme supports
    add_theme_support('editor-styles');
    add_theme_support( 'wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('post-thumbnails');

    // Add editor styles
    add_editor_style('dist/css/app.css');
}
add_action('after_setup_theme', 'mytheme_setup');
