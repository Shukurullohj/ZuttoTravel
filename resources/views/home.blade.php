@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-green-400 to-blue-100">
    <div class="flex justify-center" id="app">
        <example-component :autoplay="true"></example-component>
    </div>
    <div class=" flex justify-between container">
        <img src="/images/asset/travel-bg.png" alt="">
        <div class="">
            <h1 class="font-semibold text-3xl py-4">Lorem ipsum dolor sit.</h1>
            <p class="font-mono">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolore sequi sit nisi explicabo veritatis error animi, porro quis! Natus pariatur molestias rerum odit! Dicta distinctio, atque assumenda. Ullam, dicta, quae! Dignissimos nostrum unde laudantium nobis adipisci cupiditate ducimus delectus eaque magni sit veniam voluptatibus ratione nihil, at earum, vitae atque omnis. Optio odio, sit sunt at, cupiditate aperiam voluptatem, ipsam labore libero, nesciunt repudiandae omnis vitae provident fugit porro voluptate asperiores ex. Molestias aliquid labore ducimus illo magnam, vitae nesciunt voluptas animi, sed ipsum doloribus. Explicabo nisi labore necessitatibus dolor velit animi, et id itaque temporibus, voluptates a sit.</p>
        </div>
    </div>
    <section class="p-5 flex grid grid-cols-4  ">

        
        @foreach($places as $place)
        <div class="card mb-3 p-3" style="width: 280px;">
           <img class="w-full" src="https://cdn.cnn.com/cnnnext/dam/assets/170606121226-japan---travel-destination---shutterstock-230107657.jpg" alt="">
           <a class="text-xl font-bold" href="{{$place->path()}}">{{$place->name}}</a>
           <p class="my-3 line-clamp-2">{{$place->body}}</p>
           <div class="flex justify-between items-center">
                <h3 class="font-semibold">{{$place->price}}$</h3>
                <button class="button">Favorite</button>
            </div>
        </div>
        @endforeach
    </section>
    
    <div class="bg-gradient-to-r from-green-500 to-blue-100 py-4">
        <div class="container mx-auto flex">
            <div class="grid grid-cols-4 gap-4">
                <div class="px-3">
                    <img class="rounded-full w-32 h-32 mx-auto" 
                    src="{{$userz->find(3)->avatar_path}}" alt="">
                    <p class="font-semibold text-center">{{$userz->find(3)->name}}</p>
                    <p class="text-xs text-center">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Praesentium iste doloribus aspernatur possimus necessitatibus sit aliquam, veritatis magni similique accusamus enim neque harum modi ipsum hic quisquam eligendi voluptatem non.</p>
                </div>
                <div class="px-3">
                    <img class="rounded-full w-32 h-32 mx-auto" 
                    src="{{$userz->find(3)->avatar_path}}" alt="">
                    <p class="font-semibold text-center">{{$userz->find(3)->name}}</p>
                    <p class="text-xs text-center">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Praesentium iste doloribus aspernatur possimus necessitatibus sit aliquam, veritatis magni similique accusamus enim neque harum modi ipsum hic quisquam eligendi voluptatem non.</p>
                </div>
                <div class="px-3">
                    <img class="rounded-full w-32 h-32 mx-auto" 
                    src="{{$userz->find(1)->avatar_path}}" alt="">
                    <p class="font-semibold text-center">{{$userz->find(1)->name}}</p>
                    <p class="text-xs text-center">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Praesentium iste doloribus aspernatur possimus necessitatibus sit aliquam, veritatis magni similique accusamus enim neque harum modi ipsum hic quisquam eligendi voluptatem non.</p>
                </div>
                <div class="px-3">
                    <img class="rounded-full w-32 h-32 mx-auto" 
                    src="{{$userz->find(3)->avatar_path}}" alt="">
                    <p class="font-semibold text-center">{{$userz->find(3)->name}}</p>
                    <p class="text-xs text-center">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Praesentium iste doloribus aspernatur possimus necessitatibus sit aliquam, veritatis magni similique accusamus enim neque harum modi ipsum hic quisquam eligendi voluptatem non.</p>
                </div>
            </div>

            
            
        </div>
    </div>
</div>
@endsection
