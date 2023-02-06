<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class EducationController extends Controller
{

    public function index()
    {
        $search=request()->query('search');
        if($search){
            $educations=Education::where('degree','LIKE',"%$search%")->get();
        }else{
            $educations=Education::all();
        }
        return view('backend.pages.education.index',compact('educations','search'));
    }


    public function create()
    {
        $education=new Education();
        return view('backend.pages.education.create',compact('education'));
    }


    public function store(Request $request)
    {
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
