<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-text-image',
      'title' => __('Text image', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        echo Roots\view('blocks.block-text-image', [
          'class' => $block['className'] ?? '',
          'title' => get_field('title'),
          'text' => get_field('text'),
          'icon' => get_field('icon'),
          'image' => get_field('image'),
          'reverse' => get_field('reverse'),
        ]);
      },
    ]);
  }
});
