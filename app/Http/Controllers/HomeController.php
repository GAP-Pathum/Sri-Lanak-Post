<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Show the home page
    public function index()
    {
        return view('home'); // This will reference the home.blade.php view
    }
}
