<?php

use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\HistoryController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TestController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\FileController;
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

Route::get('/course/{id}', [CourseController::class ,'index']);

Route::get('/admin',function () {
    return view('layouts.admin');
});
Route::get('/dashboard',function () {
    return view('layouts.admin');
})->name('dashboard');



require __DIR__ . '/auth.php';
