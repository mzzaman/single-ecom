<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard Controller;
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('adminDashboard');
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/all-category', 'allCategory')->name('allCategory');
        Route::get('/admin/add-category', 'addCategory')->name('addCategory');
    });
    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/admin/all-subCategory', 'allSubCategory')->name('allSubCategory');
        Route::get('/admin/add-subCategory', 'addSubCategory')->name('addSubCategory');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/all-product', 'allProduct')->name('allProduct');
        Route::get('/admin/add-product', 'addProduct')->name('addProduct');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/admin/pending-order', 'pendingOrder')->name('pendingOrder');
        Route::get('/admin/cencle-order', 'cencleOrder')->name('cencleOrder');
        Route::get('/admin/complete-order', 'completeOrder')->name('completeOrder');
    });
});

require __DIR__ . '/auth.php';
