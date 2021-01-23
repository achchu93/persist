<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-values',
      'title' => __('Values', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        // Repeater field
        $items = [];
        $first = true;
        while (have_rows('items')) {
          the_row();
          $items[] = [
            'title' => get_sub_field('title'),
            'text' => get_sub_field('text'),
            'icon' => get_sub_field('icon'),
            'id' => uniqid(),
          ];
          $first = false;
        }

        echo Roots\view('blocks.block-values', [
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'background' => get_field('background'),
          'link' => get_field('link'),
          'items' => $items,
        ]);
      },
    ]);
  }
});
