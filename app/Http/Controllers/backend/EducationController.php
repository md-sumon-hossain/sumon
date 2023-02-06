<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class EducationController extends Controller
{

    public function index(){
        $search=request()->query('search');
        if($search){
            $educations=Education::where('degree','LIKE',"%$search%")->get();
        }else{
            $educations=Education::all();
        }
        return view('backend.pages.education.index',compact('educations','search'));
    }


    public function create(){
        $education=new Education();
        return view('backend.pages.education.create',compact('education'));
    }


    public function store(Request $request){
        $request->validate([
            'degree'=>'required',
            'institution'=>'required'
        ]);
        try{
            Education::create([
                'degree'=>$request->degree,
                'institution'=>$request->institution,
                'from'=>$request->from,
                'to'=>$request->from,
            ]);
            notify()->success('Education record added Successfully');
            return to_route('admin.education.index');
        }catch(\throwable $th){
            notify()->error($th->getMessage());
            return to_route('admin.education.index');
        }
    }


    public function show($id){
       //
    }


    public function edit($id){
        $education=Education::find($id);
        return view('backend.pages.education.edit',compact('education'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'degree'=>'required',
            'institution'=>'required'
        ]);
        $education=Education::find($id);
        try{
            $education->update([
                'degree'=>$request->degree,
                'institution'=>$request->institution,
                'from'=>$request->from,
                'to'=>$request->from,
            ]);
            notify()->success('Education record updated Successfully');
            return to_route('admin.education.index');
        }catch(\throwable $th){
            notify()->error($th->getMessage());
            return to_route('admin.education.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Education::find($id)->delete();
        notify()->success('Educational record deleted successfully');
        return to_route('admin.education.index');
    }
}
