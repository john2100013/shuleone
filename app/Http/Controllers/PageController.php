<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }


    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function support()
    {
        return view('support');
    }

    public function help()
    {
        return view('help');
    }

    public function faq()
    {
        return view('faq');
    }

    public function about()
    {
        return view('about');
    }


}
