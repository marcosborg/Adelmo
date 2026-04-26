<?php

namespace App\Http\Controllers;

use App\Models\HomePageSetting;

class HomePageController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'page' => HomePageSetting::singleton()->mergedContent(),
        ]);
    }
}
