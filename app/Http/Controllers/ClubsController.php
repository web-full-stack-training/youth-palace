<?php

namespace App\Http\Controllers;

use App\Models\Clubs;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    public function index() {
        $clubs = Clubs::all();
        return view('clubs.clubs', compact('clubs'));
    }
}
