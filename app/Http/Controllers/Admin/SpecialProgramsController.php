<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SpecialProgram;
use App\Models\SpecialProgramImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SpecialProgramsController extends Controller
{
    public function index()
    {
        $specialProgram = SpecialProgram::first();

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
        $file = $request->file('image');

        $directory = public_path('storage/uploads/special-programs/');
        File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
        $imagePath = $file->move($directory, $file->getClientOriginalName());
        $savedImagePath = '/storage/uploads/special-programs/' . $file->getClientOriginalName();

        SpecialProgram::create([
            'title' => $title,
            'description' => $description,
            'image_path' => $savedImagePath
        ]);
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



}
