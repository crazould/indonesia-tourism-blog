<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public  function showLoginPage(){
        return view('LoginPage');
    }

    public function showRegisterPage(){
        return view('RegisterPage');
    }

}
