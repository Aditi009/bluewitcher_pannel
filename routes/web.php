<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorController;
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
    return redirect('/login');
});

Route::get('/admin', function () {
    return view('/admin.dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);

    //Product Management Routes

    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/viewproduct', [ProductController::class, 'view']);
    Route::get('/addproduct', [ProductController::class, 'add']);
    Route::get('/editproduct', [ProductController::class, 'edit']);
    Route::post('/addproduct', [ProductController::class, 'addproduct'])->name('addproduct');

    //Category Management Routes

    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/addcategory', [CategoryController::class, 'add']);
    Route::get('/editcategory', [CategoryController::class, 'edit']);

    //User Management Routes

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/edituser', [UserController::class, 'edit']);

    //Visitor Management Routes

    Route::get('/visitor', [VisitorController::class, 'index']);

    //Owner Management Routes

    Route::get('/owner', [OwnerController::class, 'index']);
    Route::post('/editowner', [OwnerController::class, 'edit']);
    Route::post('/editmyowner', [OwnerController::class, 'editmyowner']);
    Route::post('deleteowner',[OwnerController::class,'deleteowner']);
    Route::post('verify',[OwnerController::class,'verify']);



    //Order Management Routes

    Route::get('/order', [OrderController::class, 'index']);
    Route::get('/createorder', [OrderController::class, 'add']);
    Route::post('/editmyorder', [OrderController::class, 'editmyorder']);
    Route::post('/editorder', [OrderController::class, 'edit']);
    Route::post('/addorder',[OrderController::class,'addorder']);
    Route::post('deleteorder',[OrderController::class,'deleteorder']);
});

require __DIR__.'/auth.php';
