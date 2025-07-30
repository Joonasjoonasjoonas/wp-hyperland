<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class News extends Composer
{
    protected static $views = [
        'sections.news',
    ];

    public function with(): array
    {
        return [
            'news_posts' => $this->getNewsPosts(),
        ];
    }

    protected function getNewsPosts(): array
    {
        return collect(get_posts([
            'numberposts' => -1,
            'post_type' => 'post',
        ]))->map(function ($post) {
            return (object) [
                'ID' => $post->ID,
                'title' => $post->post_title,
                'content' => $post->post_content,
                'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
                'permalink' => get_permalink($post->ID),
            ];
        })->toArray();
    }
}
