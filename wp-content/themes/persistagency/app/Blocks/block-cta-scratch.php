<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-cta-scratch',
      'title' => __('Cta scratch', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        echo Roots\view('blocks.block-cta-scratch', [
          'class' => $block['className'] ?? '',
          'text1' => get_field('text1'),
          'text2' => get_field('text2'),
        ]);
      },
    ]);
  }
});
