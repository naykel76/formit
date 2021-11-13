<?php

namespace Naykel\Formit;

use Illuminate\Support\ServiceProvider;

use Naykel\Formit\View\Components\Checkbox;
use Naykel\Formit\View\Components\Ckeditor;
use Naykel\Formit\View\Components\Radio;
use Naykel\Formit\View\Components\Select;

class FormitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'formit');

        $this->loadViewComponentsAs('formit', [
            Checkbox::class,
            Ckeditor::class,
            Radio::class,
            Select::class,
        ]);

        // publish assets to public directory
        // $this->publishes(
        //     [
        //         __DIR__ . '/vendor/ckeditor/' => public_path('vendor/ckeditor/'),
        //     ],
        //     'nkr'
        // );
    }
}
