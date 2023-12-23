<?php


use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\AdminLangController;
use \App\Http\Controllers\Backend\ProfileController;
use \App\Http\Controllers\Backend\SliderController;
use \App\Http\Controllers\Backend\AdminController;
use \App\Http\Controllers\Backend\UserController;
use \App\Http\Controllers\Backend\RoleController;
use \App\Http\Controllers\Backend\PermissionController;
use \App\Http\Controllers\Backend\LanguageController;
use \App\Http\Controllers\Backend\SettingController;
use \App\Http\Controllers\Backend\DotEnvController;
use \App\Http\Controllers\Backend\LanguageTranslationController;
use \App\Http\Controllers\Backend\LogController;
use \App\Http\Controllers\Backend\NewsController;
use \App\Http\Controllers\Backend\DonationController;
use \App\Http\Controllers\Backend\ContactController;
use \App\Http\Controllers\Backend\VolunteerController;

Route::fallback(function () {
    return view('backend.errors.404');
});

Route::middleware(['guest:admin'])->group(function () {
    Route::get('/login-admin', [AuthController::class, 'loginForm'])->name('login.form');
    Route::post('/login-admin', [AuthController::class, 'login'])->name('login');
});

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::patch('/lang', AdminLangController::class)->name('lang');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/profile', [ProfileController::class, 'profileForm'])->name('profile.form');
    Route::patch('/profile', [ProfileController::class, 'profile'])->name('profile');

    Route::resource('/admins', AdminController::class)->except('show');
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);

    Route::resource('/languages', LanguageController::class)->except('show');
    Route::resource('/settings', SettingController::class);

    // sliders
    Route::resource('/sliders', SliderController::class);

    //news
    Route::resource('/news', NewsController::class);

    //donations
    Route::resource('/donations', DonationController::class);

    //contacts
    Route::resource('/contacts', ContactController::class);

    //volunteers
    Route::resource('/volunteers',  VolunteerController::class);

    Route::post('/documents/{document}/delete', [\App\Http\Controllers\Backend\DocumentsController::class, 'deleteDocument'])->name('delete.document');


    //isDeveloper
    Route::group(['middleware' => 'isDeveloper'], function () {
        Route::resource('permissions', PermissionController::class);

        Route::resource('logs', LogController::class)->only(['index', 'destroy']);
        Route::get('/system', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('logs.system');

        Route::get('/env', [DotEnvController::class, 'overview'])->name('env.overview');
        Route::resource('translations', LanguageTranslationController::class);
    });

});


