<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutAsController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about.show', compact('about'));
    }

    public function showCreateForm()
    {
        return view('admin.about.create');
    }

    public function addAboutInfo(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('image');

        $directory = public_path('storage/uploads/about/');
        File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
        $imagePath = $file->move($directory, $file->getClientOriginalName());
        $savedImagePath = '/storage/uploads/about/' . $file->getClientOriginalName();

        About::create([
            'title' => $title,
            'description' => $description,
            'image_path' => $savedImagePath
        ]);
    }

    public function showEditForm()
    {
        return view('admin.about.edit');
    }

    public function editAboutInfo(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('image');
    }
}
