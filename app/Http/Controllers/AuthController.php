<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public  function showLoginPage(){
        $categories = Category::all();
        $data = ['categories' => $categories];
        return view('LoginPage', compact('data' ));
    }

    public function showRegisterPage(){
        $categories = Category::all();
        $data = ['categories' => $categories];
        return view('RegisterPage', compact('data' ));
    }

}
