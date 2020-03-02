<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        // validate user input
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
  
        //on unsuccesful login attempt
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json(['message' => 'Unauthorized'], 500);

        }

         //
        $user = $request->user();
        $token_data = $user->createToken('My Token');
        $token = $token_data->token;
        
        if ($token->save()) {
            return response()->json([
                'user' => $user ,
                'access_token' => $token_data->accessToken], 200);
        } else {
            return response()->json([
                'message' => 'error occured during login, please try again'
            ], 500);
        }


    }


    public function register(Request $request)
    {
        // validate user input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (!$user){
            return response()->json(['success'=> false,'message' => 'Registration failed'], 500);
        }

        return response()->json(['success'=> true,'message' => 'Registration was succesful'], 200);
    }
}
