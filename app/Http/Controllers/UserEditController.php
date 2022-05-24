<?php

namespace App\Http\Controllers;

use datatables;

use App\Models\Cars;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class UserEditController extends Controller
{
    public function index(Request $request)
    {

        return view('admin.user-profile')->with ('user', auth()->user());
    }

}
