<?php

namespace App\Walkers;

use Walker_Nav_Menu;

class NavWalker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="ml-4 space-y-2">';
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= sprintf(
            '<li class="block">
                <a href="%s" class="text-nav">%s</a>
            </li>',
            esc_url($item->url),
            esc_html($item->title)
        );
    }
}