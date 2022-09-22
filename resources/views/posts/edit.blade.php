@extends('layouts.app')
@section('content')

<h1>Edit Post </h1>
<form method="POST" >
    @csrf
    <div class="form-group">
      <label >Title</label>
      <input type="text" class="form-control" placeholder="Title" name="Title"  value="{{$post->title}}"> 
    </div>
   
      <label>Body</label>
      <textarea class="form-control" placeholder="Body" name="Body"  value="{{$post->body}}" > </textarea>
      <br>
    
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection


