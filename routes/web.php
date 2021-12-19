<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/send/email', 'ContactController@emails');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/clubs', [\App\Http\Controllers\ClubsController::class, 'index']);
Route::get('/collaboration', [\App\Http\Controllers\CollaborationController::class, 'index']);
Route::get('/feedback', [\App\Http\Controllers\FeedbackController::class, 'index']);
Route::get('/media', [\App\Http\Controllers\MediaController::class, 'index']);
Route::get('/special-programs', [\App\Http\Controllers\SpecialProgramsController::class, 'index']);
Route::get('/volunteering', [\App\Http\Controllers\VolunteeringController::class, 'index']);
Route::get('/admin-login', [\App\Http\Controllers\AdminLoginController::class, 'index']);

Route::get('/lang', [LocalizationController::class, "index"]);
Route::get('/', [LocalizationController::class, "lang_change"])->name('LangChange');

