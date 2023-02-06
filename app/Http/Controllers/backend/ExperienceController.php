<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $search=request()->query('search');
        if($search){
            $experiences=Experience::where('designation','LIKE','%'.$search.'%')
            ->orWhere('company','LIKE','%'.$search.'%')->get();
        }else{
            $experiences=Experience::all();
        }
        return view('backend.pages.experience.index',compact('experiences','search'));
    }


    public function create()
    {
        $experience= new Experience();
        return view('backend.pages.experience.create',compact('experience'));
    }


    public $enddate;
    public function store(Request $request)
    {
        $request->validate([
            'designation'=>'required',
            'company'=>'required',
        ]);

        if($request->has('present')){
            $enddate = $request->present;
        }elseif($request->has('to')){
            $enddate = $request->to;
        }
        Experience::create([
            'designation'=>$request->designation,
            'company'=>$request->company,
            'from'=>$request->from,
            'to'=>$enddate,
        ]);
        notify()->success('Experience Added Successfully');
        return to_route('admin.experience.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
