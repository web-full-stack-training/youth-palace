<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('send-message', [\App\Http\Controllers\ContactController::class, 'saveContactMessage'])->name('send.message');

//admin
Route::post('admin/delete-media', [\App\Http\Controllers\Admin\MediaController::class, 'deleteMedia'])->name('delete.media');
