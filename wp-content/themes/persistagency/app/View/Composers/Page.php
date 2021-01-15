<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Page extends Composer
{
  protected static $views = ['page'];

  public function with()
  {
    return [
      'header_background' => get_field('header_background'),
      'header_style' => get_field('header_style') ?? 'black',
      'show_email' => get_field('show_email'),
      'show_floating_social_icons' => get_field('show_floating_social_icons'),
      'email_style' => get_field('email_style'),
      'facebook' => get_field('facebook', 'option'),
      'twitter' => get_field('twitter', 'option'),
      'linkedin' => get_field('linkedin', 'option'),
      'instagram' => get_field('instagram', 'option'),
      'email' => get_field('email', 'option'),
    ];
  }
}
