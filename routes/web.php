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


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::redirect('admin', 'admin/login');
Route::get('admin/login', [\App\Http\Controllers\Admin\AdminAuthController::class, 'showLoginPage'])->name('admin.login');
Route::post('admin/login', [\App\Http\Controllers\Admin\AdminAuthController::class, 'login'])->name('admin.login.post');
Route::get('admin/logout', [\App\Http\Controllers\Admin\AdminAuthController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    // Admin Dashboard
    Route::get('dashboard',[\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('account',[\App\Http\Controllers\Admin\AccountController::class, 'index'])->name('account');
    Route::get('account/edit',[\App\Http\Controllers\Admin\AccountController::class, 'showEditAccountForm'])->name('show.edit.account');
    Route::post('account/edit',[\App\Http\Controllers\Admin\AccountController::class, 'editAccount'])->name('edit.account');
    Route::get('special-programs',[\App\Http\Controllers\Admin\SpecialProgramsController::class, 'index'])->name('special.programs');
    Route::get('clubs',[\App\Http\Controllers\Admin\ClubsController::class, 'index'])->name('clubs');
    Route::get('collaboration',[\App\Http\Controllers\Admin\CollaborationController::class, 'index'])->name('collaboration');
    Route::get('volunteering',[\App\Http\Controllers\Admin\VolunteeringController::class, 'index'])->name('volunteering');
    Route::get('media',[\App\Http\Controllers\Admin\MediaController::class, 'index'])->name('media');
    Route::get('feedback',[\App\Http\Controllers\Admin\FeedbackController::class, 'index'])->name('feedback');
    Route::get('about-us',[\App\Http\Controllers\Admin\AboutAsController::class, 'index'])->name('about.us');
    Route::get('contacts',[\App\Http\Controllers\Admin\ContactsController::class, 'index'])->name('contacts');
});
