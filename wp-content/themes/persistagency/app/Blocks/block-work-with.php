<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-work-with',
      'title' => __('Worked with', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        // Repeater field
        $items = [];
        while (have_rows('items')) {
          the_row();
          $items[] = [
            'image' => get_sub_field('image'),
          ];
        }

        echo Roots\view('blocks.block-work-with', [
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'items' => $items,
        ]);
      },
    ]);
  }
});
