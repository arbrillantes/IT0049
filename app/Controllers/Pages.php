<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('pages/home', [
            'title'  => 'Home',
            'active' => 'home',
        ]);
    }

    public function about(): string
    {
        return view('pages/about', [
            'title'  => 'About',
            'active' => 'about',
        ]);
    }
}
