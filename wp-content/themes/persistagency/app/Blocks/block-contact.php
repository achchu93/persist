<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-contact',
      'title' => __('Contact', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        // Repeater field
        $items = [];
        while (have_rows('items')) {
          the_row();
          $items[] = [
            'title' => get_sub_field('title'),
            'content' => get_sub_field('content'),
          ];
        }

        echo Roots\view('blocks.block-contact', [
          'class' => $block['className'] ?? '',
          'background' => get_field('background'),
          'items' => $items,
        ]);
      },
    ]);
  }
});
