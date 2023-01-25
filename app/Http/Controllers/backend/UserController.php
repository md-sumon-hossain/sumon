<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        $user=new User();
        return view('backend.pages.user.profile',compact('user'));
    }
}
