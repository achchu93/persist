<?php

/**
 * ACF global options
 */

// header
if (function_exists('get_field')) {
    add_action('wp_head', function () {
        $code = get_field('header_code', 'option');
        if ($code) {
            echo "\n$code\n";
        }
    });
}

// footer
if (function_exists('get_field')) {
    add_action('wp_footer', function () {
        $code = get_field('footer_code', 'option');
        if ($code) {
            echo "\n$code\n";
        }
    });
}
