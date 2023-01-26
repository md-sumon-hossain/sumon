<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $skills=Skill::all();
        return view('website.home',compact('skills'));
    }
}
