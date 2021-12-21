<?php

namespace App\Http\Controllers;

use App\Models\Collaborations;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CollaborationController extends Controller
{
    public function index() {
//        $img_path = 'images/images-modified.png';
//        $name = 'samvel';
        //        $coll->img_path = $img_path;
//        $coll->name = $name;
//        $coll->save();
        $coll = new Collaborations();
        $collaboration = $coll::all();

        return view('collaboration.collaboration', compact('collaboration'));
    }
}
