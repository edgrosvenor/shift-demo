<?php

namespace App\Http\Controllers;


use Arr;


class AboutShiftController extends Controller
{
    public function __invoke()
    {
        $steps = array(
            'Upgrade Laravel',
            'and Generate a CI Workflow',
        );

        $steps = Arr::prepend($steps, 'Generate Tests');

        $about = 'Tonight we are going to use Laravel Shift to ' . implode(', ', $steps);

        return view('about-shift', compact('about'));
    }
}
