<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use function GuzzleHttp\Promise\all;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::all();
        return view('admin.media.show', compact('media'));
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

        if (!is_null($title)) {
            if (!is_null($description)) {
                if (!is_null($file)) {
                    $directory = public_path('storage/uploads/media/');
                    File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
                    $imagePath = $file->move($directory, $file->getClientOriginalName());
                    $savedImagePath = 'storage/uploads/media/' . $file->getClientOriginalName();

                    Media::create([
                        'title' => $title,
                        'description' => $description,
                        'video_path' => $savedImagePath
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

        return redirect()->route('media');
    }
    public function showEditForm($id)
    {
        $mediaData = Media::find($id);
        return view('admin.media.edit', compact('mediaData'));
    }
    public function editMediaInfo(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $file = $request->file('video');
        $id = $request->input('media-id');

        if (!is_null($title)) {
            if (!is_null($description)) {
                if (!is_null($file)) {
                    $directory = public_path('storage/uploads/media/');
                    File::isDirectory($directory) or File::makeDirectory($directory, 0777, true, true);
                    $imagePath = $file->move($directory, $file->getClientOriginalName());
                    $savedImagePath = 'storage/uploads/media/' . $file->getClientOriginalName();

                    Media::where('id', $id)->update(
                        [
                            'title' => $title,
                            'description' => $description,
                            'video_path' => $savedImagePath
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

        return redirect()->route('media');
    }
    public function showMediaPage() {
        return view('media.media');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function deleteMedia(Request $request): JsonResponse
    {
        $mediaId = $request->input('media_id');
        Media::where('id', $mediaId)->delete();

        return response()->json([
            'message' => 'Media deleted successfully'
        ]);
    }
}
