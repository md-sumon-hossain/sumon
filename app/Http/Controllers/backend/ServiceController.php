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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
