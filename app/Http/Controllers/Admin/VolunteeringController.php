<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function addVolunteeringInfo(Request $request): \Illuminate\Http\RedirectResponse
    {
        $type = ['png', 'jpeg', 'jpg'];
        $title = $request->input('title');
        $file = $request->file('image');

        if (!is_null($title)) {
            if (!is_null($file)) {
                if (in_array($file->getClientOriginalExtension(), $type)) {
                    $directory = public_path('storage/uploads/media/');
                    File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
                    $imagePath = $file->move($directory, $file->getClientOriginalName());
                    $savedImagePath = 'storage/uploads/media/' . $file->getClientOriginalName();

                    Volunteering::create([
                        'full_name' => $title,
                        'image_path' => $savedImagePath
                    ]);
                } else {
                    return redirect()->back();
                }
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        return redirect()->route('volunteering');
    }
    public function showEditForm($id)
    {
        $volunteeringData = Volunteering::find($id);
        return view('admin.volunteering.edit', compact('volunteeringData'));
    }
    public function editVolunteeringInfo(Request $request): \Illuminate\Http\RedirectResponse
    {
        $type = ['png', 'jpeg', 'jpg'];
        $title = $request->input('title');
        $file = $request->file('image');
        $id = $request->input('volunteering-id');

        if (!is_null($title)) {
            if (!is_null($file)) {
                if (in_array($file->getClientOriginalExtension(), $type)) {
                    $directory = public_path('storage/uploads/media/');
                    File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
                    $imagePath = $file->move($directory, $file->getClientOriginalName());
                    $savedImagePath = 'storage/uploads/media/' . $file->getClientOriginalName();

                    Volunteering::where('id', $id)->update(
                        [
                            'full_name' => $title,
                            'image_path' => $savedImagePath
                        ]
                    );
                } else {
                    return redirect()->back();
                }
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

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
            'message' => 'Volunteering deleted successfully'
        ]);
    }
}
