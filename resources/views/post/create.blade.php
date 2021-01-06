<?php
/**
 * @class Collective\Html\FormFacade as Form
 * @class Collective\Html\HtmlFacade as Html
 **/
?>

@extends('layouts.main')

@section('main-content')
    <h1>Create Post</h1>
    {!! Form::open(['action'=>'PostController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Tieu De')}}
        {{Form::text('title','',
            [
                'class'=>'form-control',
                'placeholder'=>'Title',
            ])
        }}
    </div>

    <div class="form-group">
        {{Form::label('body','Noi Dung',['class'=>'mt-3'])}}
        {{Form::textarea('body','',
            [
                'id'=>'article-ckeditor',
                'class'=>'form-control ',
                'placeholder'=>'Body Text',
            ])
        }}
    </div>

    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>

    {{Form::submit('Submit',['class'=>'btn btn-primary mt-3'])}}
    {!! Form::close() !!}
@endsection
