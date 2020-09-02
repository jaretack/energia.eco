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

    public function fotowoltaikaKielce()
    {
        return view('fotowoltaika-kielce', ['active_page' => 'fotowoltaika-kielce']);
    }

    public function folieGrzewcze()
    {
        return view('folie-grzewcze', ['active_page' => 'folie-grzewcze']);
    }

    public function presentation()
    {
        return view('presentation', ['active_page' => 'presentation']);
    }
}
