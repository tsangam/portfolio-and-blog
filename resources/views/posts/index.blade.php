@extends('layouts.app')
@section('content')
    <h2 style="font-weight:bold ; margin-bottom:15px ; margin-top:20px"> POSTS</h2>
    @if(count($posts)>0)
    @foreach($posts as $post)
    <div class="well"> 
        <div class="row">
          
        <div class="col-md-4 col-sm-4" >
            <img style="width:100% " src="/storage/cover_images/{{$post->cover_image}}">    
        </div>
        <div class="col-md-8 col-sm-8">
        <h3 class="text-center rounded p-2 font-weight-bold"  style="background-color:rgb(191, 201, 201)"><a style="text-decoration:none" href="/posts/{{$post->id}}">      {{$post-> title}}</a></h3>
        
        <small>Created at {{$post->created_at}} by {{$post->user->name}}</small>
        
        </div>
           
    </div>
    </div>
    <br>
    <br>
    

    @endforeach
    {{$posts->links()}}
    @else
    <p> No Posts Found </p>
    @endif
@endsection