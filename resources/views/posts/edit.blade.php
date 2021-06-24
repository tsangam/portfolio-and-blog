@extends('layouts.app')
@section('content') 
    <h2 style="font-weight:bold ; margin-bottom:15px ; margin-top:20px"> Edit Post</h2>

    {!! Form::open(['action'=>['PostsController@update', $post->id], 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title',['style'=>'font-weight:bold;font-size:20px'])}}
            {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}} 
        </div>
        <div class="form-group">
            {{Form::label('body','Body',['style'=>'font-weight:bold; margin-top:10px ; font-size:20px'])}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
           </div>
        {!! Form::hidden('_method','PUT') !!}
            {{Form::submit('Submit',['class'=>'btn btn-success','style'=> 'margin-top:10px'     ])}} 
       
    {!! Form::close() !!}
    
@endsection