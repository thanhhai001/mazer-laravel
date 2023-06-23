<?php

use App\Http\Controllers\Admin\CodeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PatternController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::controller(MemberController::class)->group(function () {
        Route::get('/members', 'index')->name('member-list');
        Route::get('/members/show/{id?}', 'show')->name('member-show');
        Route::post('/members/create', 'create')->name('member-create');
        Route::post('/members/{id}', 'update')->name('member-update');
        Route::post('/members/delete/{id}', 'delete')->name('member-delete');
    });

    Route::controller(PatternController::class)->group(function () {
        Route::get('/patterns', 'index')->name('pattern-list');
        Route::get('/patterns/show/{id?}', 'show')->name('pattern-show');
        Route::post('/patterns/create', 'create')->name('pattern-create');
        Route::post('/patterns/{id}', 'update')->name('pattern-update');
        Route::post('/patterns/delete/{id}', 'delete')->name('pattern-delete');
    });

    Route::controller(CodeController::class)->group(function () {
        Route::get('/codes', 'index')->name('code-list');
        Route::post('/codes/generate', 'create')->name('code-generate');
        Route::post('/codes/activated/{key}', 'delete')->name('code-activated');
    });

    // Route::controller(ProfileController::class)->group(function () {
    //     Route::get('/profile', 'show')->name('profile-show');
    //     Route::post('/profile', 'update')->name('profile-update');
    // });
});
