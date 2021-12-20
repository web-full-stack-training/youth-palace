<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutAsController extends Controller
{
    public function index()
    {
        return view('admin.about.show');
    }
}
