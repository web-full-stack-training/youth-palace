<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Volunteering;
use Illuminate\Http\Request;

class VolunteeringController extends Controller
{
    public function index()
    {
        $volunteering = Volunteering::first();
        return view('admin.volunteering.show',  compact('volunteering'));
    }
    public function showCreateForm()
    {
        return view('admin.volunteering.create');
    }
    public function addVolunteeringInfo(Request $request)
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

            $request->input('image')->store('/storage/uploads/volunteering', 'img.png');
            $imagePath = '/storage/uploads/volunteering' . $image->getClientOriginalName();
            Storage::disk('public')->put($imagePath, $image->getRealPath());
            $description= $request->input('description');
            $email = $request->input('email');

        }

        $volunteerings = new Volunteering([
            "full_name" => $fullName,
            "image_path" => $image,
            'description' => $description,
            'email' => $email
        ]);

        $volunteerings->save();

        return view('volunteering.volunteering');
    }
    public function showEditForm()
    {
        return view('admin.volunteering.edit');
    }

    public function editVolunteeringInfo(Request $request)
    {
        $fullName = $request->input('full_name');
        $image = $request->input('image');
        $description = $request->input('description');
        $email = $request->input('email');
    }
}
