<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $search=request()->query('search');
        if($search){
            $skills=Skill::where('title','LIKE','%'.$search.'%');
        }else{
            $skills=Skill::all();
        }
        return view('backend.pages.skill.index',compact('search','skills'));
    }
}
