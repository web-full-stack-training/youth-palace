<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collaborations;
use Illuminate\Http\Request;

class CollaborationController extends Controller
{
    public function index()
    {
        return view('admin.collaboration.show');
    }

    public function addOrUpdateCollaboration(Request $request)
    {
        $collaborationId = $request->input('collaboration_id');
        $name = $request->input('name');
        $description = $request->input('description');
        $websiteUrl = $request->input('website_url');
        $socialMedias = $request->input('social_medias');
        $images = $request->file('image');

        $imagePath = '';

        Collaborations::updateOrCreate(
            [
                'id' => $collaborationId
            ],
            [
                'name' => $name,
                'description' => $description,
                'website_url' => $websiteUrl,
                'img_path' => $imagePath,
                'social_medias' => json_encode($socialMedias)
            ]
        );
    }

    public function deleteCollaboration(Request $request)
    {

    }
}
