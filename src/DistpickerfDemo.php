<?php

namespace FengLaravelAdmin\DistpickerfDemo;

use Encore\Admin\Extension;

class DistpickerfDemo extends Extension
{
    public $name = 'distpickerfdemo';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Distpickerfdemo',
        'path'  => 'distpickerfdemo',
        'icon'  => 'fa-gears',
    ];
}