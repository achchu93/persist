<?php
add_action('acf/init', function () {
if (function_exists('acf_register_block')) {
acf_register_block([
  'name' => 'block-our-team',
  'title' => __('Our team', 'sage'),
  'category' => 'sections',
  'icon' => 'screenoptions',
  'render_callback' => function ($block) { 

    // Repeater field
    $items=[];
    while (have_rows('items')) {
      the_row();
      $items[]=[
      'name' => get_sub_field('name'),
      'position' => get_sub_field('position'),
      'from' => get_sub_field('from'),
      'image' => get_sub_field('image'),
      ];
    }

    
    echo Roots\view('blocks.block-our-team', [ 
      'class' => $block['className'] ?? '',
      'header' => get_field('header'),
      'content' => get_field('content'),
    'items' => $items,
    ]);
  },
]);
}
});
