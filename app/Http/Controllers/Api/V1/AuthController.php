<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request){

            $data= $request->all();
            $data["password"] = bcrypt($data['password']);
             $user= User::create($data);
             $token = $user->createToken("new name")->plainTextToken;

            return response()->json([
                'user' =>  $user,
                'token' => $token
            ]);
    }

    public function login(Request $request){

        $data = $request->validate([
            'email' => ['required','string','email'],
            'password' => ['required','string'],
          ]);

          if(Auth::attempt($data)){

             $user= User::where('email' , $data['email'])->first();
             $token = $user->createToken("new name")->plainTextToken;

            return response()->json([
                'user' =>  $user,
                'token' => $token
            ]);
          }else{
            return response()->json(["error"=>"email or password not valid!"], 422);
          }
    }


    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->json(["message"=>"log out"]);
    }
}
