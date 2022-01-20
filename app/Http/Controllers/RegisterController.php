<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required','min:4','max:255','unique:users'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:8','max:255']
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'registration successful! please Login');

        return redirect('/login');
    }
}
