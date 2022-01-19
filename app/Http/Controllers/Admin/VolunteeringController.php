<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HalfRequest;
use App\Models\Volunteering;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VolunteeringController extends Controller
{
    public function index()
    {
        $volunteering = Volunteering::all();
        return view('admin.volunteering.show', compact('volunteering'));
    }
    public function showCreateForm()
    {
        return view('admin.volunteering.create');
    }
    public function addVolunteeringInfo(HalfRequest $request): \Illuminate\Http\RedirectResponse
    {
        $title = $request->input('title');
        $file = $request->file('image');

            $directory = public_path('storage/uploads/volunteering/');
            File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
            $imagePath = $file->move($directory, $file->getClientOriginalName());
            $savedImagePath = 'storage/uploads/volunteering/' . $file->getClientOriginalName();

            Volunteering::create([
                'full_name' => $title,
                'image_path' => $savedImagePath
            ]);

        return redirect()->route('volunteering');
    }
    public function showEditForm($id)
    {
        $volunteeringData = Volunteering::find($id);
        return view('admin.volunteering.edit', compact('volunteeringData'));
    }
    public function editVolunteeringInfo(HalfRequest $request): \Illuminate\Http\RedirectResponse
    {
        $title = $request->input('title');
        $file = $request->file('image');
        $id = $request->input('volunteering-id');

        $directory = public_path('storage/uploads/volunteering/');
        File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
        $imagePath = $file->move($directory, $file->getClientOriginalName());
        $savedImagePath = 'storage/uploads/volunteering/' . $file->getClientOriginalName();

        Volunteering::where('id', $id)->update(
            [
                'full_name' => $title,
                'image_path' => $savedImagePath
            ]
        );

        return redirect()->route('volunteering');
    }
    public function showVolunteeringPage() {
        return view('volunteering.volunteering');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function deleteVolunteering(Request $request): JsonResponse
    {
        $volunteeringId = $request->input('volunteering_id');
        Volunteering::where('id', $volunteeringId)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Volunteering deleted successfully'
        ]);
    }
}
