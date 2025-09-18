<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function termsOfUse()
    {
        return view('pages.terms-of-use');
    }
}
