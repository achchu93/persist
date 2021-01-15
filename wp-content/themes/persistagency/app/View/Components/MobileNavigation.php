<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use Log1x\Navi\Navi;

class MobileNavigation extends Component
{
  public function render()
  {
    $navigation = (new Navi())->build('mobile_navigation');

    if ($navigation->isEmpty()) {
      return;
    }

    $mobile_navigation_background=get_field( 'mobile_navigation_background', 'option');

    return $this->view('components.mobile-navigation', [
      'navigation' => $navigation->toArray(),
      'mobile_navigation_background' => $mobile_navigation_background,
    ]);
  }
}
