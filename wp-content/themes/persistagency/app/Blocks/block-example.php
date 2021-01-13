<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-example',
      'title' => __('Block Example', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) { 
        echo Roots\view('blocks.block-example', [ 
          'class' => $block['className'] ?? '',
          'title' => get_field('title'),
          'text' => get_field('text'),
          'image' => get_field('image'),
        ]);
      },
    ]);
  }
});
