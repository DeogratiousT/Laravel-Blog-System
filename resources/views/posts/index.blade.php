@extends('layouts.app')

@section('content')
    <h3>Posts</h3>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="/posts/{{$post->id}}"><img style="padding-left:19px; width:70%; height:95px" src="storage/cover_images/{{$post->cover_image}}"></a>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
       <p>No Posts Found</p>     
    @endif
@endsection