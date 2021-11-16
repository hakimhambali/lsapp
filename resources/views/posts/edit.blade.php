@extends('layouts.app')

@section('content')
    <h1>Edit</h1>
    {{-- {!! Form::open(['url'     => 'PostsController@store', 'method' => 'POST']) !!} --}}
    {{-- {!! Form::open(['url'     => [\App\Http\Controllers\PostsController::class, 'store'], 'method' => 'POST']) !!} --}}
    {!! Form::open(['url' => ['posts', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>  

        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Content'])}}
            </div>
            <div class="form-group">
                {{Form::file('thumbnail_image')}}
                </div> 
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection