<?php

namespace App\Controllers;

class beranda extends BaseController
{
    public function index()
    {
        return view('beranda/home');
    }

    public function about()
    {
        return view('beranda/about');
    }
    public function Contact()
    {
        return view('beranda/contact');
    }
}
