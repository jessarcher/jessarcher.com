<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Facades\Markdown;
use Statamic\Statamic;
use Torchlight\Commonmark\V2\TorchlightExtension;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Statamic::script('app', 'cp');
        // Statamic::style('app', 'cp');

        Markdown::addExtension(function () {
            return new TorchlightExtension;
        });
    }
}
