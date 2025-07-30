<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    protected static $views = [
        'sections.header',
    ];

    public function with(): array
    {
        return [
            'primary_nav' => $this->primaryNav(),
        ];
    }

    protected function primaryNav()
    {
        return wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'flex gap-[32px]',
            'echo' => false,
            'container' => false,
            'walker' => new \App\Walkers\NavWalker(),
        ]);
    }
}
