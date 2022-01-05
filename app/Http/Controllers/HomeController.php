<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Collaborations;
use App\Models\Volunteering;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $volunteers = Volunteering::count();
        $collaboration = Collaborations::count();
        return view('home.home', compact('volunteers', 'collaboration'));
    }
}



