@extends('layouts.app')

@section('content')
<div class="p-5 bg-gradient-to-r from-green-300 to-blue-100">   
    <div class="container grid-cols-2 grid gap-4">
        <div class="">
            <h2 class="text-3xl font-bold pb-5">LOCATION</h2>
            <p class=""><span class="font-bold">Adress:</span>6928-30 Katakai, Kujukuri, Sambu District, Chiba 283-0104</p>
        </div>
        <div>
            <x-map-location-view/>
        </div>    
    </div>
</div>
@endsection