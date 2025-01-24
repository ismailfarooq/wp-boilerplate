<?php
// Example: Filter to modify excerpt length
function mytheme_custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length');
