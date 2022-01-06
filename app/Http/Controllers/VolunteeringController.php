<?php

namespace App\Http\Controllers;

use App\Models\Volunteering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VolunteeringController extends Controller
{
    public function index() {
        $volunteering = Volunteering::all();
        return view('volunteering.volunteering',compact('volunteering'));
    }
}
