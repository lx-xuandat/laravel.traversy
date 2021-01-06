@extends('layouts.main')

@section('title')
    Post Detail - {{ $post['id'] }}
@endsection

@section('main-content')
    <a href="/post" class="btn btn-primary">Go Back</a>
    <h1>{{ $post['title'] }}</h1>
    <img src="/storage/cover_images/{{$post->cover_image}}" class="rounded mx-auto d-block img-fluid" alt="{{$post->cover_image}}">
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
    <hr>
        @if(!Auth::guest() && ! ( Auth::user()->id !== $post->user_id) )
            <ul class="nav mt-3">

            <li class="nav-item ml-3">
                <a href="/post/{{ $post->id }}/edit" class="btn btn-secondary">Edit</a>
            </li>

            <li class="nav-item  ml-3">
                {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {!! Form::close() !!}
            </li>
            </ul>

        @endif
@endsection
