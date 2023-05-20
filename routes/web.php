<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
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
    
    /* Admin Only */
    Route::middleware(['admin.view'])->group(function(){
        Route::get('/issues', [IssueController::class, 'index'])->name('issues'); 
        Route::get('/issues/view/', [IssueController::class, 'viewIssuePage'])->name('view.issue'); 
    });

    /* Manager Only */
    Route::middleware(['manager.view'])->group(function(){
        Route::get('/products', [ProductController::class, 'index'])->name('products'); 
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories'); 
        Route::get('/sales', [SaleController::class, 'index'])->name('sales'); 
    });

    /* Customer Only */
    Route::middleware(['customer.view'])->group(function(){
        Route::get('/c/profile', [ProfileController::class, 'customerIndex'])->name('customer.profile');
        Route::get('/my-orders', [OrderController::class, 'index'])->name('myorders'); 
    });

    /* Customers */
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop'); // change to its own controller 
    Route::get('/product/id', [ProductController::class, 'productDetails'])->name('product.details');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact'); // change to its own controller 
    
    /* All */
    Route::get('/home', [HomeController::class, 'index'])->name('home'); 
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile'); 
});