<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('backend.pages.auth.login');
    }

    public function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $credentials=$request->except('_token');
        if(Auth::attempt($credentials)){
            return to_route('admin.dashboard');
        }else{
            notify()->error('Invalid Credentials');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        notify()->success('Logged out Successfully.');
        return to_route('home');
    }
}
