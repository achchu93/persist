<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class BlockFooterCta extends Composer
{
  /**
   * List of views served by this composer.
   *
   * @var array
   */
  protected static $views = ['partials.block-footer-cta'];

  /**
   * Data to be passed to view before rendering.
   *
   * @return array
   */
  public function with()
  {
    return [
      'title' => get_field('footer_cta_title', 'option'),
      'link' => get_field('footer_cta_link', 'option'),
    ];
  }
}
