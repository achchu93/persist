<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-hero',
      'title' => __('Hero', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        echo Roots\view('blocks.block-hero', [
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'background' => get_field('background'),
        ]);
      },
    ]);
  }
});
