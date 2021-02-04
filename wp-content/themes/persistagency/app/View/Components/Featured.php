<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Featured extends Component
{
  public $post;

  public function __construct($post)
  {
    $this->post = $post;
  }

  public function render()
  {
    return $this->view('components.featured', [
      'thumbnail' => has_post_thumbnail($this->post)
        ? get_the_post_thumbnail($this->post, 'full', [
          'class' => 'w-full h-auto',
        ])
        : '',
    ]);
  }
}
