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
            $skills=Skill::where('title','LIKE','%'.$search.'%')->get();
        }else{
            $skills=Skill::all();
        }
        return view('backend.pages.skill.index',compact('search','skills'));
    }

    public function create(){
        $skill= new Skill();
        return view('backend.pages.skill.create',compact('skill'));
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
        ]);
        try {
            Skill::create([
                'title'=>$request->title,
                'details'=>$request->details,
            ]);
            notify()->success('Skill added Successfully');
            return to_route('admin.skill.index');
        } catch (\Throwable $th) {
            notify()->error('SOmething went wrong');
            return redirect()->back();
        }
    }

    public function edit($id){
        $skill=Skill::find($id);
        return view('backend.pages.skill.edit',compact('skill'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'=>'required',
        ]);
        $skill=Skill::find($id);
        try {
            $skill->update([
                'title'=>$request->title,
                'details'=>$request->details,
            ]);
            notify()->success('Skill updated Successfully');
            return to_route('admin.skill.index');
        } catch (\Throwable $th) {
            notify()->error('SOmething went wrong');
            return redirect()->back();
        }
    }

    public function delete($id){
        Skill::find($id)->delete();
        notify()->success('Skill has been deleted.');
        return to_route('admin.skill.index');
    }
}
