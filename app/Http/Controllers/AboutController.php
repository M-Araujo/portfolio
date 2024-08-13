<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }


}
