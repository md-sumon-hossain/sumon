<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Work;
use App\Models\WorkDetails;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class WorkController extends Controller
{
    public function index(){
        $search=request()->query('search');
        if($search){
            $works=Work::with('workRelation')->where('title','LIKE',"%$search%")
            ->oeWhere('client','LIKE',"%$search%")->get();
        }else{
            $works=Work::with('workRelation')->get();
            // dd($works);
        }
        return view('backend.pages.work.index',compact('search','works'));
    }
#work create
    public function create(){
        $work=new Work();
        return view('backend.pages.work.create',compact('work'));
    }
#work store
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'title'=>'required',
            'client'=>'required'
        ]);
        try{
            $work=Work::create([
                'title'=>$request->title,
                'client'=>$request->client,
                'details'=>$request->details,
            ]);
            # multiple image 
            $imageName=null;
            if($request->hasFile('images')){
                $images=$request->file('images');
                foreach($images as $image){
                    $imageName=date('Ymdhms').'.'.$image->getClientOriginalExtension();
                    $image->storeAs('/works',$imageName);
                    // dd($imageName);
                    # storing image
                    WorkDetails::create([
                        'work_id'=>$work->id,
                        'images'=>$imageName,
                    ]);
                }
            }
            notify()->success('Work added successfully');
            return to_route('admin.work.index');
        }catch(\Throwable $th){
            notify()->error($th->getMessage());
            return redirect()->back();
        }
    }
#work edit
    public function edit($id){
        $work=Work::find($id);
        return view('backend.pages.work.edit',compact('work'));
    }

#work update
    public function update(Request $request, $id){
        // dd($request->all());
        $validate=$request->validate([
            'title'=>'required',
            'client'=>'required'
        ]);

        $work=Work::with('workRelation')->find($id);
        // dd($work);
        // $work->workRelation->delete();
        WorkDetails::where('work_id',$work->id)->delete();
        // dd($workDetails);
        try{
            $work->update([
                'title'=>$request->title,
                'client'=>$request->client,
                'details'=>$request->details,
            ]);
            
            #multiple image update
            $imageName=null;
            if($request->hasFile('images')){
                $images=$request->file('images');
                foreach($images as $image){
                    $imageName=date('Ymdhms').'.'.$image->getClientOriginalExtension();
                    $image->storeAs('/works',$imageName);
                    // dd($imageName);

                    #image update
                    WorkDetails::create([
                    'work_id'=>$work->id,
                    'images'=>$imageName
                    ]);
                }    
            }
            notify()->success('Work added successfully');
            return to_route('admin.work.index');
        }catch(\Throwable $th){
            notify()->error($th->getMessage());
            return redirect()->back();
        }
    }


}
