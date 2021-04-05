<?php
add_action('acf/init', function () {
  if (function_exists('acf_register_block')) {
    acf_register_block([
      'name' => 'block-lottie',
      'title' => __('Lottie Animation Block', 'sage'),
      'category' => 'sections',
      'icon' => 'screenoptions',
      'render_callback' => function ($block) {

        echo Roots\view('blocks.block-lottie', [
          'class' => $block['className'] ?? '',
          'animation_folder_name' => get_field('animation_folder_name'),
          'animation_delay' => get_field('animation_delay'),
        ]);
      },
    ]);
  }
});
