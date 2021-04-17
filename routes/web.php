<?php

use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\HistoryController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TestController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\FileController;

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
    return view('index');
})->name('home');

Route::get('/invoice', function () {
    return view('invoice');
})->name('invoice');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::group(['middleware' => 'can:admin dashboard'], function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('dashboard');
    });
});

require __DIR__ . '/auth.php';
