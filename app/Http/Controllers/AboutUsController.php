<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    // Index page
    public function index()
    {
        return view('pages/about_us/index');
    }
}
