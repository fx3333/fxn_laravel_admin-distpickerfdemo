<?php

namespace FengLaravelAdmin\DistpickerfDemo\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class DistpickerfDemoController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('distpickerfdemo::index'));
    }
}