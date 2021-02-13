<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function login(Request $request){

        $credentials = $request->only('email', 'password');

        $result = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($result) {
//            $user = User::where('email', '=', $request->email)->get();
//            Auth::login($user);
            return redirect()->to('/');
        }
        return redirect()->to('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->to('/login');
    }

}
