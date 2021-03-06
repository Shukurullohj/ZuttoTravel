@extends('layouts.app')

@section('content')
 <section class="p-5 flex grid grid-cols-4 bg-gradient-to-r from-green-300 via-pink-500 to-blue-500 ">
    @foreach($perfectures as $perfecture)
     <div class="card bg-gray-200 rounded border-4 border-light-blue-500 border-opacity-25 mb-3 p-5" style="width: 280px;">
         <img src="" alt="">
            {{$perfecture->name}}</a>

            <div class="flex justify-between items-center">
    
                <button class="border-4 border-purple-500 rounded">Favorite</button>
            </div>
     </div>
     @endforeach
 </section>
@endsection
