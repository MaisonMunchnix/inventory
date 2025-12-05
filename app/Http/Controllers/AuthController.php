<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;

class AuthController extends Controller
{
    public function showLogin(){

        return view('auth.login');

    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('products.index');
        }

        return back()->withErrors(['email' => 
        'Invalid credentials']);
    }

    public function logout(){
        Auth :: logout();
        return redirect()->route('login');
    }
}