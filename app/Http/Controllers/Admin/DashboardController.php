<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use App\Models\Collaborations;
use App\Models\Contact;
use App\Models\Media;
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

        $club = Clubs::all()->take(2);
        $clubCount = Clubs::count();

        $media = Media::all()->take(3);
        $mediaCount = Clubs::count();

        $arr = [];
        $i = 0;
        foreach ($club as $data) {
            $arr[$i] = $data['description'];
            $arr[$i] = explode('.', $arr[$i]);
            $arr[$i] = array_shift($arr[$i]);
            $i++;
        }

        return view('admin.dashboard.dashboard', compact('contact', 'collaboration', 'volunteering', 'collCount', 'volCount', 'club', 'clubCount', 'media', 'mediaCount', 'arr'));
    }
}
