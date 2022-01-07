<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collaborations;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CollaborationController extends Controller
{
    public function index()
    {
        $collaboration = Collaborations::all();
        return view('admin.collaboration.show', compact('collaboration'));
    }
    public function showCreateForm()
    {
        return view('admin.collaboration.create');
    }
    public function addCollaborationInfo(Request $request): \Illuminate\Http\RedirectResponse
    {
        $title = $request->input('title');
        $file = $request->file('image');

        if (!is_null($title)) {
            if (!is_null($file)) {
                $directory = public_path('storage/uploads/collaboration/');
                File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
                $imagePath = $file->move($directory, $file->getClientOriginalName());
                $savedImagePath = 'storage/uploads/collaboration/' . $file->getClientOriginalName();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        Collaborations::create([
            'name' => $title,
            'img_path' => $savedImagePath
        ]);
        return redirect()->route('collaboration');
    }
    public function showEditForm($id)
    {
        $collaborationData = Collaborations::find($id);
        return view('admin.collaboration.edit', compact('collaborationData'));
    }
    public function editCollaborationInfo(Request $request): \Illuminate\Http\RedirectResponse
    {
        $title = $request->input('title');
        $file = $request->file('image');
        $id = $request->input('collaboration-id');

        if (!is_null($title)) {
            if (!is_null($file)) {
                $directory = public_path('storage/uploads/collaboration/');
                File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
                $imagePath = $file->move($directory, $file->getClientOriginalName());
                $savedImagePath = 'storage/uploads/collaboration/' . $file->getClientOriginalName();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        Collaborations::where('id', $id)->update(
            [
                'name' => $title,
                'img_path' => $savedImagePath
            ]
        );
        return redirect()->route('collaboration');
    }
    public function showCollaborationPage() {
        return view('collaboration.collaboration');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */

    public function deleteCollaboration(Request $request): JsonResponse
    {
        $collaborationId = $request->input('collaboration_id');
        Collaborations::where('id', $collaborationId)->delete();

        return response()->json([
            'message' => 'Collaboration deleted successfully'
        ]);
    }
}
