<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FullRequest;
use App\Models\OurWork;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OurWorkController extends Controller
{
    public function index()
    {
        $ourWorks = OurWork::orderBy('id', 'DESC')->take(6)->get();
        return view('admin.our-works.show', compact('ourWorks'));
    }

    public function showCreateForm()
    {
        return view('admin.our-works.create');
    }

    public function addOurWorksInfo(FullRequest $request): \Illuminate\Http\RedirectResponse
    {
//        $val = $request->validate();
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('image');

            $directory = public_path('storage/uploads/our-works/');
            File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
            $imagePath = $file->move($directory, $file->getClientOriginalName());
            $savedImagePath = 'storage/uploads/our-works/' . $file->getClientOriginalName();

            OurWork::create([
                'title' => $title,
                'description' => $description,
                'img_path' => $savedImagePath
            ]);

        return redirect()->route('our.works');
    }

    public function showEditForm($id)
    {
        $ourWorksData = OurWork::find($id);
        return view('admin.our-works.edit', compact('ourWorksData'));
    }

    public function editOurWorksInfo(FullRequest $request): \Illuminate\Http\RedirectResponse
    {
//        $val = $request->validate();
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('image');
        $id = $request->input('our-works-id');

            $directory = public_path('storage/uploads/our-works/');
            File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
            $imagePath = $file->move($directory, $file->getClientOriginalName());
            $savedImagePath = 'storage/uploads/our-works/' . $file->getClientOriginalName();

            OurWork::where('id', $id)->update(
                [
                    'title' => $title,
                    'description' => $description,
                    'img_path' => $savedImagePath
                ]
            );

        return redirect()->route('our.works');
    }
    public function showOurWorksPage() {
        return view('home.home');
    }


    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function deleteOurWorks(Request $request): JsonResponse
    {
        $ourWorksId = $request->input('our_works_id');
        OurWork::where('id', $ourWorksId)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Our works deleted successfully'
        ]);
    }
}
