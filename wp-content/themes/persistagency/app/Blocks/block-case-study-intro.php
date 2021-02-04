<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-case-study-intro',
      'title' => __('Case study intro', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        echo Roots\view('blocks.block-case-study-intro', [
          'class' => $block['className'] ?? '',
          'title' => get_field('title'),
          'text' => get_field('text'),
          'image' => get_field('image'),
          'reverse' => get_field('reverse'),
        ]);
      },
    ]);
  }
});
