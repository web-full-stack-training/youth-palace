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
            $file->move($directory, $file->getClientOriginalName());
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
        public function showEditForm($id)
    {
        $specialProgramData = SpecialProgram::find($id);
        return view('admin.special-programs.edit',compact('specialProgramData'));
    }

        public function editSpecialProgramInfo(Request $request)
    {
        $id = $request->input('specialPrograms-id');
        $title = $request->input('title');
        $description = $request->input('description');
        $files = $request->file('images');
        $savedImagePath = [];

        $oldImagePaths = SpecialProgramImage::where('special_programs_id', $id)->pluck('image_path');


        foreach ($oldImagePaths as $path) {
            @unlink(public_path() . $path);
        }

        $directory = public_path('storage/uploads/special-programs/');
        File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);

        foreach ($files as $file) {
            $file->move($directory, $file->getClientOriginalName());
            $savedImagePath[] = '/storage/uploads/special-programs/' . $file->getClientOriginalName();
        }

        SpecialProgram::where('id',$id)->update(
            [
                'title' => $title,
                'description' => $description,
            ]
        );

        SpecialProgramImage::where('special_programs_id', $id)->delete();

        foreach ($savedImagePath as $path) {
            SpecialProgramImage::create([
                'special_programs_id' => $id,
                'image_path' => $path
            ]);
        }

        return redirect()->route('special.programs');
    }
    public function showSpecialProgramPage() {
        return view('special-programs.special-programs');
    }
    public function deleteSpecialProgram(Request $request): JsonResponse
    {
        $specialProgramId = $request->input('specialPrograms_id');

        SpecialProgram::where('id', $specialProgramId)->delete();
        SpecialProgramImage::where('special_programs_id', $specialProgramId)->delete();

        return response()->json([
            'message' => 'Special Program deleted successfully'
        ]);
    }


}
