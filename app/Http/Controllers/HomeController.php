<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\LatestNews;
use App\Models\OurWork;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ourWork = OurWork::all();
//        $latestNews = new LatestNews();
//        $latestNews->img_path = 'images/volunteers-needed.jpg';
//        $latestNews->title = 'Made by reusable components';
//        $latestNews->description = 'Let me explain the meaning reusable component as I feel it contextually';
//        $latestNews->save();
        $latestNews = LatestNews::all();
        return view('home.home', compact('ourWork', 'latestNews'));
    }
}



