<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialProgramsController extends Controller
{
    public function index() {
        return view ('special-programs.special-programs');
    }
}
