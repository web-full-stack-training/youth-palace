<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collaborations;
use App\Models\Contact;
use App\Models\Volunteering;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $collaboration = Collaborations::all()->take(3);
        $volunteering = Volunteering::all()->take(3);
        $collCount = Collaborations::count();
        $volCount = Volunteering::count();
        return view('admin.dashboard.dashboard', compact('contact', 'collaboration', 'volunteering', 'collCount', 'volCount'));
    }
}
