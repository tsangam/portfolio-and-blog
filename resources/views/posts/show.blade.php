@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-success" style="margin-top:8px">Go Back </a>    
<h2 style="font-weight:bold ; margin-bottom:15px ; margin-top:20px">  {{$post-> title}}</h2>
<div class="container" style="width:500px; height:400px">


<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"> 
</div>
    
    <div class="jumbotron">
        {!!$post->body!!}
    </div>
    <small> Written on {{$post->created_at}} </small>
    <hr>
    <div style="display:flex " >
        @if (!Auth::guest())
            @if (Auth::user()->id== $post->user_id)
            <a href="/posts/{{$post->id}}/edit" > <div class="btn btn-dark" style='margin-top:10px'>Edit </div></a>
            {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST','class'=>'pull-right']) !!}
            
            {!! Form::hidden('_method','DELETE') !!}
            {{Form::submit('Delete',['class'=>'btn btn-danger','style'=> 'margin-top:10px ; margin-left:20px '     ])}} 
            {!! Form::close() !!}   
            @endif
        @endif

    </div>

@endsection