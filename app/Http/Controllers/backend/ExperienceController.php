<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ExperienceController extends Controller
{
    public function index(){
        $search=request()->query('search');
        if($search){
            $experiences=Experience::where('designation','LIKE','%'.$search.'%')
            ->orWhere('company','LIKE','%'.$search.'%')->get();
        }else{
            $experiences=Experience::all();
        }
        return view('backend.pages.experience.index',compact('experiences','search'));
    }


    public function create(){
        $experience= new Experience();
        return view('backend.pages.experience.create',compact('experience'));
    }


    public $enddate;
    public function store(Request $request){
        $request->validate([
            'designation'=>'required',
            'company'=>'required',
        ]);

        if($request->has('present')){
            $enddate = $request->present;
        }elseif($request->has('to')){
            $enddate = $request->to;
        }
        
        try{
            Experience::create([
                'designation'=>$request->designation,
                'company'=>$request->company,
                'from'=>$request->from,
                'to'=>$enddate,
            ]);
            notify()->success('Experience Added Successfully');
            return to_route('admin.experience.index');
        }catch(\Throwable $th){
            notify()->error($th->getMessage());
        }
        
    }


    public function show($id){
        //
    }


    public function edit($id){
        $experience=Experience::find($id);
        return view('backend.pages.experience.edit',compact('experience'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'designation'=>'required',
            'company'=>'required',
        ]);
        $experience=Experience::find($id);
        if($request->has('present')){
            $enddate = $request->present;
        }elseif($request->has('to')){
            $enddate = $request->to;
        }
        try{
            $experience->update([
                'designation'=>$request->designation,
                'company'=>$request->company,
                'from'=>$request->from,
                'to'=>$enddate,
            ]);
            notify()->success('Experience Updated Successfully');
            return to_route('admin.experience.index');
        }catch(\Throwable $th){
            notify()->error($th->getMessage());
            return to_route('admin.education.index');
        }
    }


    public function destroy($id){
        Experience::find($id)->delete();
        notify()->success('Experience Deleted Successfully');
        return to_route('admin.experience.index');
    }
}
