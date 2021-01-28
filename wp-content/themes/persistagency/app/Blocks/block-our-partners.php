<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-our-partners',
      'title' => __('Our partners', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        // Repeater field
        $items = [];
        while (have_rows('items')) {
          the_row();
          $items[] = [
            'image' => get_sub_field('image'),
            'name' => get_sub_field('name'),
            'position' => get_sub_field('position'),
            'content' => get_sub_field('content'),
            'email' => get_sub_field('email'),
          ];
        }

        echo Roots\view('blocks.block-our-partners', [
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'items' => $items,
        ]);
      },
    ]);
  }
});
