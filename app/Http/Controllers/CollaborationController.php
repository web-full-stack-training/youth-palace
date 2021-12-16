<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollaborationController extends Controller
{
    public function index() {
        $collaboration = [
            [
                'path' => 'images/images-modified.png',
                'name' => 'J. Martin',
            ],
        [
            'path' => 'images/images-modified.png',
            'name' => 'J. Martin',
        ],
        [
            'path' => 'images/images-modified.png',
            'name' => 'J. Martin',
        ],
            [
                'path' => 'images/images-modified.png',
                'name' => 'J. Martin',
            ],
            [
                'path' => 'images/images-modified.png',
                'name' => 'J. Martin',
            ],
            [
                'path' => 'images/images-modified.png',
                'name' => 'J. Martin',
            ],
            [
                'path' => 'images/images-modified.png',
                'name' => 'J. Martin',
            ],
            [
                'path' => 'images/images-modified.png',
                'name' => 'J. Martin',
            ],
            [
                'path' => 'images/images-modified.png',
                'name' => 'J. Martin',
            ],
            [
                'path' => 'images/images-modified.png',
                'name' => 'J. Martin',
            ],
            [
                'path' => 'images/images-modified.png',
                'name' => 'J. Martin',
            ],
            [
                'path' => 'images/images-modified.png',
                'name' => 'J. Martin',
            ]
        ];
        return view('collaboration.collaboration', compact('collaboration'));
    }
}
