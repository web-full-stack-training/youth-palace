<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SpecialProgram;
use App\Models\SpecialProgramImage;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SpecialProgramsController extends Controller
{
    public function index()
    {
        $specialProgram = SpecialProgram::all();

        return view('admin.special-programs.show', compact('specialProgram'));
    }
    public function showCreateForm()
    {
        return view('admin.special-programs.create');
    }
    public function addSpecialProgramInfo(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $files = $request->file('images');
        $savedImagePath = [];

        $directory = public_path('storage/uploads/special-programs/');
        File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);

        foreach ($files as $file) {
            $imagePath = $file->move($directory, $file->getClientOriginalName());
            $savedImagePath[] = '/storage/uploads/special-programs/' . $file->getClientOriginalName();
        }


        $program = SpecialProgram::create([
            'title' => $title,
            'description' => $description
        ]);

        foreach ($savedImagePath as $path) {
            SpecialProgramImage::create([
                'special_programs_id' => $program->id,
                'image_path' => $path
            ]);
        }


        return redirect()->route('special.programs');
    }
        public function showEditForm()
    {
        return view('admin.special-programs.edit');
    }

        public function editSpecialProgramInfo(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('image');
    }
    public function deleteSpecialProgram(Request $request): JsonResponse
    {
        $mediaId = $request->input('media_id');
        SpecialProgram::where('id', $mediaId)->delete();

        return response()->json([
            'message' => 'Special Program deleted successfully'
        ]);
    }


}
