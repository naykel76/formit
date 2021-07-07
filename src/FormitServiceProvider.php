<?php

namespace Naykel\Formit;

use Illuminate\Support\ServiceProvider;

use Naykel\Formit\View\Components\Checkbox;
use Naykel\Formit\View\Components\Ckeditor;
use Naykel\Formit\View\Components\File;
use Naykel\Formit\View\Components\Input;
use Naykel\Formit\View\Components\Radio;
use Naykel\Formit\View\Components\Select;
use Naykel\Formit\View\Components\Submit;
use Naykel\Formit\View\Components\Textarea;

class FormitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . '/../views', 'formit');

        $this->loadViewComponentsAs('formit', [
            Checkbox::class,
            Ckeditor::class,
            File::class,
            Input::class,
            Radio::class,
            Select::class,
            Submit::class,
            Textarea::class,
        ]);

        // publish assets to public directory
        $this->publishes(
            [
                __DIR__ . '/vendor/ckeditor/' => public_path('vendor/ckeditor/'),
            ],
            'nkr'
        );
    }
}
