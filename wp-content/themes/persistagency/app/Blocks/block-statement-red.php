<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-statement-red',
      'title' => __('Statement red', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) { 
        echo Roots\view('blocks.block-statement-red', [ 
          'class' => $block['className'] ?? '',
          'text' => get_field('text'),
        ]);
      },
    ]);
  }
});
