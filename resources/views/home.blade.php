@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a class="btn btn-primary" href="/posts/create">Create Post</a>
                <br>
                <h3>Blog Post  </h3>
                @if(count($posts)>0) 
                  <table class="table table-striped">
                    <tr> 
                      <th>Title </th>              
                      <th>boody </th>              
                      <th>id </th>                       

                    </tr> 
                    <tr> 
                        @foreach($posts as $post)
                        <th>{{$post->title}} </th>              
                        <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit  </a> </th>              
                        <th>id </th>                       
  
                      </tr> 
  
                        @endforeach
                  </table>
                  @else 
                  <p> You have no posts</p>   
                 @endif
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
