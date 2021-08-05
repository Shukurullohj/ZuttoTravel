<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/googlemap.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="p-0">
    <header class=" bg-gradient-to-r from-green-400  to-blue-100 px-3">
        <div class="flex justify-between items-center">
            <a href="/home">
                <div class="flex items-center">   
                    <img class="w-20" src="\images\asset\icon.png">
                    <h1 class="text-xl font-serif text-green-700 ">ZuttoTravel </h1>
                </div>  
            </a>
            @if(auth()->check())
            </form>
            <div class="flex items-center">
              <form method="GET" action="/places/search">
                <div class="relative text-gray-600 mr-5">
                  <input type="search" name="q" placeholder="Search" class="bg-blue-100 h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                  <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                      <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                    </svg>
                    </button>
                </div>
              </form>
                <img class="w-10 h-10 rounded-full" src="/storage/{{auth()->user()->avatar_path}}" alt="">  
                <a class="text-xl uppercase pl-3 font-serif" href="">{{auth()->user()->name}}</a>
            @endif
            </div>
        </div>
        <div class="flex justify-center pb-2">
            <a href="/home">Home</a>
            <a class="mx-3" href="/places">All Trips</a>
            @if(auth()->check())
            <a class="mr-3" href="/places?by={{auth()->user()->name}}">My Trips</a>
            @endif
            <a href="/places/create">Explore New Place</a>
            <a class="ml-3" href="/perfectures">Area...</a>
            <dropdown></dropdown>
        </div>
    </header>
    <main class="">
        @yield('content')
        <div id="app">
    <flash message="{{session('flash')}}"></flash>
    </div>
    </main>
    <footer class="bg-gradient-to-r from-green-400  to-blue-100 p-3">
        <div class=" flex justify-between items-center">
            <div class="grid-cols-6 ">
                <li class="list-none"> <a class="text-black font-extrabold" href="/about">About</a></li>
                <li class="list-none"> <a class="text-black font-extrabold" href="/location">Location</a></li>
                <li class="list-none"> <a class="text-black font-extrabold" href="/contact">Contact</a></li>
            </div>
            
            <div class="grid-cols-6 float-right">
            <a href=""><i class="fa fa-facebook-square" style="font-size:48px;color:black"></i></a>
            <a href=""><i class="fa fa-github" style="font-size:48px;color:black"></i></a>
            <a href=""><i class="fa fa-linkedin-square" style="font-size:48px;color:black"></i></a>
            <a href=""><i class="fa fa-twitter-square" style="font-size:48px;color:black"></i></a>
            <a href=""><i class="fa fa-youtube-play" style="font-size:48px;color:black"></i></a>
            <a href=""><i class="fa fa-instagram" style="font-size:48px;color:black"></i></a>
            </div>
        </div>
        <div>
            <p class="text-center">Copyright ZuttoTravel. All Rights Reserved.<br>Powered by AllWebMasters</p>
        </div>
    </footer>

<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/googlemap.js') }}" defer></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{config('googlemap')['google_api_key']}}&callback=initMap" async defer></script>
</body>
</html>
