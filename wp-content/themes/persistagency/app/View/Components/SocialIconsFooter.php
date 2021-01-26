<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class SocialIconsFooter extends Component
{
    public function render()
    {
        if (!function_exists('get_field')) {
            return;
        }
        return $this->view('components.social-icons', [
            'facebook' => get_field('facebook', 'option'),
            'twitter' => get_field('twitter', 'option'),
            'linkedin' => get_field('linkedin', 'option'),
            'instagram' => get_field('instagram', 'option'),
        ]);
    }
}
