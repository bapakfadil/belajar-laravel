<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        // Use bcrypt
        //$validatedData['password'] = bcrypt($validatedData['password']);
        // Use facades hash
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Send data into database
        User::create($validatedData);

        // Sending success message upon successful storing data using explicit method
        //$request->session()->flash('success', 'Registration success! Please login');

        // Redirect user to login page, and send success message with implicit method
        return redirect('/login')->with('success', 'Registration success! Please login');
    }
}
