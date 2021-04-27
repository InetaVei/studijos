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

Route::resource('lecture', App\Http\Controllers\LectureController::class);
Route::resource('student', App\Http\Controllers\StudentController::class);
Route::resource('grades', App\Http\Controllers\GradeController::class);
Route::get('students/{id}/about', [App\Http\Controllers\StudentController::class, 'about'])->name('students.about');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
