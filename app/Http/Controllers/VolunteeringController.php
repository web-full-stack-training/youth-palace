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

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('image')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->image->store('volunteering', 'public');
            // Store the record, using the new file hashname which will be it's new filename identity.
            $volunteering = new Volunteering([
                "full_name" => $request->get('full_name'),
                "image_path" => $request->image->hashName()
            ]);
            $volunteering->save(); // Finally, save the record.
        }
/*        return view('volunteerings.create');*/

    }
}
