<?php

namespace Artificertech\BladeTimeElements;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeTimeElementsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'blade-time-elements');
        $this->registerBladeDirectives();
        $this->registerBladeComponents();
    }

    protected function registerBladeDirectives()
    {
        Blade::directive('timeElementScripts', function () {
            return '<script type="module" src="https://unpkg.com/@github/time-elements@latest?module"></script>';
        });
    }

    protected function registerBladeComponents()
    {
        Blade::component('blade-time-elements::components.relative-time', 'relative-time');
        Blade::component('blade-time-elements::components.time-until', 'time-until');
        Blade::component('blade-time-elements::components.time-ago', 'time-ago');
        Blade::component('blade-time-elements::components.local-time', 'local-time');
    }
}
