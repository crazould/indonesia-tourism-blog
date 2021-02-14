<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $result = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        $categories = Category::all();
        $data = ['categories' => $categories];

        if ($result) {
            return redirect()->to('/');
        }

        return view('LoginPage', compact('data'))->with('error', 'invalid email and password combination');

    }

    public function register(Request $request){

        $this->validate($request, [
            'email' => "unique:users,email",
        ]);

        $categories = Category::all();
        $data = ['categories' => $categories];

        $user = new User();
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = 'user';

        $user->save();

        return view('RegisterPage', compact('data'))->with('success', 'Sign Up Success!');
    }

    public function logout(){
        Auth::logout();
        return redirect()->to('/login');
    }

}
