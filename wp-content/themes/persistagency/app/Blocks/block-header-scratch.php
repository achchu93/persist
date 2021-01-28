<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-header-scratch',
      'title' => __('Header scratch', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        $variant = get_field('variant') ?? 'red';
        $scratch = "images/brush-$variant.png";
        echo Roots\view('blocks.block-header-scratch', [
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'variant' => $variant,
          'scratch' => $scratch,
        ]);
      },
    ]);
  }
});
