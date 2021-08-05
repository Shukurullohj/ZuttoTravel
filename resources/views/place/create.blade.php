@extends('layouts.app')

@section('content')
 <section class="p-5 bg-gradient-to-r from-green-300 via-pink-200 to-blue-100">
    <form action="/places" method="POST" enctype="multipart/form-data">
        @csrf
    <div>
        <label for="name">Place of Name</label>
        <input name="name" value="{{old('name')}}" class="p-3 w-full block rounded bg-green-200" type="text">
    </div>
    <div>
        <label for="price">Price</label>
        <input name="price" value="{{old('price')}}" class="p-3 w-full block rounded bg-green-200" type="text">
    </div>
     <div>
        <label for="perfecture">Choose a perfecture</label>
        <select class="w-full rounded bg-green-200 py-3" name="perfecture_id">
            @foreach ($perfectures as $perfecture)
                <option value="{{$perfecture->id}}">{{$perfecture->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <input name="path" type="file">
    </div>
    <div>
        <label for="body">About the place</label>
        <textarea class="w-full rounded bg-green-200" value="{{old('body')}}" name="body" id="body" cols="30" rows="10"></textarea>
    </div>
        @if (count($errors))
        <ul class="">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <button type="submit" class="button border-dashed">Publish</button>

    </form>
 </section>
@endsection
