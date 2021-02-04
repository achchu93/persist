<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-background-and-story',
      'title' => __('Background and story', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {

        echo Roots\view('blocks.block-background-and-story', [
          'class' => $block['className'] ?? '',
          'title' => get_field('title'),
          'subtitle' => get_field('subtitle'),
          'text' => get_field('text'),
          'image' => get_field('image'),
        ]);
      },
    ]);
  }
});
