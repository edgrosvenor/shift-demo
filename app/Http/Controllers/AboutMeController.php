<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function __invoke()
    {
        // TODO: Have Shift turn this into a more modern looking array
        $about = array(
            'My name is Ed Grosvenor',
            'I am the Director of Application Development at EXACT Sports in Chicago, Illinois',
            'I grew up in Chicago and moved to Basel in August with my wife and two sons.',
            'I have been a PHP developer since version 3 and did lots of Perl before that.',
            'My email address is ed@gros.co',
            'My Twitter handle is @MaybeEdward',
        );

        return view('about-me', ['about' => $about]);
    }
}
