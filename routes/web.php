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

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
