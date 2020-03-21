<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPage extends Controller
{
    public function home()
    {
        return view('home', ['active_page' => 'home']);
    }

    public function fotowoltaika()
    {
        return view('fotowoltaika', ['active_page' => 'fotowoltaika']);
    }
}
