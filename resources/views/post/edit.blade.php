@extends('layouts.main')

@section('main-content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Tieu De') }}
        {{ Form::text('title', $post->title, [
                'class' => 'form-control',
                'placeholder' => 'Title',
            ]) }}
    </div>

    <div class="form-group">
        {{ Form::label('body', 'Noi Dung', ['class' => 'mt-3']) }}
        {{ Form::textarea('body', $post->body, [
                'id' => 'article-ckeditor',
                'class' => 'form-control ',
                'placeholder' => 'Body Text',
            ]) }}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary mt-3']) }}
    {!! Form::close() !!}
@endsection
