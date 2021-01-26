<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-our-work',
      'title' => __('Our work', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        // Repeater field
        $items = [];
        while (have_rows('items')) {
          the_row();
          $items[] = [
            'title' => get_sub_field('title'),
            'subtitle' => get_sub_field('subtitle'),
            'image' => get_sub_field('image'),
          ];
        }

        echo Roots\view('blocks.block-our-work', [
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'items' => $items,
        ]);
      },
    ]);
  }
});
