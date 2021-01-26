<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-who-we-are',
      'title' => __('Who we are', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) { 
        echo Roots\view('blocks.block-who-we-are', [ 
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'title' => get_field('title'),
          'content' => get_field('content'),
        ]);
      },
    ]);
  }
});
