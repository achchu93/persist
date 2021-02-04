<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-poster-content-links',
      'title' => __('Poster content links', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {

        // Repeater field
        $links = [];
        while (have_rows('links')) {
          the_row();
          $links[] = get_sub_field('link');
        }

        echo Roots\view('blocks.block-poster-content-links', [
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'title' => get_field('title'),
          'text' => get_field('text'),
          'image' => get_field('image'),
          'links' => $links,
        ]);
      },
    ]);
  }
});
