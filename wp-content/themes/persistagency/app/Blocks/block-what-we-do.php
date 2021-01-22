<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-what-we-do',
      'title' => __('What we do', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        // Repeater field
        $items = [];
        $first = true;
        while (have_rows('items')) {
          the_row();
          // break title into multiple rows
          $titleLines = explode("\n", get_sub_field('title', ''));

          $items[] = [
            'titleLines' => $titleLines,
            'icon' => get_sub_field('icon'),
          ];
          $first = false;
        }

        echo Roots\view('blocks.block-what-we-do', [
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'link' => get_field('link'),
          'pieces' => $items
            ? array_chunk($items, ceil(count($items) / 2))
            : null,
        ]);
      },
    ]);
  }
});
