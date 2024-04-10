<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //login-link
    function login()
    {
        return view("auth.login");
    }
}
