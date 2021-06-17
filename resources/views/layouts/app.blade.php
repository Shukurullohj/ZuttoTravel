<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="flex justify-between bg-gradient-to-r from-green-400  to-blue-100 p-3">
        <a href=""><h1 class="text-xl font-semibold">HiTravel</h1></a>
        <div class="flex items-center">
            <a class="mx-3" href="/places">All Trips</a>
            @if(auth()->check())
            <a class="mr-3" href="/places?by={{auth()->user()->name}}">My Trips</a>
            @endif
            <a href="/places/create">Explore New Place</a>
            <a class="ml-3" href="/perfectures">Area...</a>
            <dropdown></dropdown>
        </div>
        <div>
            <a class="text-xl" href="">Jerry</a>
        </div>
    </header>
    <main class="">
        @yield('content')
    </main>
    <footer class="bg-gradient-to-r from-green-400  to-blue-100 p-3">
        <div class=" flex justify-between items-center">
            <div class="grid-cols-6 ">
                <li class="list-none"> <a class="text-black font-extrabold" href="">About</a></li>
                <li class="list-none"> <a class="text-black font-extrabold" href="">Location</a></li>
                <li class="list-none"> <a class="text-black font-extrabold" href="">Registration</a></li>
                <li class="list-none"> <a class="text-black font-extrabold" href="">Contact</a></li>
            </div>
            <div class="grid-cols-6 float-right">
            <i class="fa fa-facebook-square" style="font-size:48px;color:black"></i>
            <i class="fa fa-github" style="font-size:48px;color:black"></i>
            <i class="fa fa-linkedin-square" style="font-size:48px;color:black"></i>
            <i class="fa fa-twitter-square" style="font-size:48px;color:black"></i>
            <i class="fa fa-youtube-play" style="font-size:48px;color:black"></i>
            <i class="fa fa-instagram" style="font-size:48px;color:black"></i>
            </div>
        </div>
        <div>
            <p class="text-center">Copyright ZuttoTravel. All Rights Reserved.<br>Powered by AllWebMasters</p>
        </div>
    </footer>
</body>
</html>
