@extends('layouts.app')

@section('content')
<section class="p-5 bg-gradient-to-r from-green-200 to-white m-0 flex justify-between ">

	<div class=" mr-10">
		@foreach($places as $place)

		<div class="card mb-3 p-3 w-full mr-56">
			<img src="" alt="">
			<div class="flex justify-between">
				<a class="text-xl font-bold" href="{{$place->path()}}">{{$place->name}}</a>
				{{$place->created_at->diffForHumans()}}
			</div>
			<p class="my-3 line-clamp-2">{{$place->body}}</p>
			<div class="flex justify-between items-center">
				<h3 class="font-semibold">{{$place->price}}$</h3>
				@can ('update', $place)
				<form method="POST" action="{{$place->path()}}">
					@csrf
					@method('DELETE')
					<button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
						<i class="fa fa-trash-o" aria-hidden="true"></i>
					</button>
				</form>
				@endcan
			</div>
		</div>
		@endforeach
		{{$places->links()}}
	</div>
	<div id="app">
		<avatar-form :user="{{ $profileUser }}"></avatar-form>
	</div>
</section>

@endsection