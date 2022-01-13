<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\LatestNews;
use App\Models\OurWork;
use App\Models\Collaborations;
use App\Models\Volunteering;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $volunteers = Volunteering::count();
        $collaboration = Collaborations::count();
        $ourWork = OurWork::all();
        $latestNews = LatestNews::all();
        return view('home.home', compact('ourWork', 'latestNews', 'volunteers', 'collaboration'));
    }
}



