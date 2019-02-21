@extends('layouts.app')

@section('content')
    <h3>{{$post->title}}</h3>
       
        <a href="/posts" class="btn btn-primary">BACK</a>
        <h1>{{$post->title}}</h1>

        {{ Html::image('storage/cover_images/'.$post->cover_image) }}
        <br><br>
        <div>{!!$post->body!!}</div>

        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
   
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a>   
            
            {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete Post',['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif

@endsection