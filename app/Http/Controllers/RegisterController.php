<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
  public function create ()
  {
    return view ('admin.register');
  }


  public function store ()
  {
    $attributes=request()->validate([

        'name'=> ['required', 'max:255'],
        'username'=> ['required', 'min:3', 'max:255', Rule::unique('users','username')],
        'email'=> ['required', 'email', 'max:255', Rule::unique('users','email')],
        'password'=>  ['required', 'max:255'],

    ]);

    $user= User::create($attributes);

    auth()->login($user);

    return redirect('/cars')->with('message','Your Account has Been Created!');

  }


}
