<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-services-black',
      'title' => __('Services black', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        // Repeater field
        $items1 = [];
        while (have_rows('items1')) {
          the_row();
          $items1[] = [
            'title' => get_sub_field('title'),
            'text' => get_sub_field('text'),
            'icon' => get_sub_field('icon'),
          ];
        }

        // Repeater field
        $items2 = [];
        while (have_rows('items2')) {
          the_row();
          $items2[] = [
            'title' => get_sub_field('title'),
            'text' => get_sub_field('text'),
            'icon' => get_sub_field('icon'),
          ];
        }
        $columns = [$items1, $items2];

        echo Roots\view('blocks.block-services-black', [
          'class' => $block['className'] ?? '',
          'columns' => $columns,
        ]);
      },
    ]);
  }
});
