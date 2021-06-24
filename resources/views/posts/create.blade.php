@extends('layouts.app')

@section('content')


    <h2 style="font-weight:bold ; margin-bottom:15px ; margin-top:20px"> Create Post</h2>

    {!! Form::open(['action'=>'PostsController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title',['style'=>'font-weight:bold;font-size:20px'])}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}} 
        </div>
        <div class="form-group">
            {{Form::label('body','Body',['style'=>'font-weight:bold; margin-top:10px ; font-size:20px'])}}
            {{Form::textarea('body','',['id'=>'ckeditor','class'=>'form-control','placeholder'=>'Body'])}}
        </div>
        <div class="form-group">
         {{Form::file('cover_image')}}
        </div>
            {{Form::submit('Submit',['class'=>'btn btn-success','style'=> 'margin-top:10px'     ])}} 
       
    {!! Form::close() !!}
    
   
@endsection
