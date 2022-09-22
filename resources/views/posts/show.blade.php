@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{$post->title}} </h1>
<p> {{$post->body}} </p>
<a href="/posts" class="btn btn-primary">Go Back </a>



@if(!Auth::guest())
 @if(Auth::user()->id==$post->user_id)
   <form  method="post">
      @csrf
      <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
      @method('DELETE')
      <input class="btn btn-danger" type ="submit" value="Delete">
    </form>
</div>

  @endif
 @endif

 @endsection
