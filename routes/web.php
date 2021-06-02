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
use App\Http\Controllers\settingController;
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

Route::get('/course/{slug}/{seasonId}/{episode}',[CourseController::class ,'player'])->middleware(['auth','status_user'])->name('player');

Route::get('/category/{slug}',[CategoryController::class ,'show'])->name('category.single');

Route::get('/dashboard',[UserAdminController::class,'dashboard'] )->middleware(['isverify','auth'])->name('dashboard');

Route::get('/user/payment', [PaymentController::class,'create'])->middleware('auth')->name('payment.create');
Route::post('/user/payment', [PaymentController::class,'store'])->middleware('auth')->name('payment.store');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::group(['middleware' => 'can:admin dashboard'],function () {
        Route::view('/', 'admin.dashboard')->name('admin.dashboard');
        Route::get('setting',[settingController::class ,'index'])->name('setting.index');
        Route::post('setting',[settingController::class ,'store'])->name('setting.store');
        
        Route::group(['middleware' => 'can:video CRUD'],function () {
            Route::get('episode/create/{id}', [EpisodeController::class, 'create'])->name('episode.create');
            Route::post('episode/create/{id}', [EpisodeController::class, 'store'])->name('episode.store');
            Route::get('episode/edit/{slug}', [EpisodeController::class, 'edit'])->name('episode.edit');
            Route::put('episode/update/{slug}', [EpisodeController::class, 'update'])->name('episode.update');
            Route::delete('episode/delete/{slug}', [EpisodeController::class, 'destroy'])->name('episode.delete');
        
        });

        Route::group(['middleware' => 'can:setting CRUD'],function () {
            Route::get('subscription/index', [SubscriptionController::class,'index'])->name('subscription.index');
            Route::get('subscription/create', [SubscriptionController::class,'create'])->name('subscription.create');
            Route::post('subscription/create', [SubscriptionController::class,'store'])->name('subscription.store');
            Route::get('subscription/edit/{id}', [SubscriptionController::class,'edit'])->name('subscription.edit');
            Route::put('subscription/update/{id}', [SubscriptionController::class,'update'])->name('subscription.update');
            Route::delete('subscription/delete/{id}', [SubscriptionController::class,'delete'])->name('subscription.delete');
        });

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
            Route::post('add_category' ,[CategoryController::class,'add_category'])->name('course.add_category');
            Route::get('course/episodes/{id}',[EpisodeController::class, 'index'])->name('episode.index');

            // Route::get('/admin/course', [CourseController::class,'index'])->middleware('auth')->name('course.index');
            // Route::get('/admin/course/create', [CourseController::class,'create'])->middleware('auth')->name('course.create');
            // Route::post('/admin/course/create', [CourseController::class,'store'])->middleware('auth')->name('course.store');
            // Route::get('/admin/course/edit/{id}', [CourseController::class,'edit'])->middleware('auth')->name('course.edit');
            // Route::put('/admin/course/update/{id}', [CourseController::class,'update'])->middleware('auth')->name('course.update');
            // Route::delete('/admin/course/delete/{id}', [CourseController::class,'delete'])->middleware('auth')->name('course.delete');
        });
    });
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('edit',[UserAdminController::class,'edit_user'])->name('edit_user');
    Route::put('edit/update',[UserAdminController::class,'update_user'])->name('edit_user_save');
    Route::get('payments',[UserAdminController::class,'payments'])->name('user_payments');
    Route::get('payment', [PaymentController::class,'create'])->name('payment.create');
    Route::post('payment', [PaymentController::class,'store'])->name('payment.store');
});

require __DIR__.'/auth.php';
