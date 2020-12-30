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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('student',App\Http\Controllers\Student\StudentController::class)->name('student')->middleware('auth');

Route::middleware('auth')->prefix('student')->group(function (){
//    Route::resource('profile', \App\Http\Controllers\Student\StudentProfileController::class);
    Route::get('/profile/create', [\App\Http\Controllers\Student\StudentProfileController::class, 'create'])->name('profile.create');
    Route::post('/profile/store', [\App\Http\Controllers\Student\StudentProfileController::class, 'store'])->name('profile.store');
});
