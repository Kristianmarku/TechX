<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Show edit form page
    public function editUser($userId)
    {
        $user = User::findOrFail($userId);
        return view('admin.edit-user', compact('user'));
    }

    // Update data to database
    public function update(Request $request, $userId)
    {
        // Validate the request data
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'address_second' => 'required',
            'state' => 'required',
            'country' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'role' => 'required',
        ]);

        // Retrieve the authenticated user
        $user = User::findOrFail($userId);

        // Update user's first name and last name
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        
        // Update user's email and phone
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        // Update user's role
        $user->role_id = $request->input('role');
        
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
        
        // Redirect back with a success message
        return redirect()->back()->with('success', 'User profile updated.');
    }

    public function updatePassword(Request $request, $userId) 
    {
        // Validate the form inputs
        $request->validate([
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Get the authenticated user
        $user = User::findOrFail($userId);

        // Update the user's password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Password updated.');
    }

    public function delete($userId) 
    {
        User::findOrFail($userId)->delete();
        return redirect()->back()->with('success', 'User deleted.');
    }
}
