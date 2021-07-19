<form action="{{$place->path() . '/comments' }}" method="POST">
  @csrf
  <div class="my-4">          
    <textarea class=" rounded bg-green-100 block mb-3" name="comment" id="comment" 
    cols="50" rows="7" placeholder="Add your comment"></textarea>
    <button class="button">Submit</button>
  </div>
</form>
@foreach ($comments as $comment)
<div id="app">
<comment :attributes="{{$comment}}" inline-template>
 <div class="border-2 border-green-500 shadow rounded p-3 flex mb-5">
      <div class="grid-cols-2">
      <img class="rounded m-auto" src="https://picsum.photos/60" alt="">
      <p>{{$place->creator->name}}</p>
      </div>
      <div class="grid-cols-10 ml-10 w-full">
      <div class="mb-3" v-if="editing">
       <input v-model="comment" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

       <button class="py-2 px-4 text-white rounded bg-blue-500 text-xs" @click="update">Update</button>
       <button @click="editing = false" class="py-2 px-4 border-2 border-blue-500 rounded text-xs">Cancel</button>

      </div>
      <div v-else v-text="comment">
        <p name="comment" class="pb-10">{{$comment->comment}}</p>
      </div>
      <div class="flex justify-between items-center">
        <div class="flex items-center">
        <favorite :comment="{{$comment}}"></favorite>
          <p class="ml-5">Posted {{$comment->created_at->diffForHumans()}}...</p>
          </div>
          <div class="flex">
        @can('update', $comment)
          <button class="py-2 px-4 text-white rounded bg-gray-500 mr-3" @click=" editing = true "><i class="fa fa-pencil-square-o"></i></i> Edit</button>
        @endcan
          <button @click="destroy" class="py-2 px-4 text-white rounded bg-red-500"><i class="fa fa-trash-o fa-lg"></i> Delete</button>
       
        </div>
        </div>
        
       
        </div>
      </div>
 </div>
</comment>
</div>
@endforeach
 {{$comments->links()}}
</div>
