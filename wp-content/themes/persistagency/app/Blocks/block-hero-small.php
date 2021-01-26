<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-hero-small',
      'title' => __('Hero small', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {
        echo Roots\view('blocks.block-hero-small', [
          'class' => $block['className'] ?? '',
          'header' => get_field('header'),
          'header2' => get_field('header2'),
          'background' => get_field('background'),
        ]);
      },
    ]);
  }
});
