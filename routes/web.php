<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ProfileController;
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


Auth::routes();

Route::middleware(['guest'])->group(function(){
    Route::get('/', function(){
        return view('auth.login');
    })->name('loginPage');
    
    Route::get('/signup', function(){
        return view('auth.signup');
    })->name('signup');
});

Route::middleware(['auth'])->group(function(){
    /* Admin */
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard'); // change to its own controller
    Route::get('/issues', [IssueController::class, 'index'])->name('issues'); 
    Route::get('/view-issue', [IssueController::class, 'viewIssuePage'])->name('view.issue'); 

    /* All */
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile'); 

    /* Manager */
    Route::get('/management', [App\Http\Controllers\HomeController::class, 'management'])->name('management'); // change to its own controller 
    Route::get('/products', [App\Http\Controllers\HomeController::class, 'products'])->name('products'); // change to its own controller 
    Route::get('/categories', [App\Http\Controllers\HomeController::class, 'categories'])->name('categories'); // change to its own controller 
    Route::get('/sales', [App\Http\Controllers\HomeController::class, 'sales'])->name('sales'); // change to its own controller 

    /* Customers */
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home'); // change to its own controller 
    Route::get('/shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop'); // change to its own controller 
    Route::get('/product/id', [App\Http\Controllers\HomeController::class, 'productDetails'])->name('product.details'); // change to its own controller 
    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact'); // change to its own controller 

});