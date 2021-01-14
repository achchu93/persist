<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
  /**
   * List of views served by this composer.
   *
   * @var array
   */
  protected static $views = ['*'];

  /**
   * Data to be passed to view before rendering.
   *
   * @return array
   */
  public function with()
  {
    return [
      'site_name' => $this->site_name(),
      'header_logo_black' => $this->header_logo_black(),
      'header_logo_white' => $this->header_logo_white(),
      'home_url' => $this->home_url(),
      'facebook_option' => $this->facebook_option(),
      'twitter_option' => $this->twitter_option(),
      'instagram_option' => $this->instagram_option(),
      'linkedin_option' => $this->linkedin_option(),
      'email_option' => $this->email_option(),
      'phone_option' => $this->phone_option(),
      'show_share_buttons_option' => $this->show_share_buttons_option(),
    ];
  }

  public function site_name()
  {
    return get_bloginfo('name', 'display');
  }

  public function home_url()
  {
    return home_url('/');
  }

  public function header_logo_black()
  {
    if (function_exists('get_field')) {
      return get_field('header_logo_black', 'option');
    }
  }

  public function header_logo_white()
  {
    if (function_exists('get_field')) {
      return get_field('header_logo_white', 'option');
    }
  }

  public function facebook_option()
  {
    if (function_exists('get_field')) {
      return get_field('facebook', 'option');
    }
  }

  public function twitter_option()
  {
    if (function_exists('get_field')) {
      return get_field('twitter', 'option');
    }
  }

  public function instagram_option()
  {
    if (function_exists('get_field')) {
      return get_field('instagram', 'option');
    }
  }

  public function linkedin_option()
  {
    if (function_exists('get_field')) {
      return get_field('linkedin', 'option');
    }
  }

  public function email_option()
  {
    if (function_exists('get_field')) {
      return get_field('email', 'option');
    }
  }

  public function phone_option()
  {
    if (function_exists('get_field')) {
      return get_field('phone', 'option');
    }
  }

  public function show_share_buttons_option()
  {
    if (function_exists('get_field')) {
      return get_field('show_share_buttons', 'option');
    }
  }
}
