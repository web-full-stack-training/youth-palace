<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index() {
        $about = About::first();
        return view('about.about', compact('about'));
    }
}
