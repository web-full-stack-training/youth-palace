<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubsController extends Controller
{
    public function index()
    {
        return view('clubs.clubs');
    }
}
