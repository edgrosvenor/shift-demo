<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutWorkbenchController extends Controller
{
    public function __invoke()
    {
        return view('about-workbench');
    }
}
