<?php

namespace App\Http\Controllers\CustomAuth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){

    $data = $request->validate([
      'name' => ['required','string','max:100'],
      'email' => ['required','string','email','max:200','unique:users'],
      'password' => ['required','string','max:10','confirmed'],
    ]);

       $user= User::create($data);

        Auth::login($user);

        return redirect()->route('home');
    }


    public function doLogin(Request $request){

        $data = $request->validate([
          'email' => ['required','string','email'],
          'password' => ['required','string'],
        ]);

        //    $user= User::create($data);
        if(Auth::attempt($data)){
        $user = User::where('email',$data['email'])->first();
        Auth::login($user);
        }else{
            return redirect()->back()->withErrors(["email_not_correct" => "Error!  your email or password not valid !!!!!"]);
        }
            return redirect()->route('home');
        }






    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function login(){
        return view('auth.login');
    }
}
