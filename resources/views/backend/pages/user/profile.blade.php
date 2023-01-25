@extends('backend.master')
@section('content')
<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    <div id="profile" class="w-full lg:w-3/5 rounded-lg ">
        <div class="p-4 md:p-12 text-center lg:text-left">
            <div>
                <img src="#" class=" rounded-1" width="170px" alt="">
            </div>
            <h1 class=" mt-3">#</h1>
            <h3>#</h3>
            <h5>#</h5>
            <p>#</p>
            <div>
                <span><b>#</b></span>
                <label class=" ml-3">Contact : </label>
                <span><b>#</b></span>
                <label class=" ml-3">Email :</label>
                <span><b>#</b></span>
            </div>
            <div class="flex justify-end space-x-4 m-7">
                <a href="#" type="submit" class="  px-6 py-2.5 bg-white-300 text-black font-medium text-xsleading-tight uppercase rounded shadow-md hover:bg-red-500 hover:text-white hover:shadow-lg focus:bg-red-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lgtransition duration-150 ease-in-out">
                cancel
                </a>
                <button type="submit" class="  px-6 py-2.5 bg-white-600 text-black font-medium text-xsleading-tight uppercase rounded shadow-md hover:bg-green-500  hover:text-white hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lgtransition duration-150 ease-in-out">Add</button>
            </div> 
        </div>
    </div>
</div>
@endsection