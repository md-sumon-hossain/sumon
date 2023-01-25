<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>iStore</title>
    @vite('resources/css/app.css')
    @notifyCss
    <link href="{{ asset('backend/master/css/googleapi.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('backend/master/css/tailwind.output.css') }}"/>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="{{ asset('backend/master/js/alpine.min.js') }}" defer></script>
    <script src="{{ asset('backend/master/js/init-alpine.js') }}"></script>
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  </head>
  <body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }" >
      <!-- Desktop sidebar -->
      @includeIf('backend.fixed.sidebar') 
      <div class="flex flex-col flex-1 w-full"> 
        <!-- Desktop header -->
        @includeIf('backend.fixed.header')
        <main class="h-full overflow-x-hidden">
          @yield('content')
        </main>
      </div>
    </div>
    <x:notify-messages />
    @notifyJs
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  </body>
</html>
