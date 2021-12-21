<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Charity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $result = new About();
        $about = $result::all();
        $result = new Charity();
        $charity = $result::all();
        return view('home.home', compact('about', 'charity'));
    }
}



