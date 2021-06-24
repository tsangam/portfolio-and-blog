@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a class="nav-link" href="/posts/create" style="text-decoration:none; font-size:16px ; color:red">
                    <div class="btn btn-success">Create post
            
                  </div></a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 <h3> Your Posts</h3>
                 @if (count($posts)>0)
                 <table class="table table-striped">
                    <tr> <th>Title</th>
                    <th> </th>
                    <th> </th> 
                    </tr>
                @foreach ($posts as $post)
                <tr> 
                    <th>{{$post->title}}</th>
                    <div style="display:flex"><th> <a href="/posts/{{$post->id}}/edit" class="btn btn-dark"> Edit </a> </th>
                    <th> {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST','class'=>'pull-right']) !!}
                        
                        {!! Form::hidden('_method','DELETE') !!}
                        {{Form::submit('Delete',['class'=>'btn btn-danger','style'=> ' margin-left:10px '     ])}} 
                        {!! Form::close() !!}</th> 
                    </div>
                </tr>
                 
                    
                @endforeach
                
                </table>
                @else 
                <p> You have no posts.</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
