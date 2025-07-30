<?php

namespace App\Providers;

use App\View\Composers\App;
use App\View\Composers\News;
use Roots\Acorn\Sage\SageServiceProvider;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        
        // Register view composers
        $this->app['view']->composer('*', App::class);
        $this->app['view']->composer('partials.blog', News::class);
    }
}
