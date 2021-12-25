<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MediaController extends Controller
{
    public function index()
    {
        $activeInfoCount = count(Media::all());
        return view('admin.media.show', compact('activeInfoCount'));
    }
    public function showCreateForm()
    {
        return view('admin.media.create');
    }
    public function addMediaInfo(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('video');

        $directory = public_path('storage/uploads/media/');
        File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
        $imagePath = $file->move($directory, $file->getClientOriginalName());
        $savedImagePath = 'storage/uploads/media/' . $file->getClientOriginalName();

        Media::create([
            'title' => $title,
            'description' => $description,
            'video_path' => $savedImagePath
        ]);
    }
    public function showEditForm()
    {
        return view('admin.media.edit');
    }
    public function editMediaInfo(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('video');
    }
    public function showMediaPage() {
        return view('media.media');
    }
}
