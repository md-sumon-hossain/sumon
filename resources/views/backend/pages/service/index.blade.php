@extends('backend.master')
@section('content')
<div class=" m-5">
  <h1 class=" text-3xl">Services</h1>
</div>
<div class=" m-5">
  <a href="#">
  <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Add Service +</button>
</a>
</div>
<div>
  <div class="flex">
    <div class="flex ">
      <form action="{{ route('admin.service.index') }}" method="GET" role="search">
        <div class="flex input-group">
          <span class="input-group-btn mr-5 mt-1">
          </span>
          <input type="text" value="{{ $search }}" class=" shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2" name="search" placeholder="Search here" id="search">
            <a href="{{ route('admin.service.index') }}" class=" mt-1">
                <button class="btn btn-danger" type="button" title="Refresh page">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
                    </svg>
                </button>
            </a>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="overflow-x-auto relative m-5">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
      <tr>
        <th scope="col" class="py-3 px-6">Sl</th>
        <th scope="col" class="py-3 px-6">Icon</th>
        <th scope="col" class="py-3 px-6">Title</th>
        <th scope="col" class="py-3 px-6">Description</th>
        <th scope="col" class="py-3 px-6">Action</th>
      </tr>
    </thead>
    @foreach ($services as $key=>$service)
    <tbody>
      <tr class="">
        <td class="py-4 px-6">{{ $key+1 }}</td>
        <td class="py-4 px-6 uppercase">{{ $service->icon }}</td>
        <td class="py-4 px-6">{{ $service->title }}</td>
        <td class="py-4 px-6">{{ $service->description }}</td>
        <td class="py-4 px-6">
          <div class="flex">
            <a href="#"class="text-indigo-600 hover:text-indigo-900">
              <svg class="h-5 w-5 fill-current text-indigo-700" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"/>
                <path d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
              </svg>
            </a>
  
            <a href="#"class="text-indigo-600 hover:text-indigo-900">
              <svg class="h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                <path fill-rule="evenodd"d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"clip-rule="evenodd"/>
              </svg>
            </a>
            <a href="#" onclick="return confirm('Are you sure you want to delete it ?')">
              <svg class="h-5 w-5 text-red-600" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
              </svg>
            </a>
          </div>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
@endsection