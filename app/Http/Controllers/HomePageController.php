<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomePageController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function aboutUs(): View
    {
        return view('about');
    }

    public function contactUs(): View
    {
        return view('contact');
    }
}
