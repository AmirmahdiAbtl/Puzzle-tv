<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
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

Route::get('/', [HomeController::class ,'index'])->name('home');
Route::get('/course/{slug}',[CourseController::class ,'index'])->name('course');
Route::get('/course/{slug}/{seasonId}/{episode}',[CourseController::class ,'player'])->name('player');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['isverify'])->name('dashboard');

Route::get('/admin/course/create', [CourseController::class,'create'])->middleware('auth')->name('course.create');
Route::post('/admin/course/create', [CourseController::class,'store'])->middleware('auth')->name('course.store');

Route::get('/admin/course/edit/{id}', [CourseController::class,'edit'])->middleware('auth')->name('course.edit');
Route::put('/admin/course/update/{id}', [CourseController::class,'update'])->middleware('auth')->name('course.update');

Route::delete('/admin/course/delete/{id}', [CourseController::class,'delete'])->middleware('auth')->name('course.delete');


require __DIR__.'/auth.php';
