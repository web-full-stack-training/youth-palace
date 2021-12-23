<?php

namespace App\Http\Controllers;

use App\Models\Volunteering;
use Illuminate\Http\Request;

class VolunteeringController extends Controller
{
    public function index() {
        $volunteerings = Volunteering::all();
        return view('volunteering.volunteering',compact('volunteerings'));
    }
    public function store(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'full_name' => 'required',
        ]);
        if ($request->hasFile('image')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png'
            ]);
            $request->image->store('volunteering', 'public');
            $volunteering = new Volunteering([
                "full_name" => $request->get('full_name'),
                "image_path" => $request->image->hashName()
            ]);
            $volunteering->save();
        }
        return view('volunteering.volunteering');

    }
}
