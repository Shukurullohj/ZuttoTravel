@extends('layouts.app')

@section('content')
 <section class="p-5 flex grid grid-cols-4 bg-gradient-to-r from-green-300 via-pink-500 to-blue-500 ">
    @foreach($places as $place)
     <div class="card bg-gray-200 rounded border-4 border-light-blue-500 border-opacity-25 mb-3 p-3" style="width: 280px;">
         <img src="" alt="">
            <a class="text-xl font-bold" href="{{$place->path()}}">{{$place->name}}</a>
            <p class="my-3 line-clamp-2">{{$place->body}}</p>
            <div class="flex justify-between items-center">
                <h3 class="font-semibold">{{$place->price}}$</h3>
                <button class="border-4 border-purple-500 rounded">Favorite</button>
            </div>
     </div>
     @endforeach
 </section>
@endsection