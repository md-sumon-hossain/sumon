<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    public function profile(){
        $user=new User();
        $profile=auth()->user();
        return view('backend.pages.user.profile',compact('user','profile'));
    }
    
    public function edit($id){
        $user=auth()->user();
        return view('backend.pages.user.edit',compact('user'));
    }

    public function update(Request $request, $id){
        // dd($request->all());
       $request->validate([
            'name'=>'required',
            'email'=>'required',
       ]);
       $user=auth()->user();
       $filename=null;
       if($request->hasFile('image')){
        $file=$request->file('image');
        $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$filename);
       }
    //    dd($filename);
       try {
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'image'=>$filename,
            'designation'=>$request->designation,
            'company'=>$request->company,
            'address'=>$request->address,
            'bio'=>$request->bio,
       ]);
       notify()->success('Profile updated');
       return to_route('admin.profile');
       } catch (\Throwable $th) {
        notify()->error($th->getMessage());
        return redirect()->back();
       } 
    }
}
