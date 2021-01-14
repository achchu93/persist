<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use Log1x\Navi\Navi;

class Navigation extends Component
{
    public function render()
    {
        $navigation = (new Navi())->build('primary_navigation');

        if ($navigation->isEmpty()) {
            return;
        }

        return $this->view('components.navigation', [
            'navigation' => $navigation->toArray()
        ]);
    }
}
