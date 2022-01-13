<?php

namespace App\Http\Controllers;

use App\Models\Volunteering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $fullName = $request->input('full_name');

        if ($request->hasFile('image')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png'
            ]);

            $image = $request->input('image');

            $request->input('image')->store('/storage/uploads/volunteering', 'public');
            $imagePath = '/storage/uploads/volunteering' . $image->getClientOriginalName();
            Storage::disk('public')->put($imagePath, $image->getRealPath());


        }

        $volunteering = new Volunteering([
            "full_name" => $fullName,
            "image_path" => '',
            'description' => '',
            'email' => ''
        ]);

        $volunteering->save();

        return view('volunteering.volunteering');
    }
}
