@extends('layouts.app')

@section('content')
<div class="container">
<h1>Posts </h1>
 @if(count($posts)>1)
   @foreach($posts as $post)
     <div class="card card-body">
        <ul class="list-group list-group-fush">
           <li class="list-group-item">
           <h3><a href="/posts/{{$post->id}}"> {{$post->title}} </a> </h3>
           <small>Body : {{$post->body}}      </small>
           </li> 
        </ul>    
     </div>
    @endforeach

   @else

   @endif  
</div>
@endsection
