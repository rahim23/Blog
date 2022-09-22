@extends('layouts.app')

@section('content')

<h1>Create Post </h1>
<form method="POST" action="/posts/create" >
    @csrf
    <div class="form-group">
      <label >Title</label>
      <input type="text" class="form-control" placeholder="Title" name="Title"  value="{{ old('title') }}" required autocomplete> 
    </div>
      <label>Body</label>
      <textarea class="form-control" placeholder="Body" name="Body"  value="{{ old('Body') }}" required autocomplete> </textarea>
      <br>
    
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection


