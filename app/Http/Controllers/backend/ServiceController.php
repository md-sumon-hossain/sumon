<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index(){
        $search=request()->query('search');
        if($search){
            $services=Service::where('title','LIKE',"%$search%")->get();
        }else{
            $services=Service::all();
        }
        return view('backend.pages.service.index',compact('services','search'));
    }


    public function create(){
        $service=new Service();
        return view('backend.pages.service.create',compact('service'));
    }


    public function store(Request $request){
        $request->validate([
            'title'=>'required',
        ]);
        try{
            Service::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'icon'=>$request->icon,
            ]);
            notify()->success('Service added successfully');
            return to_route('admin.service.index');
        }catch(\Throwable $th){
            notify()->error($th->getMessage());
            return redirect()->back();
        }
    }


    public function show($id){
        
    }


    public function edit($id){
        $service=Service::find($id);
        return view('backend.pages.service.edit',compact('service'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
        ]);
        $service=Service::find($id);
        try{
            $service->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'icon'=>$request->icon,
            ]);
            notify()->success('Service added successfully');
            return to_route('admin.service.index');
        }catch(\Throwable $th){
            notify()->error($th->getMessage());
            return redirect()->back();
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
        Service::find($id)->delete();
        notify()->success('Service deleted successfully');
        return to_route('admin.service.index');
    }
}
