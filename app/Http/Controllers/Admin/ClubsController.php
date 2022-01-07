<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use function GuzzleHttp\Promise\all;

class ClubsController extends Controller
{
    public function index()
    {
        $clubs = Clubs::all();
        return view('admin.clubs.show', compact('clubs'));
    }
    public function showCreateForm()
    {
        return view('admin.clubs.create');
    }
    public function addClubsInfo(Request $request): \Illuminate\Http\RedirectResponse
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('image');

        $directory = public_path('storage/uploads/clubs/');
        File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
        $imagePath = $file->move($directory, $file->getClientOriginalName());
        $savedImagePath = 'storage/uploads/clubs/' . $file->getClientOriginalName();

        Clubs::create([
            'title' => $title,
            'description' => $description,
            'img_path' => $savedImagePath
        ]);
        return redirect()->route('clubs');
    }
    public function showEditForm($id)
    {
        $clubsData = Clubs::find($id);
        return view('admin.clubs.edit', compact('clubsData'));
    }
    public function editClubsInfo(Request $request): \Illuminate\Http\RedirectResponse
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('image');
        $directory = public_path('storage/uploads/clubs/');
        File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
        $imagePath = $file->move($directory, $file->getClientOriginalName());
        $savedImagePath = 'storage/uploads/clubs/' . $file->getClientOriginalName();
        $id = $request->input('clubs-id');

        Clubs::where('id', $id)->update(
            [
                'title' => $title,
                'description' => $description,
                'img_path' => $savedImagePath
            ]
        );
        return redirect()->route('clubs');
    }
    public function showClubsPage() {
        return view('clubs.clubs');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function deleteClubs(Request $request): JsonResponse
    {
        $clubsId = $request->input('clubs_id');
        Clubs::where('id', $clubsId)->delete();

        return response()->json([
            'message' => 'Clubs deleted successfully'
        ]);
    }
}
