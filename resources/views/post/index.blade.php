<?php
/**
 * @var App\Post $posts
 *
 */
?>
@extends('layouts.main')

@section('main-content')
    <h1>Post</h1>
    @if (count($posts) > 0)
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-sm-6 mt-3 ">

                    <div class="card">
                        <div class="card-header">
                            {{ $post->title }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img class="img-thumbnail" src="./storage/cover_images/{{$post->cover_image}}"
                                         alt="{{$post->cover_image}}">
                                </div>

                                <div class="col-md-8 col-sm-8">
                                    <h5 class="card-title">Written on {{ $post->created_at }}
                                        by {{ $post->user->name }}</h5>
                                    <p class="card-text">{!! $post->body !!}</p>
                                    <a href="/post/{{ $post->id }}" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $posts->links('inc.pagination.bs4-simple') }}

        </div>
    @else
        <p>No post found</p>
    @endif
@endsection
