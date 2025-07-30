<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    protected static $views = [
        '*',
    ];

    public function with(): array
    {
        return [
            'siteName' => $this->siteName(),
        ];
    }

    protected function siteName(): string
    {
        return get_bloginfo('name', 'display');
    }
}
