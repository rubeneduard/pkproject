<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('auth.login');


Route::get('/add-students', function () {
    return view('add-student');
})->name('add-students');



Route::post('/save/student', [StudentController::class , 'store'])->name('save_students');
Route::get('/googleAutocomplete', [GoogleController::class, 'index'])->name('googleAutocomplete');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
