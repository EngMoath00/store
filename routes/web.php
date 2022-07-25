<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PagesfrontController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix => admin'], function () {

    //dashboard admin
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index')->middleware('auth');

    //product admin
    Route::get('/indexproduct', [ProductController::class, 'index'])->name('index.product');
    Route::get('/addproduct', [ProductController::class, 'create'])->name('create.product');
    Route::post('/storeproduct', [ProductController::class, 'store'])->name('store.product');
    Route::get('/showproduct', [ProductController::class, 'show'])->name('show.product');
    Route::delete('/deleteproduct/{id}', [ProductController::class, 'destroy'])->name('delete.product');
    Route::get('/editproduct/{id}', [ProductController::class, 'edit'])->name('edit.product');
    Route::put('/updateproduct/{id}', [ProductController::class, 'update'])->name('update.product');

    //category admin
    Route::get('/addcategory', [CategoryController::class, 'create'])->name('create.category');
    Route::post('/storecategory', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/showcategory', [CategoryController::class, 'show'])->name('show.category');
    Route::delete('/deletecategory/{id}', [CategoryController::class, 'destroy'])->name('delete.category');
    Route::get('/editcategory/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/updatecategory/{id}', [CategoryController::class, 'update'])->name('update.category');

    //information admin
    Route::get('/addInforma', [InformationController::class, 'create'])->name('create.Informa');
    Route::post('/storeInforma', [InformationController::class, 'store'])->name('store.Informa');
    Route::get('/showInforma', [InformationController::class, 'show'])->name('show.Informa');
    Route::delete('/deleteInforma/{id}', [InformationController::class, 'destroy'])->name('delete.Informa');
    Route::get('/editInforma/{id}', [InformationController::class, 'edit'])->name('edit.Informa');
    Route::post('/updateInforma/{id}', [InformationController::class, 'update'])->name('update.Informa');

    //users admin
    Route::get('/users', [AdminController::class, 'showUsers'])->name('show.users');

    //messages user in dashboard
    Route::get('/messageUsers', [ContactController::class, 'show'])->name('message.Users');
    Route::delete('/messagedelete/{id}', [ContactController::class, 'destroy'])->name('message.delete');
});


Route::group(['prefix => commerce'], function () {

    //show pages
    Route::get('/index', [PagesfrontController::class, 'index'])->name('index');
    Route::get('/shop', [PagesfrontController::class, 'product'])->name('shop');
    Route::get('/cart', [PagesfrontController::class, 'cartPage'])->name('cart.page');
    Route::get('/productsingle', [PagesfrontController::class, 'singleProduct'])->name('single.product');
    Route::get('/about_us', [PagesfrontController::class, 'about'])->name('about.page');
    Route::get('/testimonial', [PagesfrontController::class, 'says'])->name('testimonial');

    //contact user
    Route::get('/messageme', [ContactController::class, 'create'])->name('messageUs');
    Route::post('/storemessage', [ContactController::class, 'store'])->name('store.message');
});
