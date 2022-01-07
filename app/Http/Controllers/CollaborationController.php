<?php

namespace App\Http\Controllers;

use App\Models\Collaborations;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CollaborationController extends Controller
{
    public function index() {
        $collaboration = Collaborations::all();
        return view('collaboration.collaboration', compact('collaboration'));
    }

}
