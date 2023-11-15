<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function base()
    {
        $users = User::all();
        return view('user', ['users'=> $users]);
    }
}
