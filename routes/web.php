<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SobscriptionController;
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

Route::get('/category',[CategoryController::class ,'list'])->name('category.list');
Route::get('/category/{slug}',[CategoryController::class ,'single'])->name('category.single');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['isverify','auth'])->name('dashboard');

Route::get('/admin/course/create', [CourseController::class,'create'])->middleware('auth')->name('course.create');
Route::post('/admin/course/create', [CourseController::class,'store'])->middleware('auth')->name('course.store');
Route::get('/admin/course/edit/{id}', [CourseController::class,'edit'])->middleware('auth')->name('course.edit');
Route::put('/admin/course/update/{id}', [CourseController::class,'update'])->middleware('auth')->name('course.update');
Route::delete('/admin/course/delete/{id}', [CourseController::class,'destroy'])->middleware('auth')->name('course.delete');

Route::get('admin/episode/create/{id}', [EpisodeController::class, 'create'])->middleware('auth')->name('episode.create');
Route::post('admin/episode/create/{id}', [EpisodeController::class, 'store'])->middleware('auth')->name('episode.store');
Route::get('admin/episode/edit/{slug}', [EpisodeController::class, 'edit'])->middleware('auth')->name('episode.edit');
Route::put('admin/episode/update/{slug}', [EpisodeController::class, 'update'])->middleware('auth')->name('episode.update');
Route::delete('admin/episode/delete/{slug}', [EpisodeController::class, 'destroy'])->middleware('auth')->name('episode.delete');

Route::get('admin/category',[CategoryController::class ,'index'])->middleware('auth')->name('category.index');
Route::post('admin/category/store',[CategoryController::class ,'store'])->middleware('auth')->name('category.store');
Route::get('admin/category/edit/{id}',[CategoryController::class ,'edit'])->middleware('auth')->name('category.edit');
Route::put('admin/category/update/{id}',[CategoryController::class ,'update'])->middleware('auth')->name('category.update');
Route::delete('admin/category/delete/{id}',[CategoryController::class ,'delete'])->middleware('auth')->name('category.destroy');

Route::get('admin/subscription/create',[SobscriptionController::class ,'create'])->middleware('auth')->name('subscription.index');
Route::post('admin/subscription/store',[SobscriptionController::class ,'store'])->middleware('auth')->name('subscription.store');
Route::get('admin/subscription/edit/{id}',[SobscriptionController::class ,'edit'])->middleware('auth')->name('subscription.edit');
Route::put('admin/subscription/update/{id}',[SobscriptionController::class ,'update'])->middleware('auth')->name('subscription.update');
Route::delete('admin/subscription/delete/{id}',[SobscriptionController::class ,'delete'])->middleware('auth')->name('subscription.destroy');

require __DIR__.'/auth.php';
