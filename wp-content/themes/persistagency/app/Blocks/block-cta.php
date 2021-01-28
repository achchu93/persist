<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-cta',
      'title' => __('Call to action', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        echo Roots\view('blocks.block-cta', [
          'class' => $block['className'] ?? '',
          'text' => get_field('text'),
          'link' => get_field('link'),
          'variant' => get_field('variant') ?? 'black',
        ]);
      },
    ]);
  }
});
