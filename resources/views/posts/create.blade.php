@extends('layouts.app')

@section('content')
    <h3>Create Post</h3>
    {!! Form::open(['action' => 'PostsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div class="form-group">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endSection