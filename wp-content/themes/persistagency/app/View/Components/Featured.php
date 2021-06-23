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
    $video_url = esc_url( get_field('featured_video', $this->post->ID) );
    if( !empty( $video_url ) ){
      $thumbnails_url = has_post_thumbnail( $this->post ) ? get_the_post_thumbnail_url($this->post, 'full') : '';
      $featured = '<video src="'.$video_url.'" poster="'.$thumbnails_url.'" class="w-full h-auto" autoplay muted preload="metadata"></video>';
    }else{
      $featured = has_post_thumbnail( $this->post ) ? get_the_post_thumbnail($this->post, 'full', [ 'class' => 'w-full h-auto' ]) : '';
    }

    return $this->view('components.featured', [
      'thumbnail' => $featured,
    ]);
  }
}
