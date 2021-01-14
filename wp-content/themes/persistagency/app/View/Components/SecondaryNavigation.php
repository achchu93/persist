<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use Log1x\Navi\Navi;

class SecondaryNavigation extends Component
{
    public function render()
    {
        $navigation = (new Navi())->build('secondary_navigation');

        if ($navigation->isEmpty()) {
            return;
        }

        return $this->view('components.secondary-navigation', [
            'navigation' => $navigation->toArray()
        ]);
    }
}
