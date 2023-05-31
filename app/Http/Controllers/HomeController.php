<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() : Renderable
    {
        if(!Auth::user()){
            return view('user.index');
        }

        if(Auth::user()->role_id == 1){
            return view('admin.dashboard');
        }elseif(Auth::user()->role_id == 2){
            return view('manager.manager_dashboard');
        }elseif(Auth::user()->role_id == 3){
            return view('user.index');
        }

        return view('user.index');
    }

    public function management() : Renderable {
        return view('manager.manager_dashboard');
    }
    public function products() : Renderable {
        return view('manager.products');
    }
    public function categories() : Renderable {
        return view('manager.categories');
    }
    public function sales() : Renderable {
        return view('manager.sales');
    }
    public function home() : Renderable {
        return view('user.index');
    }
    public function shop() : Renderable {
        return view('user.shop');
    }
    public function productDetails() : Renderable {
        return view('user.product-details');
    }
    public function contact() : Renderable {
        return view('user.contact');
    }
}
