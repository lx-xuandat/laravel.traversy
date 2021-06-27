@extends('layouts.main')

@section('title')
    Xin Chào Bạn Hiền
@endsection

@section('sidebar')
    {{-- @parent
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <nav><a href="/posts/create">Create Post</a></nav>
                @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif --}}
@endsection

@section('main-content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <h3>Your Blog Posts</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" colspan="3">Title</th>
                            <th scope="col">ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $post->title }}</td>
                                <td><a href="/post/{{ $post->id }}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                    {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {!! Form::close() !!}
                                </td>
                                <td>{{ $post->id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
