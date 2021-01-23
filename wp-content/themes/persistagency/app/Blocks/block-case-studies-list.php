<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-case-studies-list',
      'title' => __('Case studies list', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        $items = [];
        $reverse = false;
        while (have_rows('items')) {
          the_row();
          $item = get_sub_field('item');
          $items[] = [
            'title' => $item->post_title,
            'excerpt' => $item->post_excerpt,
            'url' => get_permalink($item),
            'illustration' => get_field('illustration', $item->ID),
            'class' => get_sub_field('class'),
            'reverse' => $reverse,
          ];
          $reverse = !$reverse;
        }

        echo Roots\view('blocks.block-case-studies-list', [
          'class' => $block['className'] ?? '',
          'title' => get_field('title'),
          'items' => $items,
        ]);
      },
    ]);
  }
});
