<?php

/**
 * Custom image sizes
 * https://developer.wordpress.org/reference/functions/add_image_size/
 */

add_image_size('medium-crop', '800', '600', true);
add_image_size('large-crop', '1024', '768', true);

/**
 * Show images to user (optional)
 */

add_filter('image_size_names_choose', function ($sizes) {
    return array_merge($sizes, [
        'medium-crop' => __('Medium Crop', 'sage'),
        'large-crop' => __('Large Crop', 'sage'),
    ]);
});
