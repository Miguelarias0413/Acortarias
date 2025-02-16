<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('landing');
    }

    public function login(Request $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return view('landing');
        }

        return back()->with('error', 'Invalid login details');
    }

    public function store(Request $request){

        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed '
        ]);

        
        try{
            $passwordHashed = Hash::make($request->password);
            User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => $passwordHashed
            ]);
            
            if(Auth::attempt($request->only('email','password'))){
                return view('landing');
            }

            return back()->with('error', 'Invalid login details');
        }catch(Exception $e){
            return back()->with('error','Invalid login details');
        }

    }

    public function showRegistrationForm(){
        return view('auth.register');
    }
}
