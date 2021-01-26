<?php

function social_icons_shortcode()
{
  return Roots\view('components.social-icons', [
    'facebook' => get_field('facebook', 'option'),
    'twitter' => get_field('twitter', 'option'),
    'linkedin' => get_field('linkedin', 'option'),
    'instagram' => get_field('instagram', 'option'),
  ]);
}
add_shortcode('social_icons', 'social_icons_shortcode');
