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
        // youtube embed
        $youtube_url = function_exists('get_field') ? get_field('youtube', $this->post) : '';
        $youtube_embed = null;
        if ($youtube_url) {
            $youtube_id = \App\extract_youtube_id($youtube_url);
            $youtube_embed = "https://www.youtube.com/embed/$youtube_id";
        }

        return $this->view('components.featured', [
            'youtube_embed' => $youtube_embed,
            'embed' => function_exists('get_field') ? get_field('embed', $this->post) : '',
            'thumbnail' => has_post_thumbnail($this->post) ? get_the_post_thumbnail($this->post, 'large', ['class' => 'w-full h-auto']) : '',
            'caption' => has_post_thumbnail($this->post) ? get_the_post_thumbnail_caption($this->post) : '',
        ]);
    }
}
