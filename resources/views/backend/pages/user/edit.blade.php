@extends('backend.master')
@section('content')
<div class="m-10">
    <h1 class="m-10 text-5xl">Update Profile</h1>
</div>
<div class="m-10">
    <form action="#" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        @includeIf('backend.pages.user.fields')
        
        <div class="flex justify-end mr-10">
            <a href="{{ route('admin.user.profile') }}" type="submit" class=" m-1 px-6 py-2.5 bg-red-600 text-black font-medium text-xsleading-tight uppercase rounded shadow-md hover:bg-red-500 hover:text-white hover:shadow-lg focus:bg-red-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lgtransition duration-150 ease-in-out">cancel</a>
        
            <button type="submit" class=" m-1 px-6 py-2.5 bg-green-600 text-black font-medium text-xsleading-tight uppercase rounded shadow-md hover:bg-green-500  hover:text-white hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lgtransition duration-150 ease-in-out">Update</button>
        </div>
    </form>
</div>
@endsection