<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Notifications\OrderNotification;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Renderable
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Retrieve orders for the authenticated user
        $orders = Order::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('user.my-orders', compact('orders'));
    }

    
    /**
     * Show the form for a specific instance.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewOrder($id) : Renderable
    {
        $order = Order::findOrFail($id);
        return view('user.view-order', compact('order'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllOrders(): Renderable
    {
        return view('support.orders');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $order = Order::findOrFail($id)->delete();
        return to_route('myorders')->with('success', 'Order cancelled.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function adminDelete($id)
    {
        $order = Order::findOrFail($id); // Find the order
    
        $userId = $order->user_id; // Get the user ID associated with the order
        $user = User::findOrFail($userId); // Find the user
    
        $message = 'Your order (#'.$order->id.') has been cancelled.';
        $user->notify(new OrderNotification($message));
    
        $order->delete(); // Delete the order
    
        return redirect()->back()->with('success', 'Order cancelled.');
    }
    
}