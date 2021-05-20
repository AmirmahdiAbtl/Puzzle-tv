<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubscriptionController;

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

Route::get('/admin/category/create', [CategoryController::class,'create'])->middleware('auth')->name('category.create');

Route::post('/admin/category/create', [CategoryController::class,'store'])->middleware('auth')->name('category.store');

Route::delete('/admin/category/delete/{id}', [CategoryController::class,'delete'])->middleware('auth')->name('category.delete');

Route::post('/admin/course/add_category/{id}', [CourseController::class,'add_category'])->middleware('auth')->name('course.add_category');

// Route::get('/admin/course/{id}/episode/create', [EpisodeController::class,'create'])->middleware('auth')->name('episode.create');

// Route::post('/admin/course/{id}/episode/create', [EpisodeController::class,'store'])->middleware('auth')->name('episode.store');

// Route::delete('/admin/course/{id}/episode/delete/{id}', [EpisodeController::class,'delete'])->middleware('auth')->name('episode.delete');

Route::get('/admin/subscription/create', [SubscriptionController::class,'create'])->middleware('auth')->name('subscription.create');

Route::post('/admin/subscription/create', [SubscriptionController::class,'store'])->middleware('auth')->name('subscription.store');

Route::get('/admin/subscription/edit/{id}', [SubscriptionController::class,'edit'])->middleware('auth')->name('subscription.edit');

Route::put('/admin/subscription/update/{id}', [SubscriptionController::class,'update'])->middleware('auth')->name('subscription.update');

Route::delete('/admin/subscription/delete/{id}', [SubscriptionController::class,'delete'])->middleware('auth')->name('subscription.delete');

Route::get('/admin/payment/create', [PaymentController::class,'create'])->middleware('auth')->name('payment.create');

Route::post('/admin/payment/create', [PaymentController::class,'store'])->middleware('auth')->name('payment.store');

require __DIR__.'/auth.php';
