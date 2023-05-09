<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function issuesPages() : Renderable {
        return view('admin.issues');
    }

    public function viewIssuePage() : Renderable {
        return view('admin.view-issue');
    }
    public function profile() : Renderable {
        return view('profile');
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
