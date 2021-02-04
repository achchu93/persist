<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-story-stats',
      'title' => __('Story stats', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        // Repeater field
        $stats = [];
        while (have_rows('stats')) {
          the_row();
          $stats[] = [
            'title' => get_sub_field('title'),
            'number' => get_sub_field('number'),
          ];
        }

        echo Roots\view('blocks.block-story-stats', [
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'title' => get_field('title'),
          'text' => get_field('text'),
          'image' => get_field('image'),
          'stats' => $stats,
        ]);
      },
    ]);
  }
});
