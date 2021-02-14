<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function doLogin(Request $request){
        $email = $request->input('email')
        $password = $request->input('password');
        if(Auth::attempt(['email' => $email, 'password' => $password])){

            return redirect("/user")
        }
        return back()->withErrors(["Message" => "ไม่พบข้อมูลที่กรอกเข้ามา"]);

    }
    public function register(){
        return view('auth.register');
    }
    public function doRegiser(Request $request){

    }
    public function logout(){

    }
}

