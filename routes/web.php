<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController as UserAdminController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\User\UserController;

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

Route::get('/course/{slug}',[CourseController::class ,'show'])->name('course');

Route::get('/course/{slug}/{seasonId}/{episode}',[CourseController::class ,'player'])->name('player');

Route::get('/category/{slug}',[CategoryController::class ,'show'])->name('category.single');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['isverify','auth'])->name('dashboard');

Route::get('/admin/subscription/index', [SubscriptionController::class,'index'])->middleware('auth')->name('subscription.index');
Route::get('/admin/subscription/create', [SubscriptionController::class,'create'])->middleware('auth')->name('subscription.create');
Route::post('/admin/subscription/create', [SubscriptionController::class,'store'])->middleware('auth')->name('subscription.store');
Route::get('/admin/subscription/edit/{id}', [SubscriptionController::class,'edit'])->middleware('auth')->name('subscription.edit');
Route::put('/admin/subscription/update/{id}', [SubscriptionController::class,'update'])->middleware('auth')->name('subscription.update');
Route::delete('/admin/subscription/delete/{id}', [SubscriptionController::class,'delete'])->middleware('auth')->name('subscription.delete');
Route::get('/admin/payment/create', [PaymentController::class,'create'])->middleware('auth')->name('payment.create');
Route::post('/admin/payment/create', [PaymentController::class,'store'])->middleware('auth')->name('payment.store');
Route::get('/admin/payment/index', [PaymentController::class,'index'])->middleware('auth')->name('payment.index');

Route::get('admin/episode/create/{id}', [EpisodeController::class, 'create'])->middleware('auth')->name('episode.create');
Route::post('admin/episode/create/{id}', [EpisodeController::class, 'store'])->middleware('auth')->name('episode.store');
Route::get('admin/episode/edit/{slug}', [EpisodeController::class, 'edit'])->middleware('auth')->name('episode.edit');
Route::put('admin/episode/update/{slug}', [EpisodeController::class, 'update'])->middleware('auth')->name('episode.update');
Route::delete('admin/episode/delete/{slug}', [EpisodeController::class, 'destroy'])->middleware('auth')->name('episode.delete');

Route::get('admin/course/episodes/{id}',[EpisodeController::class, 'index'])->middleware('auth')->name('episode.index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::group(['middleware' => 'can:permission CRUD'], function () {
        Route::resource('permission', PermissionController::class);
        Route::resource('role', RoleController::class);
    });

    Route::group(['middleware' => 'can:user CRUD'], function () {
        Route::resource('user', UserAdminController::class);
    });

    Route::group(['middleware' => 'can:category CRUD'], function () {
        Route::resource('category', CategoryController::class);
        // Route::get('admin/category',[CategoryController::class ,'index'])->middleware('auth')->name('category.create');
        // Route::post('admin/category/store',[CategoryController::class ,'store'])->middleware('auth')->name('category.store');
        // Route::get('admin/category/edit/{id}',[CategoryController::class ,'edit'])->middleware('auth')->name('category.edit');
        // Route::put('admin/category/update/{id}',[CategoryController::class ,'update'])->middleware('auth')->name('category.update');
        // Route::post('admin/category/delete/{id}',[CategoryController::class ,'delete'])->middleware('auth')->name('category.destroy');
    });

    Route::group(['middleware' => 'can:course CRUD'], function () {
        Route::resource('course', CourseController::class);

        // Route::get('/admin/course', [CourseController::class,'index'])->middleware('auth')->name('course.index');
        // Route::get('/admin/course/create', [CourseController::class,'create'])->middleware('auth')->name('course.create');
        // Route::post('/admin/course/create', [CourseController::class,'store'])->middleware('auth')->name('course.store');
        // Route::get('/admin/course/edit/{id}', [CourseController::class,'edit'])->middleware('auth')->name('course.edit');
        // Route::put('/admin/course/update/{id}', [CourseController::class,'update'])->middleware('auth')->name('course.update');
        // Route::delete('/admin/course/delete/{id}', [CourseController::class,'delete'])->middleware('auth')->name('course.delete');
    });


    
});

require __DIR__.'/auth.php';
