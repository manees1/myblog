<<<<<<< HEAD:resources/views/admin/posts/edit.blade.php
@extends('layouts.admin_layout')
=======
@extends('layouts.app')
>>>>>>> e7ee49c0c8d38d54ff4a5399fb50cc780ac57a61:resources/views/Posts/edit.blade.php

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
<<<<<<< HEAD:resources/views/admin/posts/edit.blade.php
                <a class="btn btn-primary" href="{{ route('admin.posts.index') }}"> Back</a>
=======
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
>>>>>>> e7ee49c0c8d38d54ff4a5399fb50cc780ac57a61:resources/views/Posts/edit.blade.php
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<<<<<<< HEAD:resources/views/admin/posts/edit.blade.php
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
=======
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
>>>>>>> e7ee49c0c8d38d54ff4a5399fb50cc780ac57a61:resources/views/Posts/edit.blade.php
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    <textarea class="form-control" style="height:150px" name="content" placeholder="Content">{{ $post->content }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
