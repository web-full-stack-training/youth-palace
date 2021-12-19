<?php

use Illuminate\Support\Facades\Route;

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


Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
    // Admin Dashboard
    Route::get('dashboard','AdminController@dashboard')->name('dashboard');
});

//Route::get('/admin-login', [\App\Http\Controllers\AdminLoginController::class, 'index']);




