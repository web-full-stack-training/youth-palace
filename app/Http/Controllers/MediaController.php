<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::all();
        return view('media.media', compact('media'));
    }
}
