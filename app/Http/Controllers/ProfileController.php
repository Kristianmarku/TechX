<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : Renderable
    {
        return view('profile');
    }

    public function customerIndex() : Renderable
    {
        $user = User::findOrFail(Auth::id());
        return view('user.u-profile', compact('user'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
         // Validate the request data
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'state' => 'required',
            'country' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
        ]);

        // Retrieve the authenticated user
        $user = User::findOrFail(Auth::id());

        // Update user's first name and last name
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        
        // Update user's email and phone
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        
        // Save the updated user information
        $user->save();
        
        // Retrieve the user's address or create a new one if not exists
        $address = $user->address ?? new UserAddress();
        
        // Update address fields
        $address->address = $request->input('address');
        $address->address_second = $request->input('address_second');
        $address->state = $request->input('state');
        $address->country = $request->input('country');
        $address->city = $request->input('city');
        $address->zip_code = $request->input('zip_code');
        
        // Associate the address with the user
        $user->address()->save($address);
        
        // Redirect back
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
