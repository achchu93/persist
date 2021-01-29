<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-work-slider',
      'title' => __('Work Slider', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        $items = [];
        while (have_rows('items')) {
          the_row();
          $item = get_sub_field('item');

          // Repeater field
          $icons = [];
          while (have_rows('icons')) {
            the_row();
            $icons[] = get_sub_field('icon');
          }

          $items[] = [
            'title' => $item->post_title,
            'excerpt' => $item->post_excerpt,
            'url' => get_permalink($item),
            'illustration' => get_field('illustration', $item->ID),
            'custom_class' => get_sub_field('custom_class'),
            'reverse' => get_sub_field('reverse'),
            'icons' => $icons,
          ];
        }

        echo Roots\view('blocks.block-work-slider', [
          'class' => $block['className'] ?? '',
          'title' => get_field('title'),
          'items' => $items,
        ]);
      },
    ]);
  }
});
