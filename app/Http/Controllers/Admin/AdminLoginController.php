<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Auth;


class AdminLoginController extends Controller
{
    public function index()
    {
        $pass = Hash::make('123');
        dd($pass);
        return view('admin.login', compact($pass));
    }

    public function forget_password()
    {
        return view('admin.forget_password');
    }
}
