<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-big-image',
      'title' => __('Big Image', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) { 
        echo Roots\view('blocks.block-big-image', [ 
          'class' => $block['className'] ?? '',
          'image' => get_field('image'),
        ]);
      },
    ]);
  }
});
