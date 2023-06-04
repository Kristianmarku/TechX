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
use App\Http\Controllers\SupportController;
use App\Http\Controllers\AdminController;

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
        return redirect(route('home'));
    });
    
    Route::get('/signup', function(){
        return view('auth.signup');
    })->name('signup');

    Route::get('/login', function(){
        return view('auth.login');
    })->name('login');
});

/* Authenticated */
Route::middleware(['auth'])->group(function(){
    
    /* Admin Only */
    Route::middleware(['admin.view'])->group(function(){
        /* User Data */
        Route::get('/user/edit/{id}', [AdminController::class, 'editUser'])->name('edit.user');
        Route::post('/user/edit/{id}', [AdminController::class, 'update'])->name('update.user.profile');
        Route::post('/user/update-password/{id}', [AdminController::class, 'updatePassword'])->name('update.user.password');
        Route::delete('/user/delete/{id}', [AdminController::class, 'delete'])->name('delete.user');
    });

    /* Manager Only */
    Route::middleware(['manager.view'])->group(function(){
        /* Products */
        Route::get('/products', [ProductController::class, 'index'])->name('products'); 
        Route::post('/products', [ProductController::class, 'create'])->name('add.product');
        Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('delete.product');
        Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('edit.product');
        Route::post('/products/edit/{id}', [ProductController::class, 'update'])->name('update.product');

        Route::get('/categories', [CategoryController::class, 'index'])->name('categories'); 
        Route::get('/sales', [SaleController::class, 'index'])->name('sales'); 
    });

    /* Authenticated Customers Only */
    Route::middleware(['customer.view'])->group(function(){
        Route::get('/c/profile', [ProfileController::class, 'customerIndex'])->name('customer.profile');
        Route::post('/c/profile', [ProfileController::class, 'update'])->name('update.profile');
        Route::get('/my-orders', [OrderController::class, 'index'])->name('myorders'); 
    });

    /* Support Only */
    Route::middleware(['support.view'])->group(function(){
        Route::get('/issues', [IssueController::class, 'index'])->name('issues'); 
        Route::get('/issues/view/', [IssueController::class, 'viewIssuePage'])->name('view.issue'); 
    });

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile'); 
    Route::post('/profile/update/password', [ProfileController::class, 'updatePassword'])->name('update.password'); 
    Route::post('/profile', [ProfileController::class, 'update'])->name('update.staff.profile');
});

/* Customers */
Route::get('/shop', [HomeController::class, 'shop'])->name('shop'); // change to its own controller 
Route::get('/product/{id}', [ProductController::class, 'productDetails'])->name('product.details');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact'); // change to its own controller 

/* All */
Route::get('/home', [HomeController::class, 'index'])->name('home'); 