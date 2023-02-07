<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(){
        $search=request()->query('search');
        if($search){
            $works=Work::where('title','LIKE',"%$search%")
            ->oeWhere('client','LIKE',"%$search%")->get();
        }else{
            $works=Work::all();
        }
        return view('backend.pages.work.index',compact('search','works'));
    }
}
