<?php

namespace FengLaravelAdmin\DistpickerfDemo;

use Illuminate\Support\ServiceProvider;
use Encore\Admin\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid\Filter;

class DistpickerfDemoServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(DistpickerfDemo $extension)
    {
        if (! DistpickerfDemo::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'fxn_laravel_admin-distpickerfdemo');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/fxn_laravel_admin/distpickerfdemo')],
                'fxn_laravel_admin-distpickerfdemo'
            );
        }

        Admin::booting(function () {
            Form::extend('distpickerfeng', DemoCheck::class);
//            Filter::extend('distpickerfeng', DemoFilter::class);
        });
//        $this->app->booted(function () {
//            DistpickerfDemo::routes(__DIR__.'/../routes/web.php');
//        });
    }
}