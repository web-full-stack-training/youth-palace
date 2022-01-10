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

        if (!is_null($title)) {
            if (!is_null($description)) {
                if (!is_null($file)) {
                    $directory = public_path('storage/uploads/about/');
                    File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
                    $imagePath = $file->move($directory, $file->getClientOriginalName());
                    $savedImagePath = '/storage/uploads/about/' . $file->getClientOriginalName();

                    About::create([
                        'title' => $title,
                        'description' => $description,
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

        return redirect()->route('about.us');
    }

    public function showEditForm()
    {
        $aboutData = About::first();
        return view('admin.about.edit', compact('aboutData'));
    }

    public function editAboutInfo(Request $request)
    {
        $type = ['png', 'jpeg', 'jpg'];
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('image');

        if (!is_null($title)) {
            if (!is_null($description)) {
                if (!is_null($file)) {
                    if (in_array($file->getClientOriginalExtension(), $type)) {
                        $directory = public_path('storage/uploads/about/');
                        File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
                        $imagePath = $file->move($directory, $file->getClientOriginalName());
                        $savedImagePath = '/storage/uploads/about/' . $file->getClientOriginalName();

                        About::first()->update(
                            [
                                'title' => $title,
                                'description' => $description,
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
        } else {
            return redirect()->back();
        }

        return redirect()->route('about.us');
    }
}
