<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-header-title-text-illustration',
      'title' => __('Header title text illustration', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        echo Roots\view('blocks.block-header-title-text-illustration', [
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'title' => get_field('title'),
          'text' => get_field('text'),
          'text2' => get_field('text2'),
          'image' => get_field('image'),
        ]);
      },
    ]);
  }
});
