<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function create()
    {
        return view('admin.login');
    }

    public function store()
    {
        $attributes=request()->validate([
            'email'=> 'required|exists:users,email',
            'password'=> ['required']

        ]);

        if (auth()->attempt($attributes))
        {
            return redirect('/')->with('message','Welcome back!');
        }

        return back()
        ->withInput()
        ->withErrors(['email' => 'Your Provided credentials could not be verified']);

    }


    public function destroy()
    {
        auth()->logout();

        return redirect ('/')->with('error','You have logged out successfully!');
    }
}
